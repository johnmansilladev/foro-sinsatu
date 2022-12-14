<?php

namespace App\Mail;

use App\Models\MentionAble;
use App\Models\User;
use Illuminate\Mail\Mailable;

final class MentionEmail extends Mailable
{
    public function __construct(
        public MentionAble $mentionAble,
        public User $receiver
    ) {
    }

    public function build()
    {
        return $this->subject("Mencionado: {$this->mentionAble->mentionedIn()->subject()}")
            ->markdown('emails.mention');
    }
}
