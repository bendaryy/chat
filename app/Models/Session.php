<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function chats()
    {
        return $this->hasManyThrough(Chat::class, Messages::class);
    }

    public function messages()
    {
        return $this->hasMany(Messages::class);
    }
}
