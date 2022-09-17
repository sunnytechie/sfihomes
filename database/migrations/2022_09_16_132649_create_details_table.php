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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_id');
            $table->string('next_kin_photo')->nullable();
            $table->string('next_kin_fullname');
            $table->string('next_kin_relationship');
            $table->string('next_kin_address');
            $table->string('next_kin_postcode');
            $table->string('next_kin_state');
            $table->string('next_kin_city');
            $table->string('next_kin_phone');
            $table->string('next_kin_email');

            $table->string('referee_photo')->nullable();
            $table->string('referee_fullname');
            $table->string('referee_city');
            $table->string('referee_state');
            $table->string('referee_lga');
            $table->string('referee_phone');
            $table->string('referee_relationship');
            $table->string('referee_address');
            $table->string('referee_occupation');
            $table->string('referee_age')->nullable();
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
        Schema::dropIfExists('details');
    }
};
