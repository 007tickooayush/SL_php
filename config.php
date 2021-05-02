<!-- This method can be useful when you have a lot of images on your server and need to transfer the website to another host. 
Instead of changing the path for each image, you can do the following:
Create a config.php file, that holds the path to your images: -->
<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>