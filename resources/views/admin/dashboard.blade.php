@extends('admin.layouts.index')

@section('title')
    @parent
   Dashboard
@endsection

@push('styles')
    
@endpush

@section('content')

<div class="d-flex">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="col-xl-12 mb-5 mb-xl-10">

            @if (session('message'))
                <div class="alert alert-primary" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <h1>Dashboard</h1>

        </div>
    </div>
</div>
    
@endsection

@push('scripts')
    
@endpush