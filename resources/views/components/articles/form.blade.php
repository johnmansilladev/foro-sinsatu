@props([
    'article' => null,
    'route',
    'method' => 'POST',
    'tags',
    'selectedTags' => []
])

<x-buk-form
    action="{{ route(...$route) }}"
    :method="$method"
>
    <div class="bg-gray-100 py-6 px-4 space-y-6 sm:p-6">
        <div>
            <h2 id="create_thread_heading" class="text-lg leading-6 font-medium text-gray-900">
                @if ($article)
                    Actualizar artículo
                @else
                    Escribir un nuevo artículo
                @endif
            </h2>

           <!--  <x-forms.info class="px-0">
                Submit your article to the Laravel.io portal. Every article that gets approved will be shared with our 45.000 users and wil be tweeted out on our <a href="https://twitter.com/laravelio" class="text-lio-700 underline">Twitter account</a> which has over 45,000 followers. Feel free to submit as many articles as you like. You can even cross-reference an article on your blog with the original url.
            </x-forms.info> -->

            <x-forms.info class="px-0">
                Tras el envío para su aprobación, los artículos se revisan antes de ser publicados. No se notificarán los artículos rechazados. 
                En cambio, le animamos a que publique también los artículos en su propio canal. 
                <strong>Una vez publicado, ya no puedes editar tu artículo, así que revísalo bien antes de enviarlo para su aprobación.</strong>
            </x-forms.info>

            <x-rules-banner />
        </div>

        <div class="flex flex-col space-y-6">
            <div class="grow space-y-6">
                <div class="space-y-1">
                    <x-forms.label for="title">Title</x-forms.label>

                    <x-forms.inputs.input name="title" :value="old('title', $article?->title())" required maxlength="100" />

                    <span class="mt-2 text-sm text-gray-500">
                        100 caracteres como máximo
                    </span>
                </div>
            </div>

            <div class="grow space-y-6">
                <div class="space-y-1">
                    <x-forms.label for="body">Body</x-forms.label>

                    <livewire:editor :body="$article?->body()"/>

                    @error('body')
                </div>
            </div>

            <div class="grow space-y-6">
                <div class="grow space-y-6">
                    <div class="space-y-1">
                        <x-forms.label for="original_url">Link del post original</x-forms.label>

                        <x-forms.inputs.input name="original_url" :value="old('original_url', $article?->originalUrl())" />

                        <span class="mt-2 text-sm text-gray-500">
                            Si ya ha publicado este artículo en su propio sitio, introduzca la URL aquí y el contenido se le atribuirá a usted.
                        </span>
                    </div>
                </div>

                <div class="grow space-y-6">
                    <div class="space-y-1">
                        <x-forms.label for="tags">Tags</x-forms.label>

                        <select name="tags[]" id="create-article" multiple x-data="{}" x-init="$nextTick(function () { choices($el) })">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedTags) ? 'selected' : '' }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        @error('tags')
                    </div>
                </div>
            </div>

            <div class="md:flex md:items-center md:justify-between">
                <x-forms.info class="px-0">
                    <span class="font-bold">Nota: </span>
                    Ya no se puede editar un artículo después de haberlo publicado.
                </x-forms.info>

                <div class="flex justify-end items-center">
                    <a href="{{ isset($article) ? route('articles.show', $article->slug()) : route('user.articles') }}" class="text-lio-700 mr-4">
                        Cancelar
                    </a>

                    @if (isset($article) && $article->isSubmitted())
                        <button
                            type="submit"
                            name="submitted"
                            value="1"
                            class="button button-primary"
                        >
                            Guardar cambios
                        </button>
                    @else
                        <span class="relative z-0 inline-flex shadow-sm" x-data="{ showDropdown: false }" @click.outside="showDropdown = false">
                            <button
                                type="submit"
                                name="submitted"
                                value="0"
                                class="button button-primary button-dropdown-left relative inline-flex items-center focus:outline-none"
                            >
                                Guardar borrador
                            </button>
                            <span class="-ml-px relative block">
                                <button
                                    @click="showDropdown = !showDropdown"
                                    type="button"
                                    class="button button-primary h-full button-dropdown-right relative inline-flex items-center focus:outline-none"
                                >
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <div class="origin-top-right absolute right-0 mt-2 w-60 rounded-md shadow-lg" x-show="showDropdown" x-cloak>
                                    <div class="rounded-md bg-white ring-1 ring-black ring-opacity-5">
                                        <div class="py-1">
                                            <button
                                                type="submit"
                                                name="submitted"
                                                value="1"
                                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 w-full text-left"
                                            >
                                                Guardar y enviar para su aprobación
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </span>
                    @endif
                </div>
            </div>

            <!-- @unless (Auth::user()->twitter())
                <span class="text-gray-600 text-sm mt-4 block">
                    Articles will be shared on Twitter.
                    <a href="{{ route('settings.profile') }}" class="text-green-darker">Add your Twitter handle</a>
                    and we'll include that too.
                </span>
            @endunless -->
        </div>
    </div>
</x-buk-form>
