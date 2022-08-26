@extends('layouts.base', ['bodyClass' => 'home', 'disableFooterAds' => true])
<div>
    @section('body')
    @include('layouts._alerts')
    <section>
        <div class="px-24 mx-3">
            <img src="{{asset('images/main-banner.jpg')}}" class="rounded" alt="main-banner">
        </div>
    </section>
    <section>
        <div class="w-full px-24 pt-6 flex">
            <div class="w-full w-3/12 mx-3 px-3">
                <a href="{{ route('login') }}">
                    <button type="button" class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 
                        shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Start a discussion</button>
                </a>
                <a href="{{ route('login') }}">
                    <button type="button" class="w-full text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Write a article</button>
                </a>
            </div>
            <div class="w-full w-9/12 mx-3">

                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                        dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search thread, articles, resources ..." required="">
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                    <p class="mx-1 my-2 text-sm text-gray-700 dark:text-gray-500">Find everything about the automotive world (software, licenses, solutions, suggestions). </p>
                </form>
            </div>
        </div>
        <div class="w-full px-24 py-2 flex">

            <div class="w-full w-3/12 mx-3">
                <div class="w-full max-w-sm bg-white rounded-lg border shadow-md sm:p-6 mx-auto px-4 sm:px-6 lg:px-6 bg-white rounded-lg border shadow-md sm:p-6 dark:bg-slate-800 dark:border-slate-800">
                    <h1 class="text-gray-800 dark:text-white text-center">Topics</h1>
                    <ul class="my-4 space-y-3">
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-100 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="person-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Present yourself</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="car-sport-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Automotive</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="aperture-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Motors</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Trucks</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="bus-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Heavy Machinery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="terminal-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Software</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="cube-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Sell in box</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="hammer-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Complements</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="chatbubbles-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Suggestions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-inherit dark:hover:bg-slate-600 dark:text-white">
                                <ion-icon name="mail-unread-sharp"></ion-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Contact admins</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full w-9/12 mx-3">

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white rounded-lg border shadow-md sm:p-6 dark:bg-slate-800 dark:border-slate-800">

                    <h5 class="mb-3 text-base font-semibold text-gray-800 md:text-xl dark:text-white">
                        Last threads
                    </h5>

                     
                        <div class="rounded container mx-auto">
                            
                            <div class="w-1/8 items-center flex flex-column">
                                <img class="rounded-full" src="{{ asset('images/user-fallback.png') }}" alt="Avatar of user" style="width: 50px; height: 50px;">
                                <div class="text-sm mt-4 tex-center">
                                    <p class="text-gray-900 hover:text-blue-700 dark:text-gray-300 dark:hover:text-blue-500">@jmansilla</p>
                                </div>
                            </div>

                            <div class="w-5/8 bg-inherit rounded-b lg:rounded-b-none lg:rounded-r px-4 flex flex-col justify-between leading-normal">
                                <div class="ml-8">
                                    <p class="text-sm text-gray-500 flex items-center">
                                    <ion-icon name="calendar-sharp" class="mr-2"></ion-icon>
                                        2 August 2022
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2 dark:text-white">Best Mountain Trails 2020</div>
                                    <p class="text-gray-700 text-base dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                </div>
                            </div>

                            <div class="w-2/8 flex items-center">
                                <div class="flex flex-col">
                                    <div class="item-center">
                                        
                                        <ion-icon name="chatbubble-ellipses-sharp" class="dark:text-white"></ion-icon>
                                        <span>replies</span>
                                    </div>
                                    <div >
                                        <span>12 replies</span>
                                        <ion-icon name="chatbubble-ellipses-sharp"></ion-icon>
                                    </div>
                                    <div>
                                        <span>12 replies</span>
                                        <ion-icon name="chatbubble-ellipses-sharp"></ion-icon>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                </div>
            </div>
    </section>
    <section class="pt-8 flex text-center">
        <!-- <div class="w-full p-4 ml-3 bg-white rounded-lg md:p-8 dark:bg-slate-800" style="background: linear-gradient(0deg, rgba(0,0,0,0.95), rgba(0,0,0,0.2)),url('images/main-banner.jpg') no-repeat;"> -->
        <div class="w-full p-4 bg-inherit md:p-8 dark:bg-slate-800 bg-img-banner-dark">
            <dl class="flex p-4 mx-auto max-w-screen-lg text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                <div class="w-1/4">
                    <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Developers</dd>
                </div>
                <div class="w-1/4">
                    <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Public repositories</dd>
                </div>
                <div class="w-1/4">
                    <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Open source projects</dd>
                </div>
                <div class="w-1/4">
                    <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Open source projects</dd>
                </div>
            </dl>
        </div>
    </section>
    @endsection
</div>