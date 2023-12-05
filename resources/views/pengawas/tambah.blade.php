<form action="{{ route('pengawas.store') }}" method="POST">
    @csrf
    <div>
        <label>NIS</label>
        <input type="text" name="nis" required>
    </div>
    <div>
        <label>Nama</label>
        <input type="text" name="nama" required>
    </div>
    <div>
        <label>Tanggal</label>
        <input type="date" name="tanggal" required>
    </div>
    <div>
        <button class="submit">Simpan</button>
    </div>
</form>