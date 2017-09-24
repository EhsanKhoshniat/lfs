<?php 

namespace App\Repositories;

Use App\Post;

class Posts 
{
	public function all()
	{
		return Post::all();
	}
}

