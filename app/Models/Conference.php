<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Conference extends Model
{
    protected $fillable = [
        'name',
        'description',
        'date',
        'location',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}