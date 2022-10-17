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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("titre");
            $table->string("description");
            $table->text("corps");
            $table->string("auteur");
            $table->string("nom_categorie");
            $table->date("date_publication");
            $table->timestamp("updated_at")->nullable();
            $table->timestamp("created_at")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
