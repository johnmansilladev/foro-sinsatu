@props([
    'article',
    'isFeatured' => false,
])

<div class="h-full flex flex-1 flex-col grow place-content-between py-2 divide-y">
    <div class="break-words">
        @if ($isFeatured)
            <a href="{{ route('articles.show', $article->slug()) }}">
                <div class="w-full h-72 mb-6 rounded-lg bg-center bg-cover bg-gray-900" style="background-image: url({{ $article->heroImage() }});"></div>
            </a>
        @endif

        @if ($isFeatured)
            <h4 class="text-gray-900 text-base font-bold leading-10 mb-0 dark:text-blue-600">
                <a href="{{ route('articles.show', $article->slug()) }}" class="hover:underline">
                    {{ $article->title() }}
                </a>
            </h4>
        @else
            <h4 class="text-gray-900 text-base font-bold leading-8 mb-0 dark:text-blue-600">
                <a href="{{ route('articles.show', $article->slug()) }}" class="hover:underline">
                    {{ $article->title() }}
                </a>
            </h4>
        @endif
        <span class="font-mono text-gray-700 leading-6 mb-2 block dark:text-slate-400 text-sm">
            {{ $article->submittedAt()->format('F jS Y') }}
        </span>
        <p class="text-gray-800 leading-7 mb-3 dark:text-gray-300 text-sm">
            {{ $article->excerpt() }}
        </p>
    </div>

    
</div>
