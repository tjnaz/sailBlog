<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function all()
    {
        return File::files(resource_path("posts/"));
    }

    public static function find($slug)
    {

        if(!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return $post = cache() -> remember("posts.{$slug}", now() -> addMinutes(20), fn () =>file_get_contents($path));
    }
}
