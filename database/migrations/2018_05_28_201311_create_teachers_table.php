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
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staffidno')->nullable()->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable()->default('$2y$10$zBO27pm5vdFjEKxFbRfp8eUguAoVuaB3EbpGjVtol23yazaLFIdaW');
            $table->string('phone')->nullable(); 
            $table->string('gender')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('qualification')->nullable();
            $table->string('country')->nullable();
            $table->string('stateoforigin')->nullable();
            $table->string('province')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('dateemployed')->nullable();
            $table->string('religion')->nullable();
            $table->longText('address')->nullable();
            $table->string('passport')->nullable();
            $table->string('duty')->nullable();
            $table->ipAddress('ipaddress')->nullable()->default('127.0.0.1');
            $table->boolean('status')->nullable()->default(1);
            $table->integer('role')->nullable()->default(0);
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
        Schema::dropIfExists('teachers');
    }
}
