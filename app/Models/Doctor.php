<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'specialization'];

    public function patient()
    {
        $this->BelongsToMany(Patient::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
