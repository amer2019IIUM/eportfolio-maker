<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\HasAttachment;
class Profile extends Model
{
    use HasFactory,HasAttachment;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'lang',
        'user_id',
        'country',
        'city',
        'nationality',
        'summary',
        'headline',
    ];

       /**
     * @return BelongsTo
     * Profile's user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }
}
