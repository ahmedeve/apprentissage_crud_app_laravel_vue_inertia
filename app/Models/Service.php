<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'doctor_id'];

    use HasFactory;

    public function appointement()
    {
        return $this->belongsTo(Appointement::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
