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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_id');
            $table->string('cus_name');
            $table->string('cus_mobile');
            $table->string('cus_email');
            $table->date('cus_dob');
            $table->string('cus_nationality');
            $table->unsignedBigInteger('em_id');
            $table->string('cus_invoice_number');
            $table->string('cus_receipt_image');
            $table->string('cus_product_image');
            $table->date('cus_enroll_date');
            $table->string('cus_extra-2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
