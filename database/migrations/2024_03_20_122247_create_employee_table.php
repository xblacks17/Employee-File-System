<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('employee', function (Blueprint $table) {
        $table->id(); // Auto-increment primary key
        $table->string('full_name');
        $table->string('personal_email_address');
        $table->string('phone_number');
        $table->string('home_address');
        $table->date('dob');
        $table->string('sex');
        $table->string('national_id');
        $table->json('next_of_kin');
        $table->json('dependents');
        $table->string('company_id');
        $table->string('company_email_address');
        $table->string('position');
        $table->string('department');
        $table->date('start_date');
        $table->string('status');
        $table->string('attachment')->nullable();
        $table->timestamps(); // Created_at and updated_at timestamps
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
