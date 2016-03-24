<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('image_id');
            $table->string('name', 150);
            $table->text('description');
            $table->timestamps();

            $table->index(['image_id']);

            $table->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('image_translations')) {

            Schema::table('image_translations', function (Blueprint $table) {
                $table->dropForeign('image_translations_image_id_foreign');
            });

            Schema::drop('image_translations');
        }
    }
}
