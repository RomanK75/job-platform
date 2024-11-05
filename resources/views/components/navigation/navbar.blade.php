<nav class="flex items-center justify-between py-2 border-b border-white/10">
    <div class=" w-10 -h10">
      <a href="/">
        <img src="{{Vite::asset('resources/images/logo.png')}}" alt="">
      </a>
    </div>
    <div class="space-x-6 font-bold">
      <x-navigation.nav-link href="/jobs">Jobs</x-naigation.nav-link>
      <x-navigation.nav-link href="/careers">Careers</x-naigation.nav-link>
      <x-navigation.nav-link href="/salaries">Salaries</x-naigation.nav-link>
      <x-navigation.nav-link href="/companies">Companies</x-naigation.nav-link>
    </div>
    <div>
      <x-navigation.nav-link href="/login">Post a Job</x-naigation.nav-link>
    </div>
</nav>
