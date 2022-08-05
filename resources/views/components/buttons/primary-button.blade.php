@props(['fullWidth' => false])

<span class="{{ $fullWidth ? 'flex' : 'inline-flex' }} rounded-md shadow-sm">
    @if ($attributes->has('href'))
        <a {{ $attributes->merge(['class' => ($fullWidth ? 'w-full ' : '') . 'bg-[#204051] border border-transparent rounded py-2 px-4 inline-flex justify-center text-base text-white hover:bg-[#11232c] font-medium']) }}>
            {{ $slot }}
        </a>
    @else
        <button {{ $attributes->merge(['class' => ($fullWidth ? 'w-full ' : '') . 'bg-[#11232c] border border-transparent rounded py-2 px-4 inline-flex justify-center text-base text-white hover:bg-[#11232c] font-medium']) }}>
            {{ $slot }}
        </button>
    @endif
</span>