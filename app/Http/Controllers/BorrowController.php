<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrow;
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
