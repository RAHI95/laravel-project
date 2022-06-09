<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('provost_name');
            $table->unsignedBigInteger('provost_department')->unsigned()->index();
            $table->foreign('provost_department')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('created_by_id')->unsigned()->index();
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');
            $table->softdeletes();
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
        Schema::dropIfExists('halls');
    }
}
