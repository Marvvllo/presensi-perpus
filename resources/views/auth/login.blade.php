<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presensi Perpustakaan | SMK Telkom Banjarbaru</title>
  <link rel="shortcut icon" href="/images/logo-sm.png" type="image/x-icon">
  @vite('resources/css/app.css')
  @vite('resources/js/sidebar.js')
  <style>
    @font-face {
      font-family: "GothamRounded";
      src: url("/fonts/gothamrounded-book.otf") format("opentype");
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: "GothamRounded";
      src: url("/fonts/gothamrounded-medium.otf") format("opentype");
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: "GothamRounded";
      src: url("/fonts/gothamrounded-bold.otf") format("opentype");
      font-weight: 700;
      font-style: normal;
    }
  </style>
</head>

<body>
  <main class="grid grid-cols-2">
    <section>
      <img class="h-screen object-fill" src="/images/login-img.png" alt="">
    </section>

    <form action="{{ route('authenticate') }}" method="post">
      @csrf
      <section class="h-full flex flex-col gap-2 justify-center items-center px-32">
        <img class="w-full h-auto" src="/images/logo-md.png" alt="">
        <h1 class="font-medium text-2xl">Presensi Perpustakaan</h1>

        <!-- Email Form Group -->
        <div class="w-full flex flex-col">
          <label class="text-lg font-medium" for="email">Email</label>
          <input class="bg-light-gray px-2 py-1 rounded-md outline outline-1 outline-black" type="text" name="email" id="email" placeholder="Masukkan email...">
        </div>

        <!-- Password Form Group -->
        <div class="w-full flex flex-col">
          <label class="text-lg font-medium" for="password">Password</label>
          <input class="bg-light-gray px-2 py-1 rounded-md outline outline-1 outline-black" type="password" name="password" id="password" placeholder="Masukkan password...">
        </div>

        <!-- Submit Button -->
        <button class="w-full rounded-md py-0.5 my-2 bg-primary text-white font-medium hover:bg-transparent hover:text-primary transition outline-1 outline outline-primary" type="submit">Login</button>
      </section>
    </form>
  </main>
</body>

</html>