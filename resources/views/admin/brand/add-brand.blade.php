@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Brand Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    {{Form::open(['route'=>'save-brand-info', 'method'=>'POST', 'class'=>'form-horizontal'])}}

                    <div class="form-group">
                        {{Form::label('brand_name','Brand Name',['class'=>'col-md-3'])}}
                        <div class="col-md-9">
                            {{Form::text('brand_name','',['class' => 'form-control'])}}
                            <span class="text-danger">{{$errors->has('brand_name') ? $errors -> first('brand_name') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('brand_description','Brand Description',['class'=>'col-md-3'])}}
                        <div class="col-md-9">
                            {{Form::textarea('brand_description','',['class' => 'form-control'])}}
                            <span class="text-danger">{{$errors->has('brand_description') ? $errors -> first('brand_description') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('','Publication Status',['class'=>'col-md-3'])}}
                        <div class="col-md-9">
                            {{Form::radio('publication_status', '1')}}Published
                            {{Form::radio('publication_status', '0')}}Unpublished
                            <br/>
                            <span class="text-danger">{{$errors->has('publication_status') ? $errors -> first('publication_status') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('','',['class'=>'col-md-3'])}}
                        <div class="col-md-9">
                            {{Form::submit('Add Brand info',['class'=>'btn btn-block btn-success'])}}
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection