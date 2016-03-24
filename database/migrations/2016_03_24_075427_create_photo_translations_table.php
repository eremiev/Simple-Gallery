<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('photo_id');
            $table->string('lang', 4);
            $table->string('name', 150);
            $table->text('description');
            $table->timestamps();

            $table->index(['photo_id']);

            $table->foreign('photo_id')
                ->references('id')
                ->on('photos')
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
        if (Schema::hasTable('photo_translations')) {

            Schema::table('photo_translations', function (Blueprint $table) {
                $table->dropForeign('photo_translations_photo_id_foreign');
            });

            Schema::drop('photo_translations');
        }
    }
}
