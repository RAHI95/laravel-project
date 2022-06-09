<?php use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;
  class CreateTeachersTable extends Migration
  { /** * Run the migrations. * * @return void */
     public function up()
     { Schema::create('teachers', function (Blueprint $table)
         {

            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('department_id')->unsigned()->index();
            $table->unsignedBigInteger('created_by_id')->unsigned()->index();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('subject');
            $table->softdeletes();
            $table->timestamps();
             }
            );
             } /** * Reverse the migrations. * *
              @return void */
               public function down()
               {
                    Schema::dropIfExists('teachers');
                 }
                }
