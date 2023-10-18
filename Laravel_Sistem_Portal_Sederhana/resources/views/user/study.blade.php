@extends('layout.app')

@section('title')
 Portal LEA
@endsection

@include('header')

@section('konten')
<h3 class="Text-center mb-4">
    Study Mahasiswa
</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mata Kuliah </th>
        <th scope="col">Dosen</th>
        <th scope="col">Jadwal</th>
        <th scope="col">Ruang</th>
        <th scope="col">Periode</th>
        <th scope="col">Aksi</th>


      </tr>
    </thead>
    <tbody>
       @foreach ($krs as $k )

      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$k->mata_kuliah->nama}}</td>
        <td>{{$k->nama_dosen}}</td>
        <td>{{$k->jadwal}}</td>
        <td>{{$k->ruang}}</td>
        <td>{{$k->periode}}</td>


        <td>
            <a href="/study/{{$k->id}}/detail" class="btn btn-success">
                <i class="bi bi-info-circle"> Detail</i>
            </a>

        </td>

      </tr>
      @endforeach
    </tbody>
</table>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Study
 </button>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Study</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form method="post" action="/study/tambah">
            @csrf
            <div class="modal-body">
                 <div class="mb-3">
                    <label for="mata-kuliah" class="form-label">Mata Kuliah</label>
                    <select class="form-select mb-3" id="mata-kuliah" aria-label="Default select example" name= "kode_matkul">
                        <option selected> Pilih </option>
                        @foreach ( $matkul as $m )
                        <option value="{{$m->kode}}">{{$m->nama}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="mb-3">
                   <label for="InputNama" class="form-label">Nama Dosen</label>
                   <input type="text" class="form-control" id="exampleInputPassword1" name="nama_dosen">
                 </div>

                 <div class="mb-3">
                     <label for="ruang" class="form-label"> Ruang</label>
                     <select class="form-select " id="ruang" aria-label="Default select example"name ="ruang">
                         <option selected> Pilih </option>
                         <option value="H 2.1">H 2.1</option>
                         <option value="H 2.2">H 2.2</option>
                         <option value="H 2.3">H 2.3</option>

                       </select>
                 </div>

                 <div class="mb-3">
                     <label for="jadwal" class="form-label"> Jadwal</label>
                     <select class="form-select " id="jadwal" aria-label="Default select example"name = "jadwal">
                         <option selected> Pilih </option>
                         <option value="Senin 07:30 - 10:00">Senin 07:30 - 10:00</option>
                         <option value="selasa 07:30 - 10:00">Selasa 07:30 - 10:00</option>
                         <option value="Rabu 07:30 - 10:00">Rabu 07:30 - 10:00</option>
                         <option value="Kamis 07:30 - 10:00">Kamis 07:30 - 10:00</option>

                       </select>
                 </div>

                 <div class="mb-3">
                     <label for="periode" class="form-label"> Periode</label>
                     <select class="form-select " id="periode" aria-label="Default select example"name = "periode">
                         <option selected> Pilih </option>
                         <option value="2022">2022</option>
                         <option value="2021">2021</option>

                       </select>
                 </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
       </div>
     </div>
   </div>

  @endsection
