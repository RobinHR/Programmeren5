<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Footballplayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'first_name',
        'last_name',
        'position',
        'back_number',
        'extra_information',
        'country',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}


