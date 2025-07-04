<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        if (Schema::hasColumn('posts', 'user_id')) { // Проверяем, существует ли столбец
            $table->dropColumn('user_id');
        }
    });
}
}

