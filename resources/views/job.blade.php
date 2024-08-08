<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h2 class="font-bold">{{ $job['title'] }}</h2>
    <p>Salary per year: <strong>{{ $job['salary'] }}</strong></p>
</x-layout>
