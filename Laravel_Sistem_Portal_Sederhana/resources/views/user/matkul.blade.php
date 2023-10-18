@extends('layout.app')

@section('title')
 Portal LEA
@endsection

@include('header')

@section('konten')
<h3 class="Text-center mb-4">
    Mata Kuliah
</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama</th>
        <th scope="col">Jumlah SKS</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
@foreach ($matkul as $m )

      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$m->kode}}</td>
        <td>{{$m->nama}}</td>
        <td>{{$m->sks}}</td>
        <td>{{$m->iteration}}</td>


      </tr>
@endforeach
    </tbody>
  </table>
@endsection
