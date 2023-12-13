<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');  //Increment employee ID
            $table->string('emp_name');  //Name of the Employee
            $table->string('contact_no');  //Contact No. of the Employee
            $table->decimal('salary_per_day',10,2)->default(00.0);  //Salary per day of the Employee

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
