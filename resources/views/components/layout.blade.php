<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
  <div class="px-10">

    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div>
        <a href="/">
          <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions">
        </a>
      </div>

      <div class="space-x-6 font-bold">
        <a href="/jobs">Jobs</a>
        <a href="/careers">Careers</a>
        <a href="/salaries">Salaries</a>
        <a href="/companies">Companies</a>
      </div>

      @auth
        <div class="space-x-6 font-bold flex">
          <a href="/jobs/create">Post a job</a>
          <form method="POST" action="/logout">
            @csrf
            @method('DELETE')
            <button type="submit">Logout</button>
          </form>
        </div>
      @endauth

      @guest
        <div class="space-x-6 font-bold">
          <a href="/login">Login</a>
          <a href="/register">Register</a>
        </div>
      @endguest

    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
      {{ $slot }}
    </main>

  </div>
</body>
</html>
