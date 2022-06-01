<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	// get all users 
	public function index()
	{
		$users = User::all();

		return view('users.index', ['users' => $users]);
	}

	// redirect to create
	public function create()
	{
		return view('users.create');
	}

	public function store(Request $request)
	{

		$dataIsValid = $request->validate([
			'username' => 'required|string|max:255',
			'email' => 'required',
			'password' => 'required|min:4|max:20',
			'confirm' => 'required|min:4|max:20',
			'telephone' => 'required',
			'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
			'admin' => 'required',
			'status' => 'required'
		]);

		// check if the user confirm the correct password
		if ($dataIsValid['password'] == $dataIsValid['confirm']) {

			// store image in public/images dir
			$imageName = $request->file('image')->getClientOriginalName();
			$request->image->move(public_path('images'), $imageName);

			$data = [
				'username' => $dataIsValid['username'],
				'email' => $dataIsValid['email'],
				'password' => Hash::make($dataIsValid['password']),
				'telephone' => $dataIsValid['telephone'],
				'image' => $imageName,
				'is_admin' => $dataIsValid['admin'],
				'status' => $dataIsValid['status']
			];

			User::create($data);
			return redirect('/');
		}
		return redirect('/users/create')->withInput();
	}

	// edit user
	public function edit($id)
	{
		$data = User::find($id);

		return view('users.update', ['users' => $data]);
	}

	// update user
	public function update(Request $request, $id)
	{
		$dataIsValid = $request->validate([
			'username' => 'required|string|max:255',
			'email' => 'required',
			'password' => 'required|min:4|max:20',
			'confirm' => 'required',
			'telephone' => 'required',
			'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
			'admin' => 'required',
			'status' => 'required'
		]);
		if ($dataIsValid['password'] == $dataIsValid['confirm']) {

			$imageName = $request->file('image')->getClientOriginalName();
			$request->image->move(public_path('images'), $imageName);

			$data = [
				'username' => $dataIsValid['username'],
				'email' => $dataIsValid['email'],
				'password' => Hash::make($dataIsValid['password'], [round(10)]),
				'telephone' => $dataIsValid['telephone'],
				'image' => $imageName,
				'is_admin' => $dataIsValid['admin'],
				'status' => $dataIsValid['status']
			];

			User::find($id)->update($data);

			return redirect('/users')
				->with('message', 'User is updated!!');
		} else {
			return back()
				->with('status', 'Password does not match')
				->withInput();
		}
	}

	// delete user
	public function destroy($id)
	{
		User::where('id', $id)->delete();

		return redirect('/users')
			->with('message', 'User has been deleted!!');
	}
}
