<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('frist name & last name');
            $table->integer('roll')->comment('student\'s class roll number');
            $table->string('phone', 15)->nullable();
            $table->string('class', 20);
            $table->string('email', 100)->nullable();
            $table->text('address');
            $table->float('balance', 8, 2)->default(100.00)->comment('amount in bdt.');
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
        Schema::dropIfExists('students');
    }
}
