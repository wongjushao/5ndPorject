<x-card class="mb-4">
    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-lg font-medium ">{{$job->title}}</h2>
        <div class="text-slate-500 "> ${{number_format($job->salary)}} </div>
    </div>
    <div class="mb-4 flex justify-between text-sm text-slate-500">
        <div class="flex space-x-1">
            <div>Company Name</div>
            <div>{{$job->location}}</div>
        </div>
        <div class="flex text-xs ">
            <div class="rounded-md border py-1">{{Str::ucfirst($job->experience)}}</div>
            <div class="rounded-md border py-1">{{$job->category}}</div>
        </div>

    </div>

    {{$slot}}
</x-card>
