@props(['title','total','background'])

<div class="flex flex-col items-center rounded bg-[#204051] pt-9 mb-4 md:mb-0">
    <h3 class="uppercase text-lg font-bold text-center mb-11 text-white" >
        {{ $title }}
        <span class="text-4xl text-white block leading-tight">{{ $total }}</span>
    </h3>
    <div 
        class="w-full h-44 bg-cover bg-center" 
        style="background-image: url('{{ $background }}');"
    >
    </div>
</div>