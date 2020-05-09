<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFKToBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borrows', function (Blueprint $table) {
              // FK
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
             // FK
            $table->unsignedBigInteger('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrows', function (Blueprint $table) {
            //
        });
    }
}
