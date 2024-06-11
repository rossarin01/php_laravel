<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('sc_id');
            $table->string('sc_name');
            $table->string('sc_address');
            $table->string('sc_tambon');
            $table->string('sc_amp');
            $table->string('sc_prove');
            $table->string('sc_zipcode');
            $table->string('sc_tel');
            $table->string('sc_email');
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
        Schema::dropIfExists('schools');
    }
}
