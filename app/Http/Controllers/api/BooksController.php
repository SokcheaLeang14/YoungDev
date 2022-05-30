<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BooksResource;
use App\Models\Authors;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function getAllBooks() {
        $books = Books::all();

        return response()->json([
            'data' => BooksResource::collection($books),
            'status' => 1,
        ], 200);
    }

    public function viewBookDetail($id) {
        $books_detail = Books::where('id', $id)->get();

        return response()->json([
            'data' => BooksResource::collection($books_detail),
            'status' => 1,
        ], 200);
    }

    public function searchBook(Request $query) {
        $type = strtolower($query['type']);
        $payload = strtolower($query['payload']);

        if($type == 'author') {
            $author = Authors::where('name', $payload)->first();
            $id = $author['id'];
            $search_by_author = Books::where('author_id', $id)->get();
            return response()->json([
                'data' => BooksResource::collection($search_by_author),
                'status' => 1
            ], 200);
        } elseif ($type == 'isbn') {
            $search_by_isbn = Books::where('isbn', $payload)->get();

            return response()->json([
                'data' => BooksResource::collection($search_by_isbn),
                'status' => 1
            ],200);
        } elseif ($type == 'title') {
            $search_by_title = Books::where('title', 'like' , '%'.$payload.'%')->get();

            return response()->json([
                'data' => BooksResource::collection($search_by_title),
                'status' => 1
            ],200);
        } else {
            $__ = Books::where('title', 'like', '%*%')->get();
            return response()->json([
                'data' => BooksResource::collection($__),
                'status' => 1
            ]);
        }
    } 
}
