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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_photo');
            $table->string('building_id');
            $table->string('department_id');
            $table->string('tenant_title');
            $table->string('tenant_surname');
            $table->string('tenant_middle_name')->nullable();
            $table->string('tenant_last');
            $table->string('tenant_sex');
            $table->string('tenant_birth_date');
            $table->string('tenant_relationship_status');
            $table->string('tenant_state_origin');
            $table->string('tenant_city');
            $table->string('tenant_lga');
            $table->string('tenant_postcode')->nullable();
            $table->text('tenant_resident_address');
            $table->string('tenant_number_of_kids')->nullable();
            $table->string('tenant_disability')->default('None');
            $table->string('tenant_home_number')->nullable();
            $table->string('tenant_office_number')->nullable();
            $table->string('tenant_email')->nullable();
            $table->string('tenant_mobile_phone');

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
        Schema::dropIfExists('tenants');
    }
};
