<?php

class Blog
{
    public $id;
    public $title;
}

class BlogPost
{
    public $id;
    public $blog_id;
    public $title;
    public $post_text;
    public $date;
}

?>