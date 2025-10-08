<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Lesson;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
