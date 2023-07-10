<x-layout>
    <x-breadcrumbs :links="['Jobs' => route('jobs.index')]" class="mb-4"/>
    <x-card class="mb-4 text-sm">
        <form method="get" action="{{route('jobs.index')}}" id="filter-form">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <div class="mb-1 font-semibold">
                        Search
                    </div>
                    <x-text-input name="search" :value="request('search')" placeholder="Search for any text"
                                  form-id="filter-form"
                    />
                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Salary
                    </div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" :value="request('min_salary')" placeholder="From"
                                      form-id="filter-form"
                        />
                        <x-text-input name="max_salary" :value="request('max_salary')" placeholder="To"
                                      form-id="filter-form"
                        />
                    </div>
                </div>
                <div>
                    <div class="font-semibold mb-1">Experience</div>
                    <x-radio-group name="experience"
                                   :options="array_map('ucfirst',\App\Models\Job::$availableExperiences)"/>
                </div>
                <div>
                    <div class="font-semibold mb-1">Category</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$availableCategories"/>
                </div>
            </div>
            <x-button class="w-full">Filter</x-button>
        </form>
    </x-card>
    @foreach($jobs as $job)
        <x-job-card :$job class="mb-4">
            <x-link-button href="{{ route('jobs.show', $job) }}">
                Show
            </x-link-button>
        </x-job-card>
    @endforeach
</x-layout>
