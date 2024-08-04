@extends('admin.layouts.index')

@section('title')
    @parent
    Chi tiết User
@endsection

@push('styles')
    
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
                                Chi tiết User
                            </span>
                        </h3>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                            <div class="table-responsive">
                                    <div>
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control mt-3 mb-2" value="{{ $user->name }}" disabled>
                                    </div>
                                    <div>
                                        <label for="email">Email </label>
                                        <input type="email" name="email" id="email" class="form-control mt-3 mb-2" value="{{ $user->email }}" disabled>
                                    </div>
                                    <div>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control mt-3 mb-2" value="{{ $user->password }}" disabled>
                                    </div>
                                    <div>
                                        <label for="role">Role</label>
                                        <input type="text" name="role" id="role" class="form-control mt-3 mb-2" value="{{ $user->role == 1 ?'Admin' : 'User' }}" disabled>
                                    </div>
                                    <a href="{{ route('admin.users.listUsers') }}" class="btn btn-primary mt-3">Quay lại</a>
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