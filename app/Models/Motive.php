<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motive extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customBatiks()
    {
        return $this->hasMany(CustomBatik::class, 'motive');
    }
}
