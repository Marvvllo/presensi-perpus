<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presensi Perpustakaan | SMK Telkom Banjarbaru</title>
  <link rel="shortcut icon" href="/images/logo-sm.png" type="image/x-icon">
  @vite('resources/css/app.css')
  @vite('resources/js/sidebar.js')
  <!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
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

    <div class="w-full">
      {{ $slot }}
    </div>
  </div>
</body>

</html>