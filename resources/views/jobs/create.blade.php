<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Title" name="title" placeholder="Software Engineer" />
        <x-forms.input label="Salary" name="salary" type="number" placeholder="50,000" />
        <x-forms.input label="Location" name="location" placeholder="London" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="full-time">Full time</option>
            <option value="part-time">Part time</option>
        </x-forms.select>

        <x-forms.input label="Link to Job page" name="url" placeholder="https://example.com" />
        <x-forms.checkbox label="Pay for featured" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Laravel, Software, ..." />

        <x-forms.button>Post Job</x-forms.button>
    </x-forms.form>
</x-layout>
