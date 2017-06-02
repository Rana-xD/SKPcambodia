<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
          $table->increments('id');
          $table->string('home',30);
          $table->string('about_us',30);
          $table->string('mission',30);
          $table->string('team',30);
          $table->string('services',30);
          $table->string('resources',30);
          $table->string('report',30);
          $table->string('publication',30);
          $table->string('law',30);
          $table->string('news',30);
          $table->string('announment',30);
          $table->string('training',30);
          $table->string('employment',30);
          $table->string('blog',30);
          $table->string('contact_us',30);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
