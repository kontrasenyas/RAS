@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @section('panelHeading')
                    Product
                @endsection
                <div class="panel-body center-block text-center">
                    <a href="{{ url('product/create') }}">Post your Car</a>
                </div>
                <div class="panel-body">
                    @foreach($product as $product)
                        <div class="form-group col-md-12">
                            <a href="{{ url('product', $product->id) }}">                   
                                <img src="/uploads/productPhoto/{{ $product->Photo1 }}" style="width:50px; height:50px; border-radius:50%">
                                    {{$product->Title}} - {{$product->Capacity}}
                            </a><br/>
                            <i>{{$product->DateCreated}}</i>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection