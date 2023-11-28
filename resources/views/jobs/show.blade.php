<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs'=>route('jobs.index'),$job->title=>'#']" />
    <x-job-card :$job>
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($job->description)) !!}
        </p>
        </x-job-class>
        <x-card class="mb-4">
        <h2 class="mb-2 text-lg font-medium">More {{$job->employer->company_name}} Jobs</h2>
        <div class="text-sm text-slate-500">
            @foreach ($job ->employer->jobs as $otherJob)
                <div class="mb-4 flex justify-between">
                    <div class="text-slate-700">
                        <a href="{{ route('jobs.show', $otherJob) }}">
                            {{ $otherJob->title }}
                        </a>
                        <div class="text-xs">
                            {{ $otherJob->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-xs">
                        <a href="{{route('jobs.show',$otherJob)}}">
                            ${{$otherJob->salary}}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </x-card>
</x-layout>
