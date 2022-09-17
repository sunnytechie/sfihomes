<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'next_kin_photo',
        'next_kin_fullname',
        'next_kin_relationship',
        'next_kin_address',
        'next_kin_postcode',
        'next_kin_state',
        'next_kin_city',
        'next_kin_phone',
        'next_kin_email',
        'referee_photo',
        'referee_fullname',
        'referee_city',
        'referee_state',
        'referee_lga',
        'referee_phone',
        'referee_relationship',
        'referee_address',
        'referee_occupation',
        'referee_age',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
