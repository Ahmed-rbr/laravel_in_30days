<x-layout>
    <x-slot:heading>       job
</x-slot:heading>
<div class="flex flex-col px-6">
  <h2 class="text-2xl font-medium"> {{$job['title']}}</h2>
<p>this job  Pays: {{$job['salary']}} per year.</p>

</div>


    
</x-layout>