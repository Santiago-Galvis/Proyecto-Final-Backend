<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->foreignId('user_name');
            // $table->foreignId('user_password');
            // $table->foreignId('user_email');
            // $table->foreignId('user_image');
            // $table->foreignId('user_type');
            $table->string('document');
            $table->integer('phone');
            $table->tinyInteger('rating');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            // $table->foreign('user_name')->references('name')->on('users')
            //     ->onUpdate('cascade')
            //     ->onDelete('restrict');

            // $table->foreign('user_password')->references('password')->on('users')
            //     ->onUpdate('cascade')
            //     ->onDelete('restrict');

            // $table->foreign('user_email')->references('email')->on('users')
            //     ->onUpdate('cascade')
            //     ->onDelete('restrict');

            // $table->foreign('user_image')->references('image')->on('users')
            //     ->onUpdate('cascade')
            //     ->onDelete('restrict');

            // $table->foreign('user_type')->references('type')->on('users')
            //     ->onUpdate('cascade')
            //     ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technicians');
    }
}
