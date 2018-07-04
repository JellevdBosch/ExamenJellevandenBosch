<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_status', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('banned')->default(0);
            $table->integer('suspended')->default(0);
            $table->text('violation')->nullable();
            $table->dateTime('suspension_start')->nullable();
            $table->dateTime('suspension_end')->nullable();
        });
        Schema::table('account_status', function($table) {
            $table->foreign('user_id')->references('id')->on('gebruikers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_status');
    }
}
