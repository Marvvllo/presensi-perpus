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
  <div class="flex flex-row min-h-screen">

    <x-sidebar />

    <main class="w-full">
      {{ $slot }}
    </main>
  </div>
</body>

</html>