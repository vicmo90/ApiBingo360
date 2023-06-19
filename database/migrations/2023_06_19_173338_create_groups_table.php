<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Goal')->nullabe(true)->change();
            $table->string('Description1')->nullabe(true)->change();
            $table->string('Description2')->nullabe(true)->change();
            $table->string('Description3')->nullabe(true)->change();
            $table->binary('Photo1')->nullabe(true)->change();
            $table->binary('Photo2')->nullabe(true)->change();
            $table->binary('Photo3')->nullabe(true)->change();
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
        Schema::dropIfExists('groups');
    }
}
