<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('expected_complete');
            $table->date('date_completed');
            $table->date('date_made');
            $table->date('date_created');
            $table->date('date_needed');
            $table->date('date_updated');
            $table->text('description');
            $table->text('status_description');
            $table->string('priority');
            $table->string('impact');
            $table->string('status');
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
        Schema::dropIfExists('descisions');
    }
}
