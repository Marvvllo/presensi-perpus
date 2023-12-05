<form action="{{ route('pengawas.update', $pengawas->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>NIS</label>
        <input type="text" name="nis" value="{{ old('nis', $pengawas->nis) }}" required>
    </div>
    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $pengawas->nama) }}" required>
    </div>
    <div>
        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal', $pengawas->tanggal) }}" required>
    </div>
    <div>
        <button class="submit">Simpan</button>
    </div>
</form>