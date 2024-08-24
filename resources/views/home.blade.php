<x-layout>
    <div class="space-y-12">
        <section class="text-center">
            <h2 class="font-bold text-4xl mb-4">Find your next Job!</h2>

            <form method="GET" action="/jobs">
                <input type="text" name="search" placeholder="software engineer..."
                    class="w-full max-w-xl bg-white/10 px-6 py-4 rounded-xl ">
            </form>
        </section>


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
            <div class="mt-4 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
