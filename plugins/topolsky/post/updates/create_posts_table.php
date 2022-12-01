<?php namespace Topolsky\Post\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('topolsky_post_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->string('title');

            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('topolsky_post_posts');
    }
}
