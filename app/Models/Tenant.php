<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_photo',
        'building_id',
        'department_id',
        'tenant_title',
        'tenant_surname',
        'tenant_middle_name',
        'tenant_last',
        'tenant_sex',
        'tenant_birth_date',
        'tenant_relationship_status',
        'tenant_state_origin',
        'tenant_city',
        'tenant_lga',
        'tenant_number_of_kids',
        'tenant_disability',
        'tenant_home_number',
        'tenant_office_number',
        'tenant_email',
        'tenant_resident_address',
        'tenant_postcode',
        'tenant_mobile_phone',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function securities()
    {
        return $this->hasMany(Security::class);
    }

    public function detail()
    {
        return $this->hasOne(Detail::class);
    }
}
