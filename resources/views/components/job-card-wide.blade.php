<x-panel class="justify-between gap-4">
    <x-employer-logo :isWide="true" src="{{ $job->employer->logo }}" />


    <div class="flex-1 flex flex-col">
        <p class="text-sm opacity-50">{{ $job->employer->name }}</p>
        <h3 href="{{ $job->url }}" class="text-xl font-bold mt-2 group-hover:text-blue-600 transition duration-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-sm opacity-50 mt-auto">
            {{ $job->schedule }} - $ {{ number_format($job->salary) }} USD
        </p>
    </div>

    <div class="flex gap-2 items-end">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
