<?php

namespace App\Mail;

use App\Models\Article;
use Illuminate\Mail\Mailable;

final class ArticleApprovedEmail extends Mailable
{
    public function __construct(public Article $article)
    {
    }

    public function build()
    {
        return $this->subject('Tu artículo ha sido aprobado')
            ->markdown('emails.article_approved');
    }
}
