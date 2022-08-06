<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        \Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0'); 
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('github_id')->default('');
            $table->string('github_url')->default('');
            $table->string('email');
            $table->string('name');

            $table->timestamps();
        });
    }
};
