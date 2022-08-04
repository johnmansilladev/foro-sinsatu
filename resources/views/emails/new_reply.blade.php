@component('mail::message')

**{{ $reply->author()->username() }}** has replied to this thread.

@component('mail::panel')
{{ $reply->excerpt(200) }}
@endcomponent

@if ($thread->isAuthoredBy($receiver))
Por favor, asegúrese de marcar la respuesta correcta como la solución cuando su pregunta sea respondida.
@endif

@component('mail::button', ['url' => route('thread', $reply->replyAble()->slug())])
View Thread
@endcomponent

@component('mail::subcopy')
You are receiving this because you are subscribed to this thread.
Estás recibiendo esto porque te has suscrito a este hilo
[Desuscríbete]({{ route('subscriptions.unsubscribe', $subscription->uuid()->toString()) }}) de este hilo
@endcomponent

@endcomponent
