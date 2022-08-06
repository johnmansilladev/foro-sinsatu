<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        \Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0'); 
        Schema::create('contributors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('github_id');
            $table->string('name');
            $table->string('avatar_url');
            $table->string('github_url');
            $table->integer('contribution_count')->default(0);

            $table->timestamps();
        });
    }
};
