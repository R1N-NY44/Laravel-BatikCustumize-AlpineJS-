<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomBatik extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function designs()
    {
        return $this->belongsTo(Design::class, 'design');
    }

    public function motives()
    {
        return $this->belongsTo(Motive::class, 'motive');
    }

    public function materials()
    {
        return $this->belongsTo(Material::class, 'material');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
