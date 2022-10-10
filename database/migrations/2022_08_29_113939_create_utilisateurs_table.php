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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('identifiant');
            $table->string('motdepasse');
            $table->string('confirmationmotdepasse');
            $table->string('nomcomplet');
            $table->string('role');
            $table->string('restrictionacces');
            $table->string('email');
            $table->string('telephone');
            $table->string('equipe');
            $table->string('modedetravail');
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
        Schema::dropIfExists('utilisateurs');
    }
};
