<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Attachment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'attachable_id',
        'attachable_type',
        'type',
    ];

    /**
     * Get the resource of the attachment
     * @return MorphTo
     */
    public function attachable()
    {
        return $this->morphTo();
    }
}
