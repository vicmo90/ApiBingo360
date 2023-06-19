<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaderTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leader_types', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Description1')->nullabe(true)->change();
            $table->string('Description2')->nullabe(true)->change();
            $table->string('Description3')->nullabe(true)->change();
            $table->boolean('IsActive')->default(false);
            $table->boolean('IsDelete')->default(true);
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
        Schema::dropIfExists('leader_types');
    }
}
