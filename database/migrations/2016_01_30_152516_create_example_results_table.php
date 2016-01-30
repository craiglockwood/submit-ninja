<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_results', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('reasons_for_writing');
            $table->longtext('proposed_title');
            $table->longtext('book_summary');
            $table->longtext('detailed_outline');
            $table->string('sample-file')->nullable();
            $table->longtext('reader_understand');
            $table->string('book_format');
            $table->longtext('additional_details');
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
        Schema::drop('example_results');
    }
}
