@extends('admin.layouts.index')


@section('title')
    @parent
    Chi tiết sản phẩm
@endsection


@push('styles')
    <style>
        .img-product{
            width: 300px;
            object-fit: cover;
        }
    </style>
    
@endpush

@section('content')

<div class="d-flex">
        
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-5 w-100">
                    <div class="d-flex justify-content-between mb-10 w-100">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">
                                Chi tiết sản phẩm
                            </span>
                        </h3>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                            <div class="table-responsive">
                                <p>
                                    Tên sản phẩm: 
                                    <span class="font-weight-bold">{{ $product->name }}</span>
                                </p>
                                <p>
                                    Giá sản phẩm: 
                                    <span class="font-weight-bold">{{ $product->price }}</span>
                                </p>
                                <p>
                                    Ảnh sản phẩm: 
                                    <br>
                                    <img src="{{ asset($product->image) }}" class="img-product" alt="File bị lỗi">
                                </p>
                                <p>
                                    Mô tả sản phẩm: 
                                    <span class="font-weight-bold">{{ $product->description }}</span>
                                </p>
                                <p>
                                    Danh mục sản phẩm: 
                                    <span class="font-weight-bold" value="">{{ $product->category_id }}</span>
                                </p>
                                <p>
                                    Số lượng sản phẩm: 
                                    <span class="font-weight-bold">{{ $product->quantity }}</span>
                                </p>
                                <a href="{{ route('admin.products.listProduct') }}" class="btn btn-primary mt-3">Quay lại</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush