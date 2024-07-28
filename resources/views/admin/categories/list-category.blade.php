@extends('admin.layouts.index')

@section('title')
    @parent
    Danh sách danh mục
@endsection

@section('content')
<div class="d-flex">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-5 w-100">
                    <div class="d-flex justify-content-between mb-10 w-100">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">
                                Danh sách danh mục
                            </span>
                        </h3>
                        <a href="{{ route('admin.categories.addCategory') }}" 
                        class="btn btn-sm fw-bold btn-success">Thêm mới</a>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                            <div class="table-responsive">
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 text-center pb-3 ">
                                                STT
                                            </th>
                                            <th class="p-0 pb-3 text-center pe-13">
                                                Name
                                            </th>
                                            <th class="p-0 pb-3 text-center">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $key => $value)
                                                <tr class="text-center">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary">Chi tiết</a>
                                                        <button class="btn btn-warning">Sửa</button>
                                                        <button class="btn btn-danger">Xóa</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection