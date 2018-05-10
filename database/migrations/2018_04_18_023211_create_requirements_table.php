<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('date_requested');
            $table->string('text');
            $table->string('source_doc');
            $table->string('source_doc_page');
            $table->string('source_doc_paragraph');
            $table->string('client_ref_page');
            $table->string('client_ref_paragraph');
            $table->string('deliverable_name');
            $table->string('deliverable_id');
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
        Schema::dropIfExists('requirements');
    }
}
