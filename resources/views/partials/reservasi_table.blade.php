@foreach ($reservasi as $data)
    <tr>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jumlah_orang }}</td>
        <td>{{ $data->tanggal }}</td>
        <td>{{ $data->waktu }}</td>
        <td>
            @if ($data->status == 'Selesai')
                <button class="btn btn-success disabled">{{ $data->status }}</button>
            @elseif ($data->status == 'Batal')
                <button class="btn btn-danger disabled">{{ $data->status }}</button>
            @else
                <button class="btn btn-secondary disabled">{{ $data->status }}</button>
            @endif
        </td>
        <td>
            <select class="form-control update-status" data-id="{{ $data->id }}">
                <option value="" {{ empty($data->status) ? 'selected' : '' }}>Pilih Ubah Status</option>
                <option value="Batal" {{ $data->status == 'Batal' ? 'selected' : '' }}>Batal</option>
                <option value="Selesai" {{ $data->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="Reservasi" {{ $data->status == 'Reservasi' ? 'selected' : '' }}>Reservasi</option>
            </select>
        </td>
    </tr>
@endforeach
