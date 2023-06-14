@extends('main')

@section('container')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <form action="cektamu" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">nomor id</label>
                            <input type="text" name="nomor" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan ID Penonton">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn btn-block mx-2">Check In Tamu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
