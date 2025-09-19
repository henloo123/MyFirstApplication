<x-layout>
    <x-slot:heading>
        Available Jobs
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 p-6 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $job['title'] }}</h2>
                <div class="text-gray-500 text-sm">
                    <p class="mb-2"><strong>Salary:</strong> {{ $job['salary'] }} per year</p>
                </div>
            </div>
            <div class="mt-6">
                <a class="inline-block bg-[#d4b2a8] text-white font-semibold py-2 px-6 rounded-lg hover:bg-opacity-90 transition-colors duration-200 text-center w-full">
                    View Details
                </a>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>