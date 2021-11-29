<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
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
        'desc',
        'progress',
        'source_code',
        'icon',
        'last_update',
        'hidden',
        'user_id',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'last_update' => 'date',
        'hidden' => 'boolean',
    ];

       /**
     * @return BelongsTo
     * project's user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }

    /**
     * @return BelongsToMany
     * project's technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany( Technology::class );
    }
}
