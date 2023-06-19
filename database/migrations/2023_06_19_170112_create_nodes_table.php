<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('ParentId');
            $table->string('ChildId');
            $table->boolean('IsRoot')->default(false);
            $table->string('LeaderType');
            $table->string('GroupId');
            $table->string('Name');
            $table->string('LastName1');
            $table->string('LastName2');
            $table->string('BirthDay');
            $table->enum('Sex',['H','M']);
            $table->string('PhoneNumber')->nullabe(true)->change();
            $table->string('CellPhoneNumber');
            $table->string('Address')->nullabe(true)->change();
            $table->string('Number')->nullabe(true)->change();
            $table->string('Colony')->nullabe(true)->change();
            $table->string('Cp')->nullabe(true)->change();
            $table->string('City')->nullabe(true)->change();
            $table->string('State')->nullabe(true)->change();
            $table->string('FederationId')->nullabe(true)->change();
            $table->string('Curp')->nullabe(true)->change();
            $table->string('RegisterYear')->nullabe(true)->change();
            $table->string('RegisterYear')->nullabe(true)->change();
            $table->string('NumberState')->nullabe(true)->change();
            $table->string('NumberCity')->nullabe(true)->change();
            $table->string('NumberSection')->nullabe(true)->change();
            $table->string('NumberLocal')->nullabe(true)->change();
            $table->string('NumberEmition')->nullabe(true)->change();
            $table->string('Clairvoyance')->nullabe(true)->change();
            $table->boolean('Voted')->default(false);
            $table->boolean('IsActive')->default(true);
            $table->boolean('IsDelete')->default(false);
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
        Schema::dropIfExists('nodes');
    }
}
