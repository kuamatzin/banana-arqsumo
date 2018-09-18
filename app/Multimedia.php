<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;


class Multimedia extends Model
{
    //Table
    protected $table = 'multimedia';

    /**
     * Get the project that owns the multimedia.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
