<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Borrow;
use \App\Book;
use \App\Http\Requests\BookRequest;
use Auth;  //to access session

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::findOrFail($request->book_id);
        if($book->amount>=1)
        { 
            $book->amount=$book->amount-1;
            $borrow= new Borrow;
            $borrow->user_id=Auth::id();
            $borrow->book_id=$request->book_id;
            $borrow->days=$request->days;
            $borrow->save();
            $book->save();
        }
       
        
        return redirect()->route('home');
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
        
        return view('books.book_lease', ['mybook'=>$mybook]);
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
        // $userbooks= \App\Borrow::where('user_id',\Auth::id())->get(); 
        $userbooks= \App\Borrow::where('user_id',\Auth::id())->paginate(3);
        // dd(Auth::user());
        $user = Auth::user();
        // echo "$userbooks";
        $z = [];
  
        foreach( $userbooks as $book){
        $boo = \App\Book::where('id',$book->book_id)->get();
        // echo "$boo";
        array_push($z, $boo);     

        }
        return view('userbooks',['userbooks'=>$z]);   
    }
}
