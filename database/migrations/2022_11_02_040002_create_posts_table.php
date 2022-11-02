<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title', '255')->nullable();
            $table->string('category', '10')->comment('serie | filme');
            $table->longText('img')->nullable();
            $table->string('status', 100)->nullable()->comment('start | finish');
            $table->integer('positive_rec')->default(0)->nullable();
            $table->integer('negative_rec')->default(0)->nullable();
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
        Schema::dropIfExists('posts');
    }
}
