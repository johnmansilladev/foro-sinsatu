@title($article->title())
@canonical($article->canonicalUrl())
@shareImage(route('articles.image', $article->slug()))

@extends('layouts.default')

@section('content')
    <article class="bg-white">
        @auth
            @if ($article->isDeclined() && (Auth::user()->isAdmin() || Auth::user()->isModerator()))
                <x-info-banner>
                    {{ __('admin.articles.declined') }}
                </x-info-banner>
            @elseif ($article->isPublished())
                <x-info-banner>
                Your article is already published and can no longer be edited. If you wish to make any changes to the article, please send an email to  <a href="mailto:hello@laravel.io">johnmansillaprada@gmail.com</a>
                </x-info-banner>
            @endif
        @endauth

        <div class="w-full bg-center bg-cover bg-gray-900" style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url({{ $article->heroImage(2000, 384) }});">
            <div class="container mx-auto">
                <div class="px-4 lg:px-0 lg:mx-48">
                    <div class="flex items-center justify-between pt-6 mb-28">
                        <a href="{{ route('articles') }}" class="hidden items-center text-base text-white hover:underline lg:flex">
                            <x-heroicon-s-arrow-left class="w-4 h-4 fill-current" />
                            <span class="text-white ml-1 hover:text-gray-100">Volver a artículos</span>
                        </a>

                        <div class="hidden lg:flex">
                            @if ($article->isNotPublished())
                                <x-light-tag>
                                    @if ($article->isAwaitingApproval())
                                        Pending approval
                                    @else
                                        Borrador
                                    @endif
                                </x-light-tag>
                            @endif
                        </div>
                    </div>

                    @if (count($tags = $article->tags()))
                        <div class="flex flex-wrap gap-2 lg:gap-x-4 mb-4">
                            @foreach ($tags as $tag)
                                <a href="{{ route('articles', ['tag' => $tag->slug()]) }}">
                                    <x-light-tag :tag="$tag" class="hover:underline">
                                        {{ $tag->name() }}
                                    </x-light-tag>
                                </a>
                            @endforeach
                        </div>
                    @endif

                    <h1 class="text-white text-5xl font-bold mb-4 break-words">
                        {{ $article->title() }}
                    </h1>

                    <div class="flex flex-col gap-y-2 text-white pb-4 lg:pb-12 lg:flex-row lg:items-center">
                        <div class="flex items-center">
                            <x-avatar :user="$article->author()" class="w-6 h-6 rounded-full mr-3" />

                            <a href="{{ route('profile', $article->author()->username()) }}" class="hover:underline">
                                <span class="mr-5">{{ $article->author()->name() }}</span>
                            </a>
                        </div>

                        <div class="flex items-center gap-x-6">
                            <span class="font-mono lg:mt-0">
                                {{ $article->createdAt()->format('j M, Y') }}
                            </span>

                            <span class="text-sm">
                                Read {{ $article->readTime() }} min ago
                            </span>

                            @unless($article->viewCount() < 10)
                                <span class="text-sm">
                                    {{ $article->viewCount() }} views
                                </span>
                            @endunless
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="flex px-4 lg:px-0 lg:mx-48">
                <div class="hidden lg:block lg:w-1/5">
                    <div class="py-12 mt-48 sticky top-0">
                        <x-articles.engage :article="$article" />
                    </div>
                </div>

                <div class="w-full pt-4 lg:w-4/5 lg:pt-10">
                    @if (! $article->isDeclined() || $article->isAuthoredBy(Auth::user()))
                        <x-articles.actions :article="$article" />
                    @endif

                    <div
                        x-data="{}"
                        x-init="$nextTick(function () { highlightCode($el); })"
                        class="prose prose-lg text-gray-800 prose-lio"
                    >
                        <x-buk-markdown>{!! $article->body() !!}</x-buk-markdown>
                    </div>

                    @if ($article->isUpdated())
                        <div class="text-sm text-gray-900 py-6">
                            Last update {{ $article->updated_at->diffForHumans() }}.
                        </div>
                    @endif

                    <div class="flex items-center gap-x-6 pt-6 pb-10">
                        <livewire:like-article :article="$article" :isSidebar="false" />

                        <div class="flex flex-col text-gray-900 text-xl font-semibold">
                            Do you like this article?
                            <span class="text-lg font-medium">
                            Let the author know you liked the article
                            </span>
                        </div>
                    </div>

                    <div class="border-t-2 border-gray-200 py-8 lg:pt-14 lg:pb-16">
                        <div class="flex flex-col items-center justify-center gap-y-4 lg:flex-row lg:justify-between">
                            <div class="flex items-start gap-x-4">
                                <div class="shrink-0">
                                    <x-avatar :user="$article->author()" class="hidden w-16 h-16 lg:block" />
                                </div>

                                <div class="flex flex-col items-center text-gray-900 text-xl font-semibold lg:items-start">
                                    <a href="{{ route('profile', $article->author()->username()) }}" class="hover:underline">
                                        {{ $article->author()->username() }} ({{ $article->author()->name() }})
                                    </a>

                                    <span class="text-lg text-gray-700 font-medium">
                                        {{ $article->author()->bio() }}
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-6">
                                @if ($article->author()->githubUsername())
                                    <a href="https://github.com/{{ $article->author()->githubUsername() }}">
                                        <x-icon-github class="w-6 h-6" />
                                    </a>
                                @endif

                                @if ($article->author()->hasTwitterAccount())
                                    <a href="https://twitter.com/{{ $article->author()->twitter() }}" class="text-twitter">
                                        <x-icon-twitter class="w-6 h-6" />
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <section>
        <div class="container mx-auto py-6 px-4 lg:py-24">
            <h2 class="text-4xl text-gray-900 font-bold">
                Other articles that may interest you
            </h2>

            <div class="flex flex-col gap-y-4 gap-x-6 mt-6 lg:flex-row lg:mt-12">
                @foreach ($trendingArticles as $trendingArticle)
                    <x-articles.summary
                        :article="$trendingArticle"
                        is-featured
                    />
                @endforeach
            </div>
        </div>
    </section>

    @can(App\Policies\ArticlePolicy::APPROVE, $article)
        @if ($article->isAwaitingApproval())
            <x-modal
                identifier="approveArticle"
                :action="route('admin.articles.approve', $article->slug())"
                title="Aprobar artículo"
                type="update"
            >
                <p>Are you sure you approve of this article?</p>
            </x-modal>
        @endif
    @endcan

    @can(App\Policies\ArticlePolicy::DISAPPROVE, $article)
        @if ($article->isPublished())
            <x-modal
                identifier="unpublishArticle"
                :action="route('admin.articles.disapprove', $article->slug())"
                title="Anular publicación"
                type="update"
            >
                <p>Are you sure you want to unpublish this article? If you do, it will no longer be active on the site.</p>
            </x-modal>
        @endif
    @endcan

    @can(App\Policies\ArticlePolicy::DECLINE, $article)
        @if ($article->isNotDeclined())
            <x-modal
                identifier="declineArticle"
                :action="route('admin.articles.decline', $article->slug())"
                title="Decline article"
                type="update"
            >
                <p>Are you sure you want to reject this item? Doing so will permanently remove it from the review queue.</p>
            </x-modal>
        @endif
    @endcan

    @can(App\Policies\ArticlePolicy::DELETE, $article)
        <x-modal
            identifier="deleteArticle"
            :action="route('articles.delete', $article->slug())"
            title="Delete article"
        >
            <p>Are you sure you want to delete this article? If you do, it will be permanently removed from the site.</p>
        </x-modal>
    @endcan

    @can(App\Policies\ArticlePolicy::PINNED, $article)
        <x-modal
            identifier="togglePinnedStatus"
            :action="route('admin.articles.pinned', $article->slug())"
            :title="$article->isPinned() ? 'Desenganchar artículo' : 'Fijar artículo'"
            type="update"
        >
            @if ($article->isPinned())
                <p>Are you sure you want to unhook this article?</p>
            @else
                <p>Are you sure you want to fix this item?</p>
            @endif
        </x-modal>
    @endcan
@endsection
