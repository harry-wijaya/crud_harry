@extends('template')

@section('title')
    Our Project
@endsection


@section('content')
<div class="content" style="text-align:justify;">
    <h2 style="text-align:center;">Our Project</h2>
    <h4 style="text-align:center;">Tabel User</h4>
    
    <form action="/tampilan/store" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <div class="form-group">
                <label> Nama : </label>
                <input type="text" class="form-control" name="nama"> 
            </div>

            <div class="form-group">
                <label> Prodi : </label>
                <input type="text" class="form-control" name="prodi"> 
            </div>

            <div class="form-group">
                <label> No.Hp : </label>
                <input type="text" class="form-control" name="nohp"> 
            </div>

            <div class="form-group">
                <label> Semester : </label>
                <input type="text" class="form-control" name="semester"> 
            </div>
            <center>
            <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
            </center>
            <br>
    </form>
</div>
@endsection

