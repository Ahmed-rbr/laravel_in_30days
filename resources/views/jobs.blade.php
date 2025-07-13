<x-layout>
    <x-slot:heading>        about page
</x-slot:heading>
    <h1 class="bg-green-300 text-2xl font-bold p-4">Welcome jobs Page</h1>
@foreach ($jobs as $job )
<li class="p-2">
   <a class="text-blue-400 hover:underline hover:text-blue-600" href="/jobs/{{$job['id']}}"> {{$job['title']}}: Pays {{$job['salary']}}
</a>
</li>
    
@endforeach
</x-layout>