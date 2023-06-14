@extends('main')

@section('container')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <form action="cektamu" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NomorId</label>
                            <input type="text" name="nomor" value="{{$penonton->nomorid}}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nomor" value="{{$penonton->name}}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="nomor" value="{{$penonton->gender}}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Konser</label>
                            <input type="text" name="nomor" value="{{$penonton->konser}}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Tiket</label>
                            <input type="text" name="nomor" value="{{$penonton->type_tiket}}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status</label>
                            <input type="text" name="nomor" value="{{$penonton->status == 'Log In' ? 'Sudah Check In' : 'Belum Check In' }}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <center><a href="dasboard" class="btn btn-primary">Kembali</a></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
