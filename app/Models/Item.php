<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'house_item_name',
        'house_item_description',
        'house_item_file',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
