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
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("item_Id");
            $table->integer("quantity");
            $table->timestamps();

            $table->foreign("user_id")->references('id')->on('users')->onUpdate('Cascade')->onDelete('Cascade');
            $table->foreign("item_id")->references('id')->on('items')->onUpdate('Cascade')->onDelete('Cascade');
            $table->primary(['user_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
