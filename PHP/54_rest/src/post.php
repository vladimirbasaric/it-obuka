<?php

require 'db.php';

class UserPost
{
    public $id;
    public $timestamp;
    public $title;
    public $content;

    public function __construct($id, $timestamp, $title, $content)
    {
        $this->id = $id; 
        $this->timestamp = $timestamp;
        $this->title = $title;
        $this->content = $content;
    }

    public static function GetAll()
    {
        $db = Database::getInstance()->getConnection();
        $query = "SELECT * FROM posts";
        $result = mysqli_query($db, $query);
        if ($result) {
            $posts = [];
            while ($row = mysqli_fetch_assoc($result))
            {
                $posts []= $row;
            }
            return $posts;
        } else {
            return [];
        }
    }

    public static function CreatePost($params)
    {
        $db = Database::getInstance()->getConnection();
        $theTitle = $params['title'];
        $theContent = $params['content'];
        $query = "INSERT INTO posts (title, content) VALUES ('$theTitle', '$theContent');";
        $result = mysqli_query($db, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public static function GetPost($id)
    {
        $db = Database::getInstance()->getConnection();

        // DOMACI: Sanitizujte upit! Korisnik za $id moze da nam posalje sve i svasta
        // pa je ovaj deo koda osetljiv na SQL Injection napade.

        $query = "SELECT * FROM posts WHERE id=$id";
        $result = mysqli_query($db, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            return [];
        }
    }
}