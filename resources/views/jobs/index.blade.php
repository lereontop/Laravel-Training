<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class=" font-bold text-4xl">Let's Find Your Next Job</h1>
            <x-forms.form action="/search" class="mt-6">

                <x-forms.input name="search" :label="false" placeholder="Web Developer..."/>

            </x-forms.form>

        </section>

        <section class="pt-10">
            <x-section-heading>Feature Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job"></x-job-card>
                @endforeach

            </div>
        </section>


        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />

                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wild :job="$job"></x-job-card-wild>

                @endforeach

            </div>
        </section>

    </div>
</x-layout>
