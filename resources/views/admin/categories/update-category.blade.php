@extends('admin.layouts.index')

@section('titles')
    @parent
    Chỉnh sửa danh mục
@endsection

@push('styles')

@endpush

@section('content')

<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="col-xl-12 mb-5 mb-xl-10">
        <div class="card card-flush h-xl-100">
            <div class="ps-12 pt-5 pe-12">
                <form action="{{ route('admin.categories.updatePatchCategory', $category->id) }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="nameDM">Tên danh mục</label>
                        <input type="text" name="nameDM" id="nameDM" class="form-control mt-3" value="{{ $category->name }}">
                        @error('nameDM')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-success mt-3 mb-5">Cập nhật</button>
                    <a href="{{ route('admin.categories.listCategory') }}" class="btn btn-primary mt-3 mb-5" >Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush