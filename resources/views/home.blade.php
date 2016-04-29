@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (Auth::check())
            <div class="panel panel-default">
                <div class="panel-heading">
                <div class="panel-title">You are logged in!</div>
                </div>

                <div class="panel-body">
                    <div style="width:100%;">
                        <img src="http://reactiongifs.me/wp-content/uploads/2013/10/i-wingman-successfully-leonardo-dicaprio.gif" style="display:block; margin:auto;">
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
