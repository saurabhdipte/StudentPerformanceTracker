@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Certificate</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                            {{$kape=$image->id}}
                            <tr>
                                <th scope="row">{{$kape}}</th>
                                <td><img src="{{asset('storage/courses/'.$image->name)}}" class="img-thumbnail"></td>
                                <td><a href="{{route('viewmarks')}}" class="btn btn-info btn-sm">Approve</a></td>
                                <td><a href="{{url('/mentor/home/delete',$image->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection