<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'punched_in_at',
        'punched_out_at',
        'requested_in_at',
        'requested_out_at',
        'note',
        'status',
    ];

    protected $casts = [
        'punched_in_at' => 'datetime',
        'punched_out_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rests()
    {
        return $this->hasMany(Rest::class);
    }
}
