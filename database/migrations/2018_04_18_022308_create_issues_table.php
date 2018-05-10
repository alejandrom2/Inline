<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('date_raised');
            $table->dateTime('assigned')->nullable();
            $table->dateTime('expected')->nullable();
            $table->dateTime('completed')->nullable();
            $table->integer('priority');
            $table->integer('severity');
            $table->string('status')->nullable();
            $table->text('description');
            $table->text('status_description')->nullable();
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
        Schema::dropIfExists('issues');
    }
}
