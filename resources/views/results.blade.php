<x-layout>
    <x-page-heading>Result</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wild :job="$job"></x-job-card-wild>

        @endforeach

    </div>

</x-layout>
 