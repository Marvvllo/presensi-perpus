<x-layout>
  <main class="flex flex-col gap-2 py-2">
    <section class="flex flex-row justify-between items-center px-4">
      <h1 class="font-medium text-3xl">Tambah Presensi</h1>
    </section>
    <section class="px-4">
      <form method="post" action="{{ route('presensi.store') }}">
        @csrf
        <div class="form-group flex flex-col">
          <label for="nis">NIS</label>
          <input class="px-1 py-2 rounded-md border border-primary border-solid" type="number" name="nis" id="nis">
        </div>
        <div class="form-group flex flex-col">
          <label for="nama">nama</label>
          <input class="px-1 py-2 rounded-md border border-primary border-solid" type="text" name="nama" id="nama">
        </div>
        <div class="form-group flex flex-col">
          <label for="tanggal">Tanggal</label>
          <input class="px-1 py-2 rounded-md border border-primary border-solid" type="date" name="tanggal" id="tanggal">
        </div>

        <button class="rounded-md px-4 py-0.5 my-2 bg-primary text-white font-medium hover:bg-transparent hover:text-primary transition outline-1 outline outline-primary" type="submit">Simpan</button>
      </form>
    </section>
  </main>
</x-layout>