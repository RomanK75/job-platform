<x-layout>
  <div class="space-y-10">
    <section>
      <x-section-heading >Featured jobs</x-section-heading>
      <div class="grid lg:grid-cols-3 gap-4">
        @foreach ($featured as $job)
          <x-cards.job-card :job="$job"/>
        @endforeach
      </div>
    </section>
  
    <section>
      <x-section-heading >Tags</x-section-heading>
      <div class="space-x-1">
        @foreach ($tags as $tag)
            <x-cards.tag :$tag />
        @endforeach
      </div>
    </section>
  
    <section class="space-y-5 pb-10">
      <x-section-heading >Recent jobs</x-section-heading>
      @foreach ($jobs as $job)
      <x-cards.job-card-wide :job="$job"/>
    @endforeach
    </section>
  </div>
</x-layout>