<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('profile_name');
            $table->text('profile_description');
            $table->text('how_it_helps');
            $table->foreignId('project_category')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_profiles');
    }
}
