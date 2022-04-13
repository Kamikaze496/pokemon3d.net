<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use LivewireUI\Modal\ModalComponent;

class CommentModal extends ModalComponent
{
    public int|Post $post;
    public $body;
    public $parentComment = null;

    public function mount(int|Post $post, $parentComment)
    {
        $this->post = Post::find($post);
        $this->body = '';
        $this->parentComment = $parentComment;
    }

    public function save()
    {
        $this->validate([
            'body' => ['required', 'string', 'min:2', 'max:255'],
        ]);

        $commentData = [
            'title' => null,
            'body' => $this->body,
        ];

        if ($this->parentComment) {
            $this->parentComment = \AliBayat\LaravelCommentable\Comment::find($this->parentComment);
        }

        $this->post->comment($commentData, auth()->user(), $this->parentComment);

        $this->emit('commentAdded');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.blog.comment-modal');
    }
}