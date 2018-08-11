<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
            $table->timestamps();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('gender')->nullable();
            $table->timestamp('birthday')->useCurrent()->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->unsignedSmallInteger('role')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
        Schema::dropIfExists('teachers');
    }
}
