<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job</title>
</head>

<body>
    <x-layout>
        <x-slot:heading>
            Job
        </x-slot:heading>

        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>
            This job pays {{ $job['salary'] }} per year.
        </p>
        <ul> 
    @foreach ($jobs as $job) 
        <li> 
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline"> 
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year. 
            </a> 
        </li> 
    @endforeach 
</ul> 
    </x-layout>

    <!-- This is the only part we will change per file -->

</body>

</html>