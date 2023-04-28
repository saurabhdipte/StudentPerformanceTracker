@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card p-4 mt-4">
    <form action="/upload-course" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><h1>Upload Course Certificate</h1></label>
            <input type="file" name="profile-course" class="form-control" />
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
  </div>
</div>

<!-- <div>
  <label for="formFileLg" class="form-label">Large file input example</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
  <button></button>
</div> -->

<br><br><br><br>

<div class="card text-center">
  <div class="card p-4 mt-4">
    <form action="/upload-internship" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><h1>Upload Internship Certificate</h1></label>
            <input type="file" name="profile-internship" class="form-control" />
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
  </div>
</div>
@endsection