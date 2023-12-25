<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name'];

    public function doctor()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
