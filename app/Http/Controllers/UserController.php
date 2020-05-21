<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \app\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        $users = \app\User::where('adminRole', "0")->get();
        // dd ($users);
        return view('users.index', ["users"=>$users]);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/users');
    }
   
    public function trash()
    {

        $users=User::onlyTrashed()->get();
        
        return view('users.trash', ["users"=>$users]);
    }

    // public function sdelete($id)
    // {
        
    //     $user=\app\User::find($id);
    //     $user->delete();
    //     return redirect('/users');

    // }


    public function restore($id)
    {
        $user=\app\User::find($id)->withTrashed()->get();
        $user->restore();
    }
}
