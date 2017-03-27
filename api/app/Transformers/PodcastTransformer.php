<?php

namespace App\Transformers;

use App\Podcast;
use League\Fractal\TransformerAbstract;

class PodcastTransformer extends TransformerAbstract
{
    public function transform(Podcast $model)
    {
        return [
            'id' => $model->id,
            'title' => $model->title,
            'description' => $model->description,
            'files' => $model->files,
            'created_at' => $model->created_at->toDateTimeString(),
            'created_at' => $model->created_at->diffForHumans(),
        ];
    }

}