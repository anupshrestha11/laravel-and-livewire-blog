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
            $table->string("title");
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('featured_image_path');
            $table->longText('content');
            $table->integer('status')->default(1);
            $table->integer('views')->default(0);
            $table->unsignedInteger('type')->default(1);
            $table->unsignedBigInteger('comment_count')->default(0);
            $table->dateTime('published_at')->nullable();
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
