@component('mail::message')

¡Una gran noticia! Su artículo: **{{ $article->title() }}** ha sido aprobado y ya está disponible en foro.sinsatu.com.

@component('mail::button', ['url' => route('articles.show', $article->slug())])
Ver artículo
@endcomponent

@endcomponent
