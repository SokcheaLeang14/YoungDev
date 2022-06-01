<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class AuthorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $authors = Authors::get();
    return view('author.index', compact('authors'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('author.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $request->validate([
      'name' => 'required',
    ]);

    $data = [
      'name'   => $request->name,
      'age'  => $request->age,
      'gender' => $request->gender,
      'email' => $request->email,
      'created_at' => date('Y-m-d'),
      'updated_at' => date('Y-m-d'),
    ];
    Authors::insert($data);
    return redirect('author')->with('success', 'Create Successful');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $author = Authors::find($id);
    return view('author.update', compact('author'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'name'      => 'required',
    ]);
    $data = [
      'name'   => $request->name,
      'age'  => $request->age,
      'gender' => $request->gender,
      'created_at' => date('Y-m-d'),
      'updated_at' => date('Y-m-d'),
    ];
    Authors::where('id', $id)->update($data);
    return redirect('author')->with('success', 'Update Successful');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Authors::find($id)->delete();
    return redirect()->back()->with('success', 'Delete Successful');
  }
}
