@props([
    'thread' => null,
    'route',
    'method' => 'POST',
    'tags',
    'selectedTags' => []
])

<x-buk-form
    action="{{ route(...$route) }}"
    :method="$method"
    x-data="{}"
    @submitted="$event.currentTarget.submit()"
>
    <div class="bg-gray-100 py-6 px-4 space-y-6 sm:p-6">
        <div>
            <h2 id="create_thread_heading" class="text-lg leading-6 font-medium text-gray-900">
                @if ($thread)
                    Actualizar hilo
                @else
                    Crea un nuevo hilo
                @endif
            </h2>
            <x-rules-banner />
        </div>

        <div class="flex flex-col space-y-6">
            <div class="grow space-y-6">
                <div class="space-y-1">
                    <x-forms.label for="Título"/>

                    <x-forms.inputs.input name="subject" :value="$thread?->subject()" required maxlength="60" />

                    <span class="mt-2 text-sm text-gray-500">
                        Caracteres máximos: 60
                    </span>
                </div>
            </div>

            <div class="grow space-y-6">
                <div class="space-y-1">
                    <x-forms.label for="tags">
                        Tags
                    </x-forms.label>

                    <select name="tags[]" id="create-thread" multiple x-data="{}" x-init="$nextTick(function () { choices($el) })">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"{{ in_array($tag->id, $selectedTags) ? ' selected' : '' }}>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grow space-y-6">
                <div class="space-y-1">
                    <x-forms.label for="body">Haz una pregunta</x-forms.label>

                    <livewire:editor
                        :body="$thread?->body()"
                        placeholder="Redacte su tema..."
                        hasMentions
                        hasButton
                        :buttonLabel="$thread ? 'Actualizar hilo' : 'Crear hilo'"
                        buttonIcon="heroicon-o-arrow-right"
                    />
                </div>
            </div>
        </div>
    </div>
</x-buk-form>
