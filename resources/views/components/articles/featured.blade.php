@props(['articles'])

<!-- @unless ($articles->count() < 4)
    <div class="flex flex-col gap-y-8 lg:flex-row lg:gap-x-8 lg:mb-16">
        <div class="w-full lg:w-1/3">
            <x-articles.summary 
                :article="$articles->first()"
                is-featured
            />
        </div>

        <div class="w-full lg:w-1/3">
            <x-articles.summary 
                :article="$articles->get(1)"
                is-featured
            />
        </div>

        <div class="w-full flex flex-col gap-y-8 lg:w-1/3">
            <div class="lg:border-b-2 lg:border-gray-200 lg:h-72">
                <x-articles.summary :article="$articles->get(2)" />
            </div>

            <div class="lg:pt-6 flex-1">
                <x-articles.summary :article="$articles->get(3)" />
            </div>
        </div>
    </div>
@endunless -->
@unless ($articles->count() < 4) @foreach($articles as $i=> $article)

    
    <div class="w-full">
        <div class="flex w-full divide-y divide-slate-700">
            <div class="w-1/12">
                <img src="https://avatars.githubusercontent.com/u/47313528?v=4" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none flex justify-center" width="50px"  height="50px"/>

            </div>
            <div class="w-7/12">
                 <x-articles.summary :article="$articles->get(3)" />
            </div>
            <div class="w-2/12 flex justify-center ">
                <span class=" inline-block align-middle text-gray-400 dark:text-slate-400">
                    12
                </span>
            </div>
            <div class="w-2/12 flex justify-center ">
                <span class=" inline-block align-middle text-gray-400 dark:text-slate-400">
                    12
                </span>
            </div>
        </div>
    </div>



    @endforeach


    @endunless