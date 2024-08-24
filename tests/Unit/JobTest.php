<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer)->toBeInstanceOf(Employer::class);
});

test('it has a tag', function () {
    $job = Job::factory()->create();
    $job->tag('laravel');

    expect($job->tags)->toHaveCount(1);
});
