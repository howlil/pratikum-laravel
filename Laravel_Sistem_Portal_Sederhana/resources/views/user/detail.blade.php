@extends('layout.app')

@section('title')
 Portal LEA
@endsection

@include('header')

@section('konten')
<h3 class="Text-center mb-4">
 List Mahasiswa tiap Study
</h3>
    <table class="table w-25 mb-4">
    <tbody>
        <tr>
            <th scope="row">Mata Kuliah</th>
            <td>{{$krs->mata_kuliah->nama}}</td>

        </tr>
        <tr>
            <th scope="row">Dosen</th>
            <td>{{$krs->nama_dosen}}</td>
        </tr>
        <tr>
            <th scope="row">Ruang</th>
            <td >{{$krs->ruang}}</td>
        </tr>
        <tr>
            <th scope="row">Jadwal</th>
            <td >{{$krs->jadwal}}</td>
        </tr>
        <tr>
            <th scope="row">Periode</th>
            <td >{{$krs->periode}}</td>
        </tr>
        </tbody>
    </table>

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
            @foreach ($list_mhs_kelas as $mhk )

        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhk->nim}}</td>
            <td>{{$mhk->nama}}</td>
            <td>{{$mhk->jenis_kelamin}}</td>
            <td>{{$mhk->alamat}}</td>

            <td>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#peringatan{{$mhk->nim}}">
                    Hapus
                </button>

                <div class="modal" tabindex="-1" id="peringatan{{$mhk->nim}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Yakin mau hapus datanya{{$mhk->nim}}?</h5>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                        <form action="/study/{{$krs->id}}/{{$mhk->nim}}/hapus" method="post">
                           @method('delete')
                           @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </td>
            @endforeach
        </tr>

        </tbody>
    </table>

<!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Mahasiswa study
    </button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mahasiswa Studi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="/study/{{$krs->id}}/tambah">
            <div class="modal-body">
            <input type="hidden" name="id_krs" value="{{$krs->id}}">
                    <div class="mb-3">
                        <label for="mahasiswa" class="form-label">Mahasiswa</label>
                        @foreach ($list_mhs_blm_terdaftar as $l )
                        @csrf
                        <select class="form-select mb-3" id="mahasiswa" name="nim_mhs" aria-label="Default select example">
                            <option selected> Pilih </option>
                        <option value="{{$l->nim}}">{{$l->nama}}</option>

                    </select>
                    @endforeach
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
