@props(['articles'])

@unless ($articles->count() < 4) <div class="">
    <table class="table-auto w-full">

        <tbody class="text-gray-900 dark:text-gray-300">
            @foreach($articles as $i=> $article)


            <!-- <div class="w-full">
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
    </div> -->


            <tr>
                <td>
                    <div class="flex w-full">
                        <x-articles.summary :article="$articles->get(3)" />
                    </div>
                </td>
                <td>
                    <ul>
                        <li>10 shareds</li>
                        <li>2, 358 comments</li>
                        <li>236 views</li>
                    </ul>
                </td>
                <td>
                    Last Post by Robert226
                </td>
            </tr>


            @endforeach

    </table>
    </div>
    @endunless