<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        \Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0'); 
        Schema::create('tagged_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id');
            $table->integer('tag_id');

            $table->timestamps();
        });
    }
};
