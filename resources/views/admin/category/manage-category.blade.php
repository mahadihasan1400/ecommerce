@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="js--manage-heading">{{Session::get('message')}}</h3>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr class="bg-success">
                            <th>SL NO</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php($i = 1)
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category -> category_name}}</td>
                                <td>{{$category -> category_description}}</td>
                                <td>{{$category -> publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                        <a href="{{route('unpublished-category',['id' => $category -> id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-category',['id' => $category -> id])}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

<!--                                    --><?php
//                                    if ($category->publication_status == 1) {
//                                        echo('<a href="" class="btn btn-info btn-xs">
//                                        <span class="glyphicon glyphicon-arrow-up"></span>
//                                    </a>');
//                                    } else {
//                                        echo('<a href="" class="btn btn-warning btn-xs">
//                                        <span class="glyphicon glyphicon-arrow-down"></span>
//                                    </a>');
//                                    }
//                                    ?>

                                    <a href="{{route('edit-category',['id' => $category -> id])}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-category-info',['id' => $category -> id])}}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection