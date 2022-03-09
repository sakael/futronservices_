<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(true);
            $table->string('sub_title')->nullable(true);
            $table->string('seo_title')->nullable(true);
            $table->string('seo_disc')->nullable(true);
            $table->string('hero_backgorund')->nullable(true);
            $table->text('short_content')->nullable(true);
            $table->longtext('content')->nullable(true);
            $table->boolean('active')->default(false);
            $table->string('slug', 191)->unique();
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
        Schema::dropIfExists('pages');
    }
}
