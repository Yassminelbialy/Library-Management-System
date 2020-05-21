<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use \App\Book;
use \App\Favorite;
use \App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;
use \App\Category;

class FavoriteController extends Controller
{

    public function index(){
        $books= DB::table('books')->get();
        $allFavBooks = DB::table('favorites')->get();
        return view('books.myfavorites', ["books"=>$books,"allFavBooks"=>$allFavBooks]);


    }
    
    public function bookFavBook(Request $request){
        $book_id = $request['bookid'];
       
        $fav = DB::table('favorites')
        ->where('book_id', $book_id)
        ->where('user_id', Auth::user()->id)
        ->first();

        if(!$fav){
            $newfav = new Favorite;
            $newfav->book_id =$book_id; 
            $newfav->user_id = Auth::user()->id;
            $newfav->fav = 1;
            $newfav->save();

            $is_fav = 1;
        }
        elseif ($fav->fav == 1){
            DB::table('favorites')
        ->where('book_id', $book_id)
        ->where('user_id', Auth::user()->id)
        ->delete();

        $is_fav = 0;
        }
        elseif ($fav->fav == 0){
            DB::table('favorites')
        ->where('book_id', $book_id)
        ->where('user_id', Auth::user()->id)
        ->update(['fav'=> 1] );

        $is_fav = 1;
        }

        $response = array(
            'is_fav'=>$is_fav,
        );

        return response()->json($response, 200);
        
    } 


    // another logic to favorite books but some wrongs

    // public function bookLikeBook(Request $request){
    //     $book_id = $request['bookid'];
    //     $is_like = $request['islike'] === 'true';
    //     $update = false;
    //     $book = Book::find($book_id);
    //     $user = Auth::User();
    //     $like = $user->likes()->where('book_id', $book_id)->first();
    //     if($like){
    //         $already_like = $like->fav;
    //         $update = true;
    //         if($already_like == 1){
    //             $like->delete();
    //             return null;
    //         }
    //     }else{
    //         $like = new Favorite();
    //     }
    //     $like->fav = $is_like;
    //     $like->book_id = $book->id;
    //     $like->user_id = $user->id;
    //     if($update){
    //         $like->update();
    //     }else{
    //         $like->save();
    //     }
    //     return null;
    // }
}
