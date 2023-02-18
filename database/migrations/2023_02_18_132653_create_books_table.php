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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('isbn');
            $table->text('description');
            //$table->unsignedBigInteger('author_id');
            //$table->unsignedBigInteger('category_id');
            $table->foreignId('author_id') -> constrained() -> onDelete('cascade');
            $table->foreignId('category_id') -> constrained() -> onDelete('cascade');
            //$table->foreign('author_id') -> references('id') -> on('authors') -> onDelete('set null');
            //$table->foreign('category_id') -> references('id') -> on('categories') -> onDelete('set null');
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
        Schema::dropIfExists('books');
    }
};
