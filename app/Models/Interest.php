<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang',
        'title',
        'user_id',
        'sort',
    ];

       /**
     * @return BelongsTo
     * Get the interest's user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }
}
