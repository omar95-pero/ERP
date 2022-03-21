<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_code')->nullable();
            $table->unsignedBigInteger('tenant_id');
            $table->foreign('tenant_id')->references('id')->on('tenants')->cascadeOnDelete();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->date('date_of_birth')->nullable();
            $table->string('personal_email')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->boolean('email_status')->default(0);
            $table->string('emergency_phone')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('job_title_id');
            $table->foreign('job_title_id')->references('id')->on('job_titles')->onDelete('cascade');
            $table->date('date_of_join')->nullable();
            $table->date('resignation_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_location')->nullable();
            $table->integer('salary')->nullable();
            $table->enum('job_type',['full','part'])->nullable();
            $table->string('document')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
