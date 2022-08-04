<?php

namespace App\Mail;

use App\Models\Thread;
use Illuminate\Mail\Mailable;

final class ThreadDeletedEmail extends Mailable
{
    public function __construct(public Thread $thread, public string $reason)
    {
    }

    public function build()
    {
        return $this->subject('Tu artículo en foro.sinsatu.com  ha sido eliminado')
            ->markdown('emails.thread_deleted');
    }
}
