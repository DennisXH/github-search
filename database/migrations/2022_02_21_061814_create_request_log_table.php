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
        Schema::create('request_log', function (Blueprint $table) {
            $table->id();
            $table->string('request_id');
            $table->string('request_type')->default('search');
            $table->string('uri');
            $table->string('method');
            $table->string('ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->text('response');
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
        Schema::dropIfExists('request_log');
    }
};
