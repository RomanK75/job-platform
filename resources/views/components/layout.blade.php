<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JobsPL</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white px-10 font-hanken-grotesk">
  <div>
    <x-navigation.navbar />
    <main class="mt-10 max-w-[986px] mx-auto">
      {{ $slot }}
    </main>
  </div>
  
</body>
</html>