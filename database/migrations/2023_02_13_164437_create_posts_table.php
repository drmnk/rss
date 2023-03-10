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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            // Я не знаю, как называется часть статьи, которая
            // идёт до ката. Пусть будет before_cut
            $table->string('before_cut', 100);
            $table->text('body');
            /*
                Наверное, тут лучше ограничение на удаление непустой категории
                Кому понравится, что все новости вдруг пропадут
            */
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
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
};
