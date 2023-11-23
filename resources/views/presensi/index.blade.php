<x-layout>
  <main class="flex flex-col gap-2 py-2">
    <section class="flex flex-row justify-between items-center px-4">
      <h1 class="font-medium text-3xl">Presensi</h1>
      <a href="{{ route('presensi.create') }}" class="rounded-md px-4 py-1 my-2 bg-primary text-white font-medium hover:bg-transparent hover:text-primary transition outline-1 outline outline-primary">Tambah</a>
    </section>

    <section class="px-4">
      <table>
        <tr>
          <th>ID</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
        @foreach($presensi as $row)
        <tr>
          <td>{{ $row->id }}</td>
          <td>{{ $row->nis }}</td>
          <td>{{ $row->nama }}</td>
          <td>{{ $row->tanggal }}</td>
          <td>
            <form method="post" action="{{ route('presensi.destroy', $row->id); }}">
              @csrf
              @method('delete')
              <a href="{{ route('presensi.edit', $row->id) }}" class="rounded-md px-4 py-1 my-2 bg-primary text-white font-medium hover:bg-transparent hover:text-primary transition outline-1 outline outline-primary">Edit</a>
              <button class="rounded-md px-4 py-0.5 my-2 bg-primary text-white font-medium hover:bg-transparent hover:text-primary transition outline-1 outline outline-primary" type="submit">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </section>
  </main>
</x-layout>