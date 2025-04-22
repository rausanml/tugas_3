<h3>{{ $judul }}</h3>
<form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="{{ $anggota->nama }}" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" value="{{ $anggota->hp }}" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Update</button>
                <a href="{{ route('anggota.index') }}">
                    <button type="button">Kembali</button>
                </a>
            </td>
        </tr>
    </table>
</form> 