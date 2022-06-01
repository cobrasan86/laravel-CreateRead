@extends('layouts.app')
@section('title', 'Semua Post - Contoh Create dan Read')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua Post<br>Contoh Create dan Read</h1>
  <p><button onclick="location.href='create'" class="btn-blue">Tambah</button></td>
  <table style="width:100%">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td style="width: 200px" >{{ $post->title}}</td>
        <td style="width: 500px" >{{ $post->body }}</td>
        <td style="width: 100px"><button class="btn-green">Edit</button></td>
        <td style="width: 100px"><button class="btn-red">Hapus</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <p align="center"r>Dalam Praktikum ini sementara Hanya Create dan Read saja.
</div>
@endsection
