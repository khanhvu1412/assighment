@extends('admin.layouts.index')

@section('title')
    @parent
    Chỉnh sưaar người dùng
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="d-flex">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-5 w-100">
                    @if (session('message'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-between mb-10 w-100">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">
                                Chỉnh sửa user
                            </span>
                        </h3>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                            <div class="table-responsive">
                                <form action="{{ route('admin.users.updatePatchUsers', $user->id ) }}" method="post">
                                    @method('patch')
                                    @csrf
                                    <div>
                                        <label for="name">Tên người dùng</label>
                                        <input type="text" name="name" id="name" class="form-control mt-3 mb-2" value="{{ $user->name }}">
                                    </div>
                                    <div>
                                        <label for="role">Role</label>
                                        <select name="role" id="role" class="form-control mt-3 mb-2">
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                        {{-- <input type="text" name="name" id="name" class="form-control mt-3 mb-2" value="{{ $user->name }}"> --}}
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-success">Chỉnh sửa</button>
                                        <a href="{{ route('admin.users.listUsers') }}" class="btn btn-primary">Quay lại</a>
                                    </div>
                                    
                                </form>
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