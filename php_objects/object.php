<?php
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}
$post1 = new Post();
$post2 = new Post();

$post1->likes = 3;
$post2->likes = 10;

echo "Post 1 tem $post1->likes likes!<br>";
echo "Post 2 tem $post2->likes likes!<br>";