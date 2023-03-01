<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            //$table->unsignedBigInteger('user_id') -> unsigned() -> nullable(false);
            //$table->unsignedBigInteger('book_id') -> unsigned() -> nullable(false);
            $table->foreignId('user_id') -> references('id') -> on('users') -> onDelete('set default') -> default(0); // 0: anonymous
            $table->foreignId('book_id') -> references('id') -> on('books') -> onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
