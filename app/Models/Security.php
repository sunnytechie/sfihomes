<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'security_details',
        'security_file',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
