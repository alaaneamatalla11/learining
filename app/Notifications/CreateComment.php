<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class CreateComment extends Notification
{
    use Queueable;
    private $comment_id;
    // private $user_create;

    public function __construct($comment_id)
    {
        $this->comment_id = $comment_id;
        // $this->user_create = $user_create;
    }


    public function via($notifiable)
    {
        return ['database'];
    }




    public function toArray($notifiable)
    {
        return [
            'comment_id' => $this->comment_id
            // 'user_create' => $this->user_create

        ];
    }
}
