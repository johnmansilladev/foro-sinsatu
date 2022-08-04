<!-- <section class="mt-12 lg:mt-40">
    @include('layouts._sponsors')
</section> -->

<div class="bg-gray-900 text-white mt-14 lg:mt-40">
    <div class="container mx-auto pt-7 pb-8 lg:pt-20 lg:px-16">
        <div class="mx-4 md:mx-0">
            <div class="flex flex-col pb-8 mb-8 border-b lg:pb-16 border-gray-800 lg:flex-row">
                <div class="w-full mb-6 lg:w-2/5 lg:pr-20 lg:mb-0">
                    <a href="" class="block mb-5">
                        <img src="{{ asset('images/logo-web.png') }}" />
                    </a>

                    <p class="text-gray-100 lg:leading-loose">
                        El Portal Sinsatu, es para resolver problemas y construir una gran comunidad de especialistas.
                    </p>
                </div>

                <div class="lg:w-full lg:flex lg:justify-between">
                    <div class="grow mb-6 lg:mb-0">
                        <h6 class="text-lg mb-4 lg:mb-6">
                            Sinsatu foro
                        </h6>

                        <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                            <a href="{{ route('forum') }}" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Foro
                            </a>

                            <a href="{{ route('articles') }}" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Artículos
                            </a>

                            <!-- <a href="https://paste.laravel.io" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Pastebin
                            </a> -->
                        </div>
                    </div>

                    <div class="grow mb-6 lg:mb-0">
                        <h6 class="text-lg mb-4 lg:mb-6">
                            Redes Sociales
                        </h6>

                        <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                            <a href="https://www.facebook.com/sinsatuperu/" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                <x-icon-facebook class="text-white w-4 h-4 inline mr-3.5"/>
                                Facebook
                            </a>

                            <a href="https://twitter.com" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                <x-icon-github class="text-white w-4 h-4 inline mr-3.5"/>
                                Twitter
                            </a>
                        </div>
                    </div>

                    <div class="grow">
                        <h6 class="text-lg mb-6">
                            Comunidad
                        </h6>

                        <div class="flex flex-col flex-nowrap">
                            <div class="flex mb-4 lg:mb-6">
                                <a href="https://mecaprograms.com" class="w-1/2 text-gray-400 hover:text-gray-200">
                                    <img src="{{ asset('images/mecaprograms.png') }}" alt="Laravel" class="w-32 h-32 inline mr-2" />
                                    
                                </a>

                                <a href="https://anyepc.com/" class="w-1/2 text-gray-400 hover:text-gray-200">
                                    <img src="{{ asset('images/anyepc.png') }}" alt="Laravel News" class="w-32 h-32 inline mr-2" />
                                    
                                </a>
                            </div>

                            <!-- <div class="flex">
                                <a href="https://laracasts.com" class="w-1/2 text-gray-400 hover:text-gray-200">
                                    <img src="{{ asset('images/laracasts.png') }}" alt="Laracasts" class="w-4 h-4 inline mr-2" />
                                    Laracasts
                                </a>

                                <a href="https://www.laravelpodcast.com" class="w-1/2 text-gray-400 hover:text-gray-200">
                                    <img src="{{ asset('images/podcast.png') }}" alt="Laravel Podcast" class="w-4 h-4 inline mr-2" />
                                    Laravel Podcast
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-gray-100 flex flex-col lg:flex-row">
                <span class="mb-5 lg:mb-0 lg:mr-5">
                    &copy; {{ date('Y') }} foro.sinsatu.com - Todos los derechos reservados
                </span>

                <div class="flex flex-wrap lg:block">
                    <a href="{{ route('terms') }}" class="w-1/2 mb-4 hover:text-gray-200 lg:w-full lg:mb-0 lg:mr-8">
                        Terminos de servicio
                    </a>
                    <a href="{{ route('privacy') }}" class="w-1/2 mb-4 hover:text-gray-200 lg:w-full lg:mb-0 lg:mr-8">
                        Políticas de privacidad
                    </a>
                    <a href="#  " class="w-1/2 hover:text-gray-200 lg:w-full lg:mb-0">
                        Anuncios???? (propuesta)
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
