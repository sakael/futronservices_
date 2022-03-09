<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderships', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(true);
            $table->string('position')->nullable(true);
            $table->text('text')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('mail')->nullable(true);
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('leaderships');
    }
}
