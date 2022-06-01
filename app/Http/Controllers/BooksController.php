<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Authors;

class BooksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $books = Books::get();
    return view('book.index', compact('books'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Categories::get();
    $authors = Authors::get();
    return view('book.create', compact('categories', 'authors'));
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
      'isbn'      => 'required|unique:books',
      'title'     => 'required|max:255',
      'cat_id'    => 'required',
      'author_id' => 'required',
      'quantity'  => 'required',
      'location'  => 'required',
    ]);
    if ($request->hasFile('image')) {
      $images = $request->file('image');
      $destinationPath = "images/";
      $fileNames = $images->getClientOriginalName();
      $fileName = str_replace(" ", "-", $fileNames);
      $fileupload = $images->move($destinationPath, $fileName);
    }
    $data = [
      'isbn'   => $request->isbn,
      'title'  => $request->title,
      'category_id' => $request->cat_id,
      'author_id' => $request->author_id,
      'description' => $request->description,
      'quanity' => $request->quantity,
      'status' => $request->status,
      'release_date' => date("Y-m-d h:i:s", strtotime($request->release_date)),
      'location' => $request->location,
      'image' => $fileName,
      'created_at' => date("Y-m-d"),
      'updated_at' => date("Y-m-d"),
    ];
    Books::insert($data);
    return redirect('book')->with('success', 'Create Successful');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $categories = Categories::get();
    $authors = Authors::get();
    $book = Books::find($id);
    return view('book.update', compact('book', 'categories', 'authors'));
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
    $book = Books::first();
    $request->validate([
      'isbn'      => 'required',
      'title'     => 'required|max:255',
      'category_id'    => 'required',
      'author_id' => 'required',
      'quanity'  => 'required',
      'location'  => 'required',
    ]);
    if ($request->hasFile('image')) {
      $images = $request->file('image');
      $destinationPath = "images/";
      $fileNames = $images->getClientOriginalName();
      $fileName = str_replace(" ", "-", $fileNames);
      $fileupload = $images->move($destinationPath, $fileName);
    } else {
      $fileName = $book->image;
    }
    $data = [
      'isbn'   => $request->isbn,
      'title'  => $request->title,
      'category_id' => $request->category_id,
      'author_id' => $request->author_id,
      'description' => $request->description,
      'quanity' => $request->quanity,
      'status' => $request->status,
      'release_date' => date("Y-m-d h:i:s", strtotime($request->release_date)),
      'location' => $request->location,
      'image' => $fileName,
      'created_at' => date("Y-m-d"),
      'updated_at' => date("Y-m-d"),
    ];
    Books::where('id', $id)->update($data);
    return redirect('book')->with('success', 'Successfull Create');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $Book = Books::find($id);
    $Book->delete();
    return redirect('book')->with('success', 'Delete Successful');
  }
}
