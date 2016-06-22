@extends('layouts.app')

@section('content')

<div class="row">
    <div class="panel-body">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                @section('panelHeading')
                    Search
                @endsection

                <div class="panel-body">
                {!!Form::open(['route' => 'product.index', 'method' => 'GET', 'class' => '', 'role' => 'search'])!!}
                    
                        <div class="input-group">
                            {!!Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...'])!!}                        
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
