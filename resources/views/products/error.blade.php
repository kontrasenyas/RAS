@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @section('panelHeading')
                    Post your Product
                @endsection

                <div class="panel-body">
                    <h1>Please login to add your post</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection