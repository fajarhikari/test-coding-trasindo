@extends('main')

@section('container')
    {{-- @dd($penonton) --}}
    <div class="table-responsive small">
        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="tambahdata" method="post">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor ID</label>
                                <input type="text" name="nomor" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                                <input type="text" name="gender" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Male/Female">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Konser</label>
                                <input type="text" name="konser" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Tiket</label>
                                <input type="text" name="type" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </form><button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NomorID</th>
                <th scope="col">Konser</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jenis Tiket</th>
                <th scope="col">Confirm</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penonton as $guest)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->nomorid }}</td>
                    <td>{{ $guest->konser }}</td>
                    <td>{{ $guest->gender }}</td>
                    <td>{{ $guest->type_tiket }}</td>
                    <td>{{ $guest->confirmed == 'No' ? 'Belum Di Konfirmasi' : 'Sudah DiKonfirmasi' }}</td>
                    <td>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $guest->id }}">
                            EDIT</button>
                        <a href="hapusdata/{{ $guest->id }}" class="btn btn-danger"> Hapus</a>
                        <div class="modal fade" id="edit{{ $guest->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="editdata" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT DATA</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{ $guest->id }}">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nomor</label>
                                                <input type="text" value="{{ $guest->nomorid }}" name="nomor"
                                                    class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                <input type="text" value="{{ $guest->name }}" name="name"
                                                    class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                                                <input type="text" name="gender" value=" {{ $guest->gender }} "
                                                    class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Male/Female">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Konser</label>
                                                <input type="text" name="konser" value="{{ $guest->konser }}"
                                                    class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jenis
                                                    Tiket</label>
                                                <input type="text" name="type" value="{{ $guest->type_tiket }}"
                                                    class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"
                                                class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
