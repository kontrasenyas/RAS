@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @section('panelHeading')
                    Product
                @endsection

                <div class="panel-body">
                    <div class="col-md-12">
                        <div>
                            <button class="btn btn-primary" href="" data-toggle="modal" data-target="#BookCar">Book this Car!</button>
                        </div>
                        <div id="BookCar" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Book this Car</h4>
                                    </div>
                                    <div class="modal-body">
                                        {!!Form::open(['route' => 'product.store'])!!}
                                            <div class="form-group">       
                                                {!!Form::label('ContactName', 'Contact Name', array('class' => 'control-label'))!!}
                                                <div class="{{ $errors->has('ContactName') ? ' has-error' : '' }}">
                                                    {!!Form::text('ContactName', null, 
                                                                ['class' => "form-control",
                                                                'placeholder' => "Input your Full Name"])!!}
                                                    @if ($errors->has('ContactName'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ContactName') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group"> 
                                                {!!Form::label('ContactNo', 'Contact Number', array('class' => 'control-label'))!!}
                                                <div class="{{ $errors->has('ContactNo') ? ' has-error' : '' }}">
                                                    {!!Form::text('ContactNo', null, 
                                                                ['class' => "form-control",
                                                                'placeholder' => "Input your Contact Number"])!!}
                                                    @if ($errors->has('ContactNo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ContactNo') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            {!!Form::submit('Send', ['class' => "btn btn-primary"])!!}
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="/uploads/productPhoto/{{ $product->Photo1 }}" style="width:150px; height:150px;" class="center-block">
                        </div>
                        <div class="text-center control-label">
                            <i>Title of your post: </i>{{$product->Title}}
                        </div>
                        <div class="text-center">
                            <i>Location: </i>{{$product->Province}}
                        </div>
                        <div class="text-center">
                            <i>Capacity: </i>{{$product->Capacity}}
                        </div>
                        <div class="text-center">                
                            <i>Car Type: </i>{{$product->ProductType}}
                        </div>
                        <div class="text-center">                
                            <i>Brand: </i>{{$product->Brand}}
                        </div>
                        <div class="text-center">                
                            <i>Price of your Service: </i>Php {{$product->Price}}
                        </div>
                        <div class="text-center">                
                            <i>Additional Details: </i>{{$product->Details}}
                        </div>      
                        <div class="text-center">                
                            <i>Views: </i>100
                        </div>              
                    </div>
                    @if (Auth::user())
                        <div class="panel-body">
                            <div class="text-center">
                                <a href="{{route('product.edit', $product->id)}}" class="btn">Edit your Post</a>
                            </div>
                            <div class="text-center">
                                {!!Form::open([
                                    'method'=>'delete',
                                    'route'=>['product.destroy', $product->id]
                                    ])!!}                
                                    {!!Form::submit('Delete')!!}
                                {!!Form::close()!!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection