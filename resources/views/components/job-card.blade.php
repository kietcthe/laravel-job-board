<x-card {{$attributes->class([])}}>
    <div class=" mb-4 flex justify-between">
        <h2 class="text-lg font-medium">
            {{$job->title}}
        </h2>
        <div class="text-slate-500">
            ${{number_format($job->salary)}}
        </div>
    </div>

    <div class="flex justify-between items-center text-sm text-slate-500 mb-4">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div>{{$job->location}}</div>
        </div>
        <div class="flex space-x-2 text-xs">
            <x-tag>
                <a href="{{route('jobs.index', ['experience' => $job->experience])}}">
                    {{Str::ucfirst($job->experience)}}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{route('jobs.index', ['category' => $job->category])}}">
                    {{$job->category}}
                </a>
            </x-tag>
        </div>
    </div>

    {{$slot}}
</x-card>
