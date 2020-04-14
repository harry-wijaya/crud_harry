@extends('template')

@section('title')
    Our Project
@endsection


@section('content')
<div class="content" style="text-align:justify;">
    <h2 style="text-align:center;">Our Project</h2>
    <h4 style="text-align:center;">Edit Data</h4>
    
    <a href="/tampilan"> Back</a>
    <br>
    
        @foreach($user as $p)
        <form action="/tampilan/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $p->id}}">
            <div class="form-group">
                <label> Nama : </label>
                <input type="text" class="form-control" name="nama" value="{{$p->nama}}"> 
            </div>

            <div class="form-group">
                <label> Prodi : </label>
                <input type="text" class="form-control" name="prodi" value="{{$p->prodi}}"> 
            </div>

            <div class="form-group">
                <label> No.Hp : </label>
                <input type="text" class="form-control" name="nohp" value="{{$p->nohp}}"> 
            </div>

            <div class="form-group">
                <label> Semester : </label>
                <input type="text" class="form-control" name="semester" value="{{$p->semester}}"> 
            </div>
            <center>
            <button type="submit" class="btn btn-primary" value="simpan">update</button>
            </center>
            <br>
    </form>
        @endforeach
    </table>
</div>
@endsection

