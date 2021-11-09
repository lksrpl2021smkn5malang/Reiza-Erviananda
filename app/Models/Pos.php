<?php 

namespace App\Models;


class Pos 
{
	private static $blog_post = [

	[
		"title" => "Judul pertama",
        "slug" => "judul-pertama",
		"author" => "Reiza Erviananda",
		'body' => "Hello! Welcome to my blog"
	],
    [
        "title" => "Judul Kedua!",
        "slug" => "judul-kedua",
        "author" => "Reiza Erviananda",
        'body' => "Hello! Welcome to my blog"
    ]
    ];

    public static function all()
    {
    	return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
    return $post->firstWhere('slug', $slug);
    }

}