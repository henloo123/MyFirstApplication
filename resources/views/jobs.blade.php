<x-layout>
    <x-slot:heading>
        Available Jobs
    </x-slot:heading>

    <div class="columns-1 sm:columns-2 lg:columns-3 gap-6">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="break-inside-avoid-column block bg-white p-6 mb-6 rounded-lg shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out relative group">
            <div class="absolute bottom-0 left-0 w-full h-2 bg-[#d4b2a8] transform scale-y-0 origin-bottom group-hover:scale-y-100 transition-transform duration-300 ease-in-out rounded-b-lg"></div>
            <div>
                <h2 class="text-xl font-bold text-gray-800 leading-tight">
                    {{ $job['title'] }}
                </h2>
                <p class="text-md text-gray-500 font-medium mt-1">{{ $job['company'] }}</p>
                <div class="text-sm mt-4">
                    <p class="mb-2"><strong>Salary:</strong> {{ $job['salary'] }} per year</p>
                    <p><strong>Location:</strong> {{ $job['location'] }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</x-layout>