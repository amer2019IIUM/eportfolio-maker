<?php


namespace App\Traits;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

Trait HasAttachment
{
    /**
     * Get all the resource's attachment.
     * @return MorphMany
     */
    public function attachments(): MorphMany
    {
    return $this->morphMany(Attachment::class, 'attachable');
    }

}
