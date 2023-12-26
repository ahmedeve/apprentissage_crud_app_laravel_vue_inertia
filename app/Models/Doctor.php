<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'specialization'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function patients()
    {
        return $this->BelongsToMany(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
