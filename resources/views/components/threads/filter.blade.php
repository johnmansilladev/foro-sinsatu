<div class="flex w-full rounded shadow">
    <a 
        href="{{ url(request()->url() . '?filter=recent') }}"
        aria-current="{{ $filter === 'recent' ? 'page' : 'false' }}"
        class="flex justify-center font-medium rounded-l px-5 py-2 border {{ $filter === 'recent' ? 'bg-gray-900 text-white  border-gray-900 hover:bg-gray-800' : 'bg-white text-gray-800 border-gray-200 hover:bg-gray-100' }}"
    >
        Reciente
    </a>

    <a 
        href="{{ url(request()->url() . '?filter=resolved') }}"
        aria-current="{{ $filter === 'resolved' ? 'page' : 'false' }}"
        class="flex justify-center font-medium px-5 py-2 border-t border-b {{ $filter === 'resolved' ? 'bg-gray-900 text-white  border-gray-900 hover:bg-gray-800' : 'bg-white text-gray-800 border-gray-200 hover:bg-gray-100' }}"
    >
        Resueltos
    </a>

    <a 
        href="{{ url(request()->url() . '?filter=unresolved') }}"
        aria-current="{{ $filter === 'unresolved' ? 'page' : 'false' }}"
        class="flex justify-center font-medium rounded-r px-5 py-2 border {{ $filter === 'unresolved' ? 'bg-gray-900 text-white  border-gray-900 hover:bg-gray-800' : 'bg-white text-gray-800 border-gray-200 hover:bg-gray-100' }}"
    >
        Sin resolver
    </a>
</div>