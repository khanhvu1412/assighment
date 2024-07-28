@extends('admin.layouts.index')

@section('titles')
    @parent
    Chỉnh sửa sản phẩm
@endsection

@push('styles')
    <style>
        .img-product{
            width: 200px;
            height: 100px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')

<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="col-xl-12 mb-5 mb-xl-10">
        <div class="card card-flush h-xl-100">
            <div class="ps-12 pt-5 pe-12">
                <form action="{{ route('admin.products.updatePatchProduct', $product->id) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="nameSP">Tên sản phẩm</label>
                        <input type="text" name="nameSP" id="nameSP" class="form-control mt-3" value="{{ $product->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="category">Danh mục</label>
                        <select name="category" id="category" class="form-control mt-3">
                            @foreach ($category as $value)
                                @if ($value->id==$product->category_id)
                                    <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                @else
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="priceSP">Giá sản phẩm</label>
                        <input type="text" name="priceSP" id="priceSP" class="form-control mt-3" value="{{ $product->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="imageSP">Ảnh sản phẩm</label>
                        <br>
                        <img src="{{ asset($product->image) }}" alt="" class="img-product">
                        <input type="file" name="imageSP" id="imageSP" class="form-control mt-3">
                    </div>
                    <div class="mb-3">
                        <label for="descriptionSP">Mô tả</label>
                        <textarea name="descriptionSP" id="descriptionSP" class="form-control" cols="30" rows="5" value="">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Số lượng</label>
                        <input type="text" name="quantitySP" id="quantitySP" class="form-control mt-3" value="{{ $product->quantity }}"> 
                    </div>
                    <button class="btn btn-success mt-3 mb-5">Chỉnh sửa</button>
                    <a href="{{ route('admin.products.listProduct') }}" class="btn btn-primary mt-3 mb-5">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    
@endpush
