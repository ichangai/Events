<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;
    protected $fillable = [
        "event_id",
        "name",
        "email",
        "image",
    ];

    public function upvotes(){
        return $this->hasMany(Vote::class)->sum('upvote');
    }

    public function downvote(){
        return $this->hasMany(Vote::class)->sum('downvote');
    }
}
