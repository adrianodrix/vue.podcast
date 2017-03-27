<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Transformers\PodcastTransformer;

class PodcastController extends Controller
{
    /**
     * @var Podcast
     */
    private $podcast;

    public function __construct(Podcast $podcast)
    {
        $this->podcast = $podcast;
    }

    public function index()
    {
        $podcasts = $this->podcast->paginate(2);
        return fractal($podcasts, new PodcastTransformer)->toArray();
    }

    public function show($id)
    {
        return fractal($this->podcast->findOrFail($id), new PodcastTransformer)->toArray();
    }
}