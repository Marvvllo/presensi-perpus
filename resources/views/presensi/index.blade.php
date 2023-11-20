<x-layout>
  <main class="flex flex-col gap-2 py-2">
    <section class="flex flex-row justify-between items-center px-4">
      <h1 class="font-medium text-3xl">Presensi</h1>
    </section>

    <section class="px-4">
      <table>
        <tr>
          <th>ID</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Tanggal</th>
        </tr>
        @foreach($presensi as $row)
        <tr>
          <td>{{ $row->id }}</td>
          <td>{{ $row->nis }}</td>
          <td>{{ $row->nama }}</td>
          <td>{{ $row->tanggal }}</td>
        </tr>
        @endforeach
      </table>
    </section>
  </main>
</x-layout>