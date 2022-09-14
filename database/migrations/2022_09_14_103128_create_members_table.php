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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_id');
            $table->text('household_member_photo');
            $table->string('household_member_fullname');
            $table->string('household_member_relationship');
            $table->string('household_member_sex');
            $table->string('household_member_birth');
            $table->string('household_member_phone');
            $table->string('household_member_state');
            $table->string('household_member_lga');
            $table->string('household_member_disability')->default('None');
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
        Schema::dropIfExists('members');
    }
};
