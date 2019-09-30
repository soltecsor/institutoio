<?php 
use RainLab\Blog\Models\Post as BlogPost;
class Cms5d92701d82fd7992144512_9c9126ba323f46b91ecf836fceb2b5cfClass extends Cms\Classes\PartialCode
{
public function onStart(){    

       $this['filteredPosts'] = BlogPost::whereHas('categories', function($q) {
            $q->whereIn('slug', ['doenca-e-prevencao']);
        })->get(); 

}
}
