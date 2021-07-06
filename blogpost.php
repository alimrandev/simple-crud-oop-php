<?php

namespace BlogPost;
include "includes/autoloader.php";

use \BlogPost\Classes\Database\DB;




class BlogPost extends DB{
    public function getPosts(){
        $query = 'SELECT * FROM posts';
        if($this->connect()){
            $stmt = $this->connect()->prepare($query);
            $stmt->execute();

                while($result = $stmt->fetchAll()){
                return $result;
            }
        }
        
    }

    public function addPost($title, $content)
    {
        $query = "INSERT INTO posts(title, content) VALUES('{$title}', '{$content}')";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
    }

    //delete post

    public function deletePost($id){
        $query = "DELETE FROM posts WHERE id = '{$id}' ";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
    }
}
