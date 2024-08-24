{{-- add the id of job to get the correct img --}}
@props(['isWide' => false])

<img src="http://placehold.it/{{ $isWide ? '90/90' : '42/42' }}" alt="" class="rounded-lg">
