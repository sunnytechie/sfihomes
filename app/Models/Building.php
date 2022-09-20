<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'thumbnail',
    ];

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
