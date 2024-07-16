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
        Schema::create('penampung_quisioner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vendor')->nullable();
            $table->unsignedBigInteger('id_categorys')->nullable();
            $table->foreign('id_vendor')->references('id')->on('vendors')->onDelete('cascade');
            $table->foreign('id_categorys')->references('id')->on('categorys')->onDelete('cascade');
            // $table->foreignId('id_vendor')->constrained('vendors')->cascadeOnDelete();
            // $table->foreignId('id_categorys')->constrained('categorys')->cascadeOnDelete();
            $table->double('nilai');
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
        Schema::dropIfExists('penampung_quisioner');
    }
};
