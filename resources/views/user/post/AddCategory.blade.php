@extends('user.master')
@section('page_title')
    <div class="title_left">
        <h3>Add Category</h3>
    </div>
@endsection


@section('page_container')
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            {{--@if(Session()->has('notif'))--}}

                {{--<div class="alert alert-success" role="alert">--}}
                    {{--{{ Session()->get('notif') }}--}}
                {{--</div>--}}

            {{--@endif--}}
            @if(Session::has('message'))
                <script>
                    swal(Session::has('message'));
                </script>
            @endif


            <div class="x_panel">

                <div class="x_content">



                    <br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('StoreCategory')}}" method="post" id="demo-form2"  data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="catname" id="first-name" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug Name <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="slugname" id="first-name" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Add Category</button>

                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection