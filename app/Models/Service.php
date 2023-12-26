<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
