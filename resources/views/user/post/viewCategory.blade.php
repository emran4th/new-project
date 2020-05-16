@extends('user.master')
@section('page_title')
    <div class="title_left">
        <h3>View Category</h3>
    </div>
@endsection

@section('page_container')
    <div class="x_content">

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Category Name </th>
                <th>Slug Name</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $emran->id }}</td>
                <td>{{ $emran->name }}</td>
                <td>{{ $emran->slug }}</td>
                <td>{{ $emran->created_at }}</td>
                <td>{{ $emran->updated_at }}</td>
            </tr>

            </tbody>
        </table>

    </div>

@endsection