@extends('layout.app')

@section('title')
    Portal LEA
@endsection
@include('header')

@section('konten')


    <h3 class="Text-center mb-4">
        List Mahasiswa
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin </th>
                <th scope="col">Alamat </th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->jenis_kelamin }}</td>
                    <td>{{ $m->alamat }}</td>
                    <td>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modalhapus{{ $m->nim }}">
                            <i class="bi bi-pencil-square">
                                Hapus
                            </i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalhapus{{ $m->nim }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Yakin mau di hapus</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                            <form action="/mahasiswa/{{ $m->nim  }}/hapus" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"> Hapus</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Mahasiswa
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/mahasiswa/tambah">
                    @csrf
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="InputNIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"name="nim">
                        </div>
                        <div class="mb-3">
                            <label for="InputNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select mb-3" id="jenis_kelamin" aria-label="Default select example"
                                name="jenis_kelamin">
                                <option selected> Pilih </option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="InputAlamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleInputPassword1">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
