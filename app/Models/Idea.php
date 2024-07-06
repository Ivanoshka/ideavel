<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Idea extends Model
{

    use HasFactory;


    //una idea le pertenece un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //un usuario puede darle like a muchas ideas
    public function usersLikedThis(): BelongsToMany 
    {
        return $this->belongsToMany(User::class);
    }
    
}
