<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            // $table->engine = "InnoDB";
            $table->bigIncrements('tare_sequ');
            $table->unsignedBigInteger('tare_user');
            $table->string('tare_titu');
            $table->longText('tare_desc');
            $table->integer('tare_stat');
            $table->integer('tare_orde')->nullable()->default(0);
            $table->dateTime('tare_venc');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('tare_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
