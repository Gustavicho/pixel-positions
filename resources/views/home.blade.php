<x-layout>
    <div class="space-y-8">

        <section>
            <x-section-title>Popular jobs</x-section-title>
            <div class="grid grid-cols-3 gap-6 mt-4">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-title>Tags</x-section-title>
            <div class="mt-4 space-x-1">
                @for ($i = 0; $i < 8; $i++)
                    <x-tag href="#">Tag</x-tag>
                @endfor
            </div>
        </section>

        <section>
            <x-section-title>Recent jobs</x-section-title>
            <div>

            </div>
        </section>
    </div>
</x-layout>
