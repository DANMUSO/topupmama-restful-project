<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
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
            $table->string('url');
            $table->string('name');
            $table->string('isbn');
            $table->string('numberofPages');
            $table->string('publisher');
            $table->string('country');
            $table->string('mediaType');
            $table->string('released');
            $table->string('author_id');
            $table->string('numberofcomments');
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
}
