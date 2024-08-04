@extends('admin.layouts.index')


@section('title')
    @parent
    Danh sách sản phẩm
@endsection

@push('styles')
    <style>
        .img-product{
            width: 100px;
            height: 150px;
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
                    @if(session('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between mb-10 w-100">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">
                                Danh sách sản phẩm
                            </span>
                        </h3>
                        <a href="{{ route('admin.products.addProduct') }}" 
                        class="btn btn-sm fw-bold btn-success" >Thêm mới</a>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                            <div class="table-responsive">
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 pb-3 text-center">
                                                STT
                                            </th>
                                            <th class="p-0 pb-3 text-center pe-13">
                                                Name
                                            </th>
                                            <th class="p-0 pb-3 text-center pe-7">
                                                Price
                                            </th>
                                            <th class="p-0 pb-3 w-200px text-center pe-7">
                                                Description
                                            </th>
                                            <th class="p-0 pb-3 w-200px text-center pe-7">
                                                Image
                                            </th>
                                            <th class="p-0 pb-3 text-center pe-7">
                                                Quantity
                                            </th>
                                            <th class="p-0 pb-3 text-center pe-7">
                                                Category
                                            </th>
                                            <th class="p-0 pb-3 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($listProduct as $key => $value)
                                                <tr class="text-center">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->price}}</td>
                                                    <td>{{ $value->description}}</td>
                                                    <td><img src="{{ asset($value->image) }}" class="img-product" alt="Ảnh không hiển thị"></td>
                                                    <td>{{ $value->quantity}}</td>
                                                    <td>{{ $value->category_name}}</td>
                                                    <td>
                                                        <a href="{{ route('admin.products.detailProduct', $value->id) }}" class="btn btn-primary">Chi tiết</a>
                                                        <a href="{{ route('admin.products.updateProduct', $value->id) }}" class="btn btn-warning">Sửa</a>
                                                        <button class="btn btn-danger" data-bs-toggle="modal" 
                                                        data-bs-target="#deleteModal" data-bs-id="{{ $value->id }}">Xóa</button>
                                                        {{-- <a href="{{ route('admin.products.deleteProduct', $value->id) }}" class="btn btn-danger" 
                                                            onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')">Xóa</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                {{$listProduct->links('pagination::bootstrap-5')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Cảnh báo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post" id="formDelete">
            @method('delete')
            @csrf
            <div class="modal-body">
                <p class="text-danger">Bạn có muốn xóa không?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-danger">Xác nhận xóa</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        var exampleModal = document.getElementById('deleteModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var id = button.getAttribute('data-bs-id')

            // console.log(id);

            let formDelete = document.getElementById('formDelete')
            formDelete.setAttribute('action', '{{ route("admin.products.deleteProduct") }}' + "?idproduct=" + id)
            
        })
    </script>
@endpush