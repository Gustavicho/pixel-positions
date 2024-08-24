<x-panel class="justify-between gap-4">
    <x-employer-logo :isWide="true" />


    <div class="flex-1 flex flex-col">
        <p class="text-sm opacity-50">Company</p>
        <h3 class="text-xl font-bold mt-2 group-hover:text-blue-600 transition duration-300">Title</h3>
        <p class="text-sm opacity-50 mt-auto">Time - Salary</p>
    </div>

    <div class="flex flex-col justify-between items-end">
        <div>
            <x-tag size="sm" href="#">Remote</x-tag>
            <x-tag size="sm" href="#">22h</x-tag>
        </div>

        <div>
            <x-tag size="sm" href="#">Tag</x-tag>
            <x-tag size="sm" href="#">Tag</x-tag>
            <x-tag size="sm" href="#">Tag</x-tag>
        </div>
    </div>
</x-panel>
