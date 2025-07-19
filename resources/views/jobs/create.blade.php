<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form action="/jobs" method="post" enctype="multipart/form-data">

        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$70,000" />
        <x-forms.input label="Location" name="location" placeholder="FCT, Abuja" />
        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="http://127.0.0.1:8000/jobs/create" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tag (comma separated)" name="tags" placeholder="Backend, Frontend, UI/UX" />
        <x-forms.button>Publish</x-forms.button>




    </x-forms.form>
</x-layout>
