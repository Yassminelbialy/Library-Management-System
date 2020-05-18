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
        $userbooks= \App\Borrow::where('user_id',\Auth::id())->get(); 
        // $userbooks= \App\Borrow::where('user_id',\Auth::id())->paginate(3);
        // dd(Auth::user());
        $user = Auth::user();
        // echo "$userbooks";
        $z = [];
  
        foreach( $userbooks as $book){
        $boo = \App\Book::where('id',$book->book_id)->get();
        // // echo $boo[0]->title;
        array_push($z, $boo);
        }
        // // echo "*********";
        // echo $boo; //Array
        // foreach($z as $r){
        //     echo $r." ";
        // }
        // for ($i = 0 ; $i <count($z); $i ++)
        // {
        //  echo $z[$i]." ";
        // }
        // echo "***********";
                dd($z);
        return view('userbooks',['userbooks'=>$z]);
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
    public function store(Request $request)
    {
        //
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
