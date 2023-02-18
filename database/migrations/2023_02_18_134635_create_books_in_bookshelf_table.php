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
        Schema::create('books_in_bookshelf', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('book_id');
            //$table->unsignedBigInteger('bookshelf_id');
            $table->foreignId('book_id') -> references('id') -> on('books') -> onDelete('cascade');
            $table->foreignId('bookshelf_id') -> references('id') -> on('bookshelves') -> onDelete('cascade');
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
        Schema::dropIfExists('books_in_bookshelf');
    }
};
