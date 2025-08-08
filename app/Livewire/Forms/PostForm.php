<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Post;
use Livewire\WithFileUploads;

class PostForm extends Form
{
    use WithFileUploads;
    public ?Post $post;

    #[Validate('required|min:5|max:255')]
    public $title = '';

    // #[Validate('required|exists:categories,id')]
    // public $category_id = '';

    #[Validate('required')]
    public $body = '';

    #[Validate('required|array')]
    public $tags = '';

    #[Validate('required|image|max:2048')]
    public $image = '';

    public function setPost(Post $post)
    {
        $this->post = $post;

        $this->title = $post->title;

        // $this->category_id = $post->category_id;

        $this->body = $post->body;

        $this->tags = $post->tags;

        $this->image = $post->image;
    }

    public function store()
    {

        $this->validate();

        Post::create($this->only(['title',
        // 'category_id',
        'body', 'tags', 'image']));
    }

    public function update()
    {
        $this->validate();

        $this->post->update(
            $this->all()
        );
    }
}
