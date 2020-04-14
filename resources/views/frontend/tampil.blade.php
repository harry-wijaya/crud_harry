@extends('template')

@section('title')
    Our Project
@endsection


@section('content')
<div class="content" style="text-align:justify;">
    <h2 style="text-align:center;">Our Project</h2>
    <h4 style="text-align:center;">Tampilan User</h4>
    
    
    <br>
    <table class="table table-dark table-hover" border="1" style="text-align:center">
        <tr>
            <th>Nama</th>
            <th>Prodi</th>
            <th>No.Hp</th>
            <th>Semester</th>
            <th>action</th>
        </tr>
        @foreach($user as $p)
        <tr>
            <th>{{ $p->nama }}</th>
            <th>{{ $p->prodi }}</th>
            <th>{{ $p->nohp }}</th>
            <th>{{ $p->semester }}</th>
            <th><a href="/tampilan/edit/{{ $p->id}}">Edit</a> | <a href="/tampilan/hapus/{{$p->id}}">Hapus</a></th>
        </tr>
        @endforeach
    </table>
    <a href="/our-project"> + Tambah User Baru </a>
</div>
@endsection

