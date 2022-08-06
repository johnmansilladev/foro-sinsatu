<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        \Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0'); 
        Schema::create('forum_threads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->string('subject');
            $table->text('body');
            $table->string('slug');
            $table->string('category_slug');
            $table->integer('laravel_version');
            $table->integer('most_recent_reply_id');
            $table->integer('reply_count');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
