<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;
use \App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;
use \App\Category;

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
        $categories= DB::table('categories')->paginate(2);
        return view('books.mybooks', ["books"=>$books ,"categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        //store
        $book=new book;
        $book->title=$request->title;
        $book->amount=$request->amount;
        $book->author=$request->author;
        $book->price=$request->price;
        $book->cate_id=$request->cate_id;
        $book->description=$request->description;
        // first request img then give parameters to store 
        $book->book_img=$request->book_img->store('images','public');        
        
        // upload img to path , assign the img request to real file, then get name as date upload
        if ($files = $request->file('book_img')) {
            $destinationPath = 'images/'; 
            $bookImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $bookImage);
            $book->book_img=$bookImage;  // assign img to book
        }

        $book->save();

<<<<<<< HEAD

=======
>>>>>>> 9f28231238942e1a0fb99e55ef6d78cb43e335e5
        return redirect('/books');
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
        return view('books.book_details', ['mybook'=>$mybook, 'categoryName'=>$categoryName]);

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
