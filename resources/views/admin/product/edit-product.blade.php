@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Product Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <form action="{{route('update-product-info')}}" method="post" class="form-horizontal"
                          enctype="multipart/form-data" name="editProductForm">
                        @csrf
                        <div class="form-group row">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('category_id') ? $errors -> first('category_id') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <select class="form-control" name="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('brand_id') ? $errors -> first('brand_id') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" value="{{$product -> product_name}}" name="product_name"
                                       class="form-control"/>
                                <input type="hidden" value="{{$product -> id}}" name="product_id"
                                       class="form-control"/>
                                <span class="text-danger">{{$errors->has('product_name') ? $errors -> first('product_name') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="number" value="{{$product -> product_price}}" name="product_price"
                                       class="form-control"/>
                                <span class="text-danger">{{$errors->has('product_price') ? $errors -> first('product_price') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Product Quantity</label>
                            <div class="col-md-8">
                                <input type="number" value="{{$product -> product_qantity}}" name="product_qantity"
                                       class="form-control"/>
                                <span class="text-danger">{{$errors->has('product_qantity') ? $errors -> first('product_qantity') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea class="form-control"
                                          name="short_description">{{$product -> short_description}}</textarea>
                                <span class="text-danger">{{$errors->has('short_description') ? $errors -> first('short_description') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="long_description"
                                          id="editor">{{$product -> long_description}}</textarea>
                                <span class="text-danger">{{$errors->has('long_description') ? $errors -> first('long_description') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="product_image" accept="image/*"/>
                                <span class="text-danger">{{$errors->has('product_image') ? $errors -> first('product_image') : ' '}}</span>
                                <img src="{{asset($product -> product_image)}}" alt="image" width="100" height="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label><input type="radio" {{$product -> publication_status === 1 ? 'checked' : ''}} name="publication_status"
                                              value="1"/>Published</label>
                                <label><input type="radio" {{$product -> publication_status === 0 ? 'checked' : ''}} name="publication_status" value="0"/>Unpublished</label>
                                <br/>
                                <span class="text-danger">{{$errors->has('publication_status') ? $errors -> first('publication_status') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block"
                                       value="Update Product Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editProductForm'].elements['category_id'].value = '{{$product -> category_id}}'
        document.forms['editProductForm'].elements['brand_id'].value = '{{$product -> brand_id}}'
    </script>
@endsection