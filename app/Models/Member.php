<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'household_member_photo',
        'household_member_fullname',
        'household_member_relationship',
        'household_member_sex',
        'household_member_birth',
        'household_member_phone',
        'household_member_state',
        'household_member_lga',
        'household_member_disability',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
