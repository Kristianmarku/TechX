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
        Schema::create('issue_replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('issue_id');
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->unsignedBigInteger('support_id');
            $table->foreign('support_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('message');
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
        Schema::dropIfExists('issue_replies');
    }
};
