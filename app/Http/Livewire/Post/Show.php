<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

use App\Models\Posts;

class Show extends Component
{
    public function render()
    {
        $posts = Posts::get();
        return view('livewire.post.show', compact('posts'));
    }

    public function positiveRecomendation($id, $count)
    {
       
        $post = Posts::find($id);
        $post->positive_rec = ($count +1);
        $post->category = 'series';
        $post->save();

    }

    public function negativeRecomendation($id, $count)
    {
        
        $post = Posts::find($id);
        $post->negative_rec = ($count + 1);
        $post->save();

    }
}
