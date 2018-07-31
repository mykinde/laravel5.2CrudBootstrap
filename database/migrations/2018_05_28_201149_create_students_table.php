<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('studentid')->nullable()->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('gender')->nullable();
            $table->string('acaclass_id')->nullable();
            $table->string('country')->nullable();
            $table->string('stateoforigin')->nullable();
            $table->string('province')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('religion')->nullable();
            $table->string('passport')->nullable();
            $table->boolean('status')->default(0);
            $table->string('paymentstatus')->nullable()->default('No Payment');
            $table->string('paymentrate')->nullable()->default(0);
            $table->string('ptitle')->nullable();
            $table->string('plastname');
            $table->string('pfirstname');
            $table->string('pmiddlename')->nullable();
            $table->string('email')->unique();  
            $table->string('username')->nullable();
            $table->string('password')->nullable()->default('$2y$10$zBO27pm5vdFjEKxFbRfp8eUguAoVuaB3EbpGjVtol23yazaLFIdaW');
            $table->string('phone')->nullable();
            $table->string('altphone')->nullable();
            $table->string('pgender')->nullable();
            $table->string('relationship')->nullable();
            $table->string('occupation')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('partnername')->nullable();
            $table->longText('address')->nullable();
            $table->string('ppassport')->nullable();
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
