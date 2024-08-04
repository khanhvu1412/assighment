@extends('admin.layouts.index')

@section('titles')
    @parent
    Thêm mới danh mục
@endsection

@push('styles')

@endpush

@section('content')

<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="col-xl-12 mb-5 mb-xl-10">
        <div class="card card-flush h-xl-100">
            <div class="ps-12 pt-5 pe-12">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nameDM">Tên danh mục</label>
                        <input type="text" name="nameDM" id="nameDM" class="form-control mt-3">
                    </div>
                    <button class="btn btn-success mt-3 mb-5">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush