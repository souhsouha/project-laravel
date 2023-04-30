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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('titre_certification');
            $table->string('image_certification')->nullable();
            $table->text('domaine_certification');
            $table->double('prix_certification');
            $table->Date('datePrévue_certification');
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->foreign('user_id')->references('id')->on('users');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certifications');
    }
};