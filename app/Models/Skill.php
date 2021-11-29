<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang',
        'type',
        'title',
        'sort',
        'user_id',
    ];

       /**
     * @return BelongsTo
     * skill's user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }
}
