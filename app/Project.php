<?php

namespace App;

use App\Multimedia;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get all of the multimedia for the porject.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function multimedia()
    {
        return $this->hasMany(Multimedia::class);
    }
}
