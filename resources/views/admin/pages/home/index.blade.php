@extends('admin.master')
@section('content')

    <h3 class="mb-4">Banner</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif

    <a href="{{ route('home.create') }}" class="btn btn-primary float-end" ><i class="fa fa-plus"></i>Add Banner</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover" width= "100%">
        <thead>
            <tr>
                <th width="5%" scope="col">#</th>
                <th width="40%" scope="col">Image</th>
                <th width="40%" scope="col">Name</th>
                <th width="15%" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($homes as $key => $home)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td><img src="{{ Storage::url($home->image)}}" width="80"></td>
                    <td>{{ $home->name }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('home.edit', $home->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('home.delete', $home->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $homes->links() }}

@endsection
