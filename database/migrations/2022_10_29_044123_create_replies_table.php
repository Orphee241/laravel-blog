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
        if(!Schema::hasTable("replies")){
        Schema::create('replies', function (Blueprint $table) {
            $table->id();
            $table->string("auteur");
            $table->text("corps");
            $table->index("comment_id");
            $table->index("article_id");
            $table->foreignId("comment_id")->references("id")->on("comments")->onDelete("cascade");
            $table->foreignId("article_id")->references("id")->on("articles")->onDelete("cascade");
            $table->timestamp("created_at")->nullable();
            $table->timestamp("updated_at")->nullable();
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
};
