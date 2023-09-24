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
        Schema::create('format_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('format_id')->nullable();
            $table->foreign('format_id')->references('id')->on('formats')->onDelete('cascade');
            $table->text('heading')->nullable();
            $table->longText('content')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('format_contents');
    }
};
