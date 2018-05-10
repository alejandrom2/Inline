<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('priority');
            $table->string('severity');
            $table->string('status');
            $table->text('description');
            $table->date('date_created');
            $table->date('date_assigned');
            $table->date('date_expected');
            $table->date('date_complete');
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
        Schema::dropIfExists('action_items');
    }
}
