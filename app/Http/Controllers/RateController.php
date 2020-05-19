<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    public function store(Request $request)
    {
        $value_rate = $request->input('value_rate');

        $book_id = $request->input('book_id');

        $user = Auth::user()->id;

        $user_is_exist = Rate::where('user_id', '=', $user)->where('book_id', '=', $book_id)->get()->count();

        $rate = new Rate();

        if ($user_is_exist == 0) {

            $rate->rate_value = (int) $request->input('value_rate');

            $rate->user_id = $user;

            $rate->book_id = (int) $book_id;

            $rate->save();

        } else {
            Rate::where([

                'user_id' => $user,

                'book_id' => $book_id

            ])->update(array('rate_value' => $value_rate));
        }

        $count_rate_of_book = Rate::where('book_id', '=', $book_id)->get()->count();

        $sum_values_rate = Rate::where('book_id', '=', $book_id)->get()->sum('rate_value');

        $total_rate = $sum_values_rate / $count_rate_of_book;

        $decimal_total_rate = substr($total_rate, 0, 3);

        $integer_total_rate = substr($total_rate, 0, 1);

        $is_desimal = $decimal_total_rate - $integer_total_rate;

        if ($request->ajax()) {

            for ($i = 1; $i <= $integer_total_rate; $i++) {

                echo '<i  data-value="' . $i . '" class="fas fa-star fa-2x"></i>';
            }

            if ($is_desimal >= .3 and $is_desimal <= 8) {

                echo '<i  data-value="' . $i . '" class="fas fa-star-half-alt fa-2x"></i>';

                for ($i =  $integer_total_rate + 2; $i <= 5; $i++) {

                    echo '<i  data-value="' . $i . '" class="far fa-star fa-2x"></i>';
                }

            }
            else{

                for ($i =  $integer_total_rate + 1; $i <= 5; $i++) {

                    echo '<i  data-value="' . $i . '" class="far fa-star fa-2x"></i>';

                }
            }

            echo '<div class="rate_div"> total rated is <span class="rate_numbers"> ' . $decimal_total_rate . '</span>  from  <span class="rate_numbers" > ' . $count_rate_of_book . '</span> Users </div>';

            return;
        }
    }
}
