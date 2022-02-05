<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('frontend.index');
    }

    public function create() {

        return view('frontend.students.create');

    }

    public function store(Request $request){
        // check if the password and confirm is matching
        if($request->password == $request->confirm){

            $validated = $request->validate([
                'username' => ['required', 'max:20', 'string'],
                'email' => ['required', 'string'],
                'password' => ['required','string','min:4','max:20'],
                'confirm' => ['required', 'string' ,'min:4','max:20'],
                'department' => ['required', 'string','min:4', 'max:20'],
                'telephone' => ['required', 'string','min:9'],
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);

            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);

            $data = [
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'department' => $validated['department'],
                'telephone' => $validated['telephone'],
                'image' => $imageName
            ];
            
            Students::create($data);

            return redirect('/home')->with('message', "Welcome to Our Book Store :D");
        }
        else{
            return back()
                    ->with('error','Password is not matched!!')
                        ->withInput();
        }
    }

    public function login() {
        return view('frontend.students.login');
    }

    public function auth(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){

            return redirect()
                        ->intended('/home'); 
        }
        else{

            return back()
                        ->withInput()
                            ->withErrors([
                                'email' => 'The email provided do not match our records.',
                                'password' => 'The password provided does not match out records'
                            ]);
        }
    }
}
