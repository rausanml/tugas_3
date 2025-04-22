<h3>{{ $judul }}</h3>
<form action="{{ route('anggota.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
                <a href="{{ route('anggota.index') }}">
                    <button type="button">Kembali</button>
                </a>
            </td>
        </tr>
    </table>
</form> 