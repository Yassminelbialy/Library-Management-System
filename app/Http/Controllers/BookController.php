<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;
use \App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;
use \App\Category;
use \App\Comment;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $books= DB::table('books')->paginate(3);
        $categories= DB::table('categories')->paginate(10);
        return view('books.mybooks', ["books"=>$books ,"categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mybook = Book::findOrFail($id);
        $categoryName = Category::findOrFail($mybook->cate_id)->name;
        // $booksRelated=Category::
        $books_specific_category = Book::where('cate_id', $mybook->cate_id)->get();

        // $categoryName = Category::findOrFail($mybook->cate_id)->name;
        $comments=DB::table('comments')->where('book_id', '=', $id)->get();
        $commentOwner= DB::table('comments')
            ->join('users', 'users.id', '=', 'comments.user_id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('comments.book_id', '=', $id)
            ->select('users.name')
            ->get();
        // error_log($var);
        return view('books.book_details', ['mybook'=>$mybook, 'categoryName'=>$categoryName,
                    'comments'=>$comments, 'commentOwner'=>$commentOwner,'books_specific_category'=>$books_specific_category ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
