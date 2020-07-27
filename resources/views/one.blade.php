@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">One view</div>

                    <div class="card-body">
                       ID  {{ $id }} хешируется в {{ $hash }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
