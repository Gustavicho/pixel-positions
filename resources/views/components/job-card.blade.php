<x-panel class="flex-col gap-8 text-center">
    <p class="text-sm text-start">{{ $job->employer->name }}</p>

    <div class="py-2">
        <h3 class="text-xl font-bold group-hover:text-blue-600 transition duration-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="mt-4">
            {{ $job->schedule }} - $ {{ number_format($job->salary) }} USD
        </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="sm" :$tag />
            @endforeach
        </div>

        <x-employer-logo src="{{ $job->employer->logo }}" />
    </div>
</x-panel>
