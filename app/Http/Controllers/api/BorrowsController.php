<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Borrows;
use Illuminate\Http\Request;

class BorrowsController extends Controller
{
  public function borrowBooks(Request $request)
  {
    $validate = $request->validate([
      'stu_id' => 'required|string',
      'book_id' => 'required|string',
    ]);
    $data = Borrows::create([
      'stu_id' => $validate['stu_id'],
      'book_id' => $validate['book_id'],
      'description' => $request->input('description'),
      'approval' => $request->input('approval'),
      'borrow_date' => $request->input('borrow_date'),
      'return_date' => $request->input('return_date'),
      'quantity' => $request->input('quantity'),
      'code' => $request->input('code')
    ]);

    if ($data) {
      return response()->json([
        'data' => $data,
        'status' => 1,
        'message' => 'You have successfully borrowed the books.'
      ], 200);
    } else {
      return response()->json([
        'status' => 0,
        'data' => '',
        'message' => 'You are not successfully borrowed the books'
      ], 201);
    }
  }
}
