<?php 
use RainLab\Blog\Models\Post as BlogPost;class Cms5d92738048a3a343335223_a27b0c547b7c76c6b0f81186dd2edb5bClass extends Cms\Classes\PartialCode
{

public function onStart(){    

       $this['filteredPosts1'] = BlogPost::whereHas('categories', function($q) {
            $q->whereIn('slug', ['campanha-linha-1']);
        })->get(); 

        $this['filteredPosts2'] = BlogPost::whereHas('categories', function($q) {
            $q->whereIn('slug', ['campanha-linha-2']);
        })->get(); 

}
}
