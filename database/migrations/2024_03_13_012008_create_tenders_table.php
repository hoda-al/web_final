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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id('id_post')->primary;
            $table->integer('id_employe');
            $table->string('name_goverment');
            $table->string('catogary_tender');
            $table->string('address');
            $table->integer('phone_number');
            $table->char('email');
            $table->date('start_date');
            $table->date('expiry_date');
            $table->char('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
    }
};
