<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Role extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
    ];


     // Un role appartient à un ou plusieurs users
    public function roles() : belongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
