@props(['job'])

<div name='card' class="bg-white/5 rounded-xl p-4 flex flex-col text-center border border-transparent hover:border-blue-600 group transition-colors duration-300 ">
  <div name='card-header' class="self-start text-sm">{{$job->employer->name}}</div>
  <div name='card-body' class='py-8'>
    <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{$job->title}}</h3>
    <p class="text-sm mt-4">{{$job->schedule.' - '. $job->salary}}</p>
  </div>
  <div name="card-bottom" class="flex justify-between items-center mt-auto">
    <div name ='list-of-tags'class="flex space-x-2">
      @foreach ($job->tags as $tag)
          <x-cards.tag :$tag />
      @endforeach
    </div>
    <img src="http://placehold.it/42/42" alt="" class="rounded-xl">
  </div>
</div>