<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs'=>route('jobs.index')]"/>
    <x-card class="mb-4 text-sm ">Filter
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold">
                    Search
                </div>
            </div>
        </div>
    </x-card>
        @foreach ($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <div>
                <x-link-button :herf="route('jobs.show',$job)">
                    show
                </x-link-button>
            </div>


        </x-job-card>
    @endforeach
</x-layout>
