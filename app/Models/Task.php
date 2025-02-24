<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // use LogsActivity;


    protected $fillable = [
        'title',
        'description',
        'due_date',
        'status',
        'user_id',
        'completed_at'
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'completed_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}