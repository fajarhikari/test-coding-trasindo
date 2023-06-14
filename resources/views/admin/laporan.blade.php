@extends('main')

@section('container')
    {{-- @dd($penonton) --}}
    <div class="table-responsive small">

    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NomorID</th>
                <th scope="col">Jenis Tiket</th>
                <th scope="col">Status</th>
                <th scope="col">Confirm</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penonton as $guest)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->nomorid }}</td>
                    <td>{{ $guest->type_tiket }}</td>
                    <td>{{ $guest->status == 'Log In' ? 'Sudah Check In' : 'Belum Check In' }}</td>
                    <td>{{ $guest->confirmed == 'No' ? 'Belum Di Konfirmasi' : 'Sudah DiKonfirmasi' }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-grid gap-2">
        <button class="btn btn-primary btn btn-block mx-2" disabled>Jumlah Tamu Yang Telah Melakukan Check in {{ $penonton2->count() }} </button>
        <button class="btn btn-danger btn btn-block mx-2" disabled>Jumlah Tamu Yang Belum Melakukan Check in {{ $penonton3->count() }}</button>
    </div>
    </div>
@endsection
