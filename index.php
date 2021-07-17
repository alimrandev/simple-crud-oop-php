<?php
    use BlogPost\BlogPost;

include "blogpost.php";
    $db = new BlogPost();

    $db-> updatePost('Updated Title', 'Update Content', 2);

   

?>

    <pre>
   <?php print_r($db->getPosts()); ?>
    </pre>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple OOP CRUD Application </title>
</head>
<body>
    
</body>
</html>