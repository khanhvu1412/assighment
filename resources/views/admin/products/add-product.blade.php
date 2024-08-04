@extends('admin.layouts.index')

@section('titles')
    @parent
    Thêm mới sản phẩm
@endsection

@push('styles')

@endpush

@section('content')

<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="col-xl-12 mb-5 mb-xl-10">
        <div class="card card-flush h-xl-100">
            <div class="ps-12 pt-5 pe-12">
                <form action="{{ route('admin.products.addPostProduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nameSP">Tên sản phẩm</label>
                        <input type="text" name="nameSP" id="nameSP" class="form-control mt-3">
                    </div>
                    <div class="mb-3">
                        <label for="category">Danh mục</label>
                        <select name="category" id="category" class="form-control mt-3">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="priceSP">Giá sản phẩm</label>
                        <input type="text" name="priceSP" id="priceSP" class="form-control mt-3">
                    </div>
                    <div class="mb-3">
                        <label for="imageSP">Ảnh sản phẩm</label>
                        <input type="file" name="imageSP" id="imageSP" class="form-control mt-3">
                    </div>
                    <div class="mb-3">
                        <label for="descriptionSP">Mô tả</label>
                        <textarea name="descriptionSP" id="descriptionSP" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Số lượng</label>
                        <input type="text" name="quantitySP" id="quantitySP" class="form-control mt-3">
                    </div>
                    <button class="btn btn-success mt-3 mb-5">Thêm mới</button>
                    <a href="{{ route('admin.products.listProduct') }}" class="btn btn-primary mt-3 mb-5">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush