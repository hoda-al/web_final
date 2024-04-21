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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->primary;
            $table->string('name');
            $table->string('address');
            $table->char('phone_number');
            $table->integer('license_number');
            $table->date('license_expiration');
            $table->char('authorized_name');
            $table->char('upload_file');
            $table->char('email')->unique;
            $table->char('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
