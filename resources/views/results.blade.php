<x-layout>
    <div class="space-y-12">
        <x-page-heading>Results</x-page-heading>

        <section class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        </section>
    </div>
</x-layout>
