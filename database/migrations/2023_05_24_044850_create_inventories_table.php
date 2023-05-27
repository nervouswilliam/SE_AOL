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
        Schema::create('inventories', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("item_id");
            $table->date("insertDate");
            $table->integer("insertQuantity");
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
        Schema::dropIfExists('inventories');
    }
};
