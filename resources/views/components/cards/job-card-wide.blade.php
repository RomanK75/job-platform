@props(['job'])

<div name='card' class="bg-white/5 rounded-xl p-4 flex flex-row gap-x-6 border border-transparent hover:border-blue-600 group transition-colors duration-300">
  
  <div>
    <x-cards.employer-logo></x-cards.employer-logo>
  </div>
  <div class="flex-1 flex flex-col">
      <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
      <h3 class="font-bold text-lg mt-3 group-hover:text-blue-600 transition-colors duration-300">{{$job->title}}</h3>
      <p class="text-sm text-gray-400 mt-auto">{{$job->schedule.' - '. $job->salary}}</p>
  </div>
  <div>
    @foreach ($job->tags as $tag)
      <x-cards.tag :$tag />
    @endforeach
  </div>
</div>