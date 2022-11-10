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
            if(!Schema::hasTable("tutos")){
                Schema::create('tutos', function (Blueprint $table) {
                    $table->id();
                    $table->string("titre");
                    $table->string("temps");
                    $table->string("auteur");
                    $table->string("categorie");
                    $table->string("description");
                    $table->string("video");
                    $table->string("prix");
                    $table->date("date_publication");
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
        Schema::dropIfExists('tutos');
    }
};
