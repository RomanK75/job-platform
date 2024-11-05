@props(['tag'])


<a class="bg-white/10 rounded-full px-3 py-1 hover:bg-white/25 font-bold text-2xs content-center transition-colors duration-300" href='/tags/{{ strtolower($tag->name) }}' name="tag">{{{$tag->name}}}</a>