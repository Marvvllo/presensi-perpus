<x-layout>
  <section class="flex flex-row justify-between px-4 py-2">
    <h1 class="font-medium text-3xl">Beranda</h1>
    <a href="{{ route('logout') }}" class="flex flex-row gap-2 items-center rounded-md p-1 text-primary text-xl outline outline-1 outline-primary hover:bg-primary hover:text-white transition">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
      </svg>
      <p>Logout</p>
    </a>
  </section>

  <section class="w-full grid grid-cols-3 gap-4 px-4">
    <!-- Item Absensi -->
    <article class="bg-primary text-white px-8 py-4 rounded-2xl">
      <div class="flex flex-row justify-between items-center">
        <p class="font-medium text-4xl">5</p>
        <svg class="w-16 h-auto opacity-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>
      </div>
      <h2 class="font-medium text-2xl">Absensi</h2>
    </article>

    <!-- Item Absensi -->
    <article class="bg-black text-white px-8 py-4 rounded-2xl">
      <div class="flex flex-row justify-between items-center">
        <p class="font-medium text-4xl">2</p>
        <svg class="w-16 h-auto opacity-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z" clip-rule="evenodd" />
        </svg>
      </div>
      <h2 class="font-medium text-2xl">Pengawas</h2>
    </article>

    <!-- Item Absensi -->
    <article class="bg-gray text-white px-8 py-4 rounded-2xl">
      <div class="flex flex-row justify-between items-center">
        <p class="font-medium text-4xl">2</p>
        <svg class="w-16 h-auto opacity-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
        </svg>
      </div>
      <h2 class="font-medium text-2xl">Admin</h2>
    </article>
  </section>

  <!-- Absensi Terbaru -->
  <section class="px-4 py-2">
    <h2 class="font-medium text-2xl">Presensi Terbaru</h2>

  </section>
</x-layout>