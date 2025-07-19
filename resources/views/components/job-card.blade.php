@props(['job'])
<x-panel class=" flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-color duration-300">{{ $job->title }} </h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>

    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag )

            <x-tag :$tag size="small"/>

            @endforeach

        </div>
        {{-- <img src="http://placehold.it/42/42" alt="coming up" class="rounded-xl ">
         --}}
         <x-employer-logo :with="42"/>
    </div>
</x-panel>
