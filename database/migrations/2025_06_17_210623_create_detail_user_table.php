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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_detail_user_to_users');
            $table->fereignId('type_user_id')->nullable()->index('fk_detail_user_to_type_users');
            $table->string('contact')->nullable();
            $table->longText('address')->nullable();
            $table->longText('photo')->nullable();
            $table->enum('gender',[1,2])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_user');
    }
};
