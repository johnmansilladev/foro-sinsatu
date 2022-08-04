@component('mail::message')

El hilo "{{ $thread->subject() }}" ha sido eliminado por un moderador por las siguientes razones:

@component('mail::panel')
{{ $reason }}
@endcomponent

Por favor, asegúrate de seguir <a href="{{ route('rules') }}">nuestras reglas</a>.

Gracias,<br>
{{ config('app.name') }}
@endcomponent
