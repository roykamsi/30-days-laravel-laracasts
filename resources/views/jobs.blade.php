<x-layout>
    <x-slot:heading>Job listing</x-slot:heading>

    @foreach ($jobs as $job)
        <x-job-link>
            <x-slot:id>{{ $job['id'] }}</x-slot:id>
            <x-slot:job>{{ $job['title'] }}</x-slot:job>
            <x-slot:salary>{{ $job['salary'] }}</x-slot:salary>
        </x-job-link>
    @endforeach
</x-layout>
