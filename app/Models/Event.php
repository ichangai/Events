<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'amount',
        'location',
        'start_time',
        'end_time',
        'start_date',
        'end_date',
        'host',
        'category_id',
        'type',
        'image',
        'summary',
        'timeline',
    ];

    public function events()
    {
        return $this->belongsTo(Category::class);
    }
}
