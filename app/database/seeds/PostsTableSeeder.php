<?php
class PostsTableSeeder extends Seeder {
	public function run()
	{
		$post1 = new Post;
		$post1->user_id = 1;
		$post1->title = "Hello, readers!";
		$post1->body = "Welcome to my blog!";
		$post1->save();

		$post2 = new Post;
		$post2->user_id = 1;
		$post2->title = "Hello again!";
		$post2->body = "Just checking out the system!";
		$post2->save();

		$post3 = new Post;
		$post3->user_id = 1;
		$post3->title = "Hello once more!";
		$post3->body = "Still checking out my laravel seeder";
		$post3->save();

		$post4 = new Post;
		$post4->user_id = 1;
		$post4->title = "Hello once more again!";
		$post4->body = "I need lots of entries in order to test out the system";
		$post4->save();

		$post5 = new Post;
		$post5->user_id = 1;
		$post5->title = "Hello for the last time...I think";
		$post5->body = "This will be the last major entry for a while";
		$post5->save();
	}
}
?>