<?php 
use RainLab\Blog\Models\Post as BlogPost;class Cms5d8d1ca09cf37115455618_ba98ec5c5c1a60d344c6e8800a45eab1Class extends Cms\Classes\PartialCode
{

public function onStart(){    

       $this['filteredPosts'] = BlogPost::whereHas('categories', function($q) {
            $q->whereIn('slug', ['campanha']);
        })->get(); 

}
}
