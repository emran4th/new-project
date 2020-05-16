@extends('user.master')
@section('page_title')
    <div class="title_left">
        <h3>All Category</h3>
    </div>

@endsection

@section('page_container')
    <div class="table table-responsive">

        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Number</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Category Name</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Slug Name</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Created_at</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Action</th>
            </tr>
            </thead>



            @foreach($category as $row)

            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->slug }}</td>
                <td>{{ $row->created_at }}</td>

                <td>
                    <a class="btn btn-sm btn-info" href="">Edit</a>
                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                    <a class="btn btn-sm btn-success" href="{{ URL ('view/category/'.$row->id) }}">View</a>
                </td>

            </tr>
            @endforeach

        </table>

    </div>





@endsection