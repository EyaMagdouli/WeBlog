<?php 
//Returns all the posts
function Posts() {
	global $connect;
	$query = "SELECT * FROM posts";
	$result = mysqli_query($connect, $query);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}
//return informations about the user
function info()
{
	global $connect;
	$query="SELECT * FROM users";
	$result=mysqli_query($connect,$query);
	$info=mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $info;	
}
//return information about the blog
function blog()
{
    global $connect;
    $query="SELECT * FROM blog";
    $result=mysqli_query($connect,$query);
	$blog=mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $blog;
}
?>