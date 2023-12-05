<div>
    <table>
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengawas as $p)
                <tr>
                    <td>{{ $p->nis }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>
                        <a href="{{ route('pengawas.edit', $p->id) }}">Edit</a>
                        <a href="{{ route('pengawas.destroy', $p->id) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>