@component('mail::message')

**{{ $mentionAble->author()->username() }}** te ha mencionado en este hilo.

@component('mail::panel')
{{ $mentionAble->excerpt(200) }}
@endcomponent

@component('mail::button', ['url' => route('thread', $mentionAble->mentionedIn()->slug())])
Ver hilo
@endcomponent

@component('mail::subcopy')
Si no quieres que este usuario pueda mencionarte más, puedes
[bloquearlos a través de su perfil]({{ route('profile', $mentionAble->author()->username()) }}).
@endcomponent

@endcomponent
