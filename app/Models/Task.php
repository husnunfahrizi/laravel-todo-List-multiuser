<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_completed',
        'deadline',
        'status',
        'user_id', // Tambahkan ini
    ];

    protected $casts = [
        'deadline' => 'date',
        'is_completed' => 'boolean',
        'status' => 'string',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
