<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date_requested');
            $table->date('date_updated')->nullable();
            $table->string('requirement_text');
            $table->string('source_pg');
            $table->string('source_par');
            $table->string('client_pg');
            $table->string('client_par');
            $table->string('deliv_name');
            $table->string('deliv_id');
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
        Schema::dropIfExists('references');
    }
}
