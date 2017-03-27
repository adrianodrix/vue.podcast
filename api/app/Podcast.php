<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'file_mp3', 'file_ogg'
    ];

    public function getFilesAttribute()
    {
        return  collect([
            'mp3' => $this->file_mp3,
            'ogg' => $this->file_ogg
        ]);
    }
}