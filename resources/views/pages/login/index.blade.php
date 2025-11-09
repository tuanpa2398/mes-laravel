@extends('layouts.login')
@section('title', 'Đăng nhập')

@section('content')
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center gap-4">
        <div>
            <a class="" href="javascript:void(0)">
                <img class="" src="{{ asset('assets/images/WLorigin.svg') }}" alt="logo"
                    style="width: 80px; height: 80px;" />
            </a>
        </div>

        <div class="bg-white w-100" style="padding: 28px; border-radius: 12px; max-width: 450px;">
            <div class="d-flex flex-column gap-4">
                <div class="">
                    <h1 class="fw-bold" style="font-size: 36px;line-height: 40px">Đăng nhập</h1>
                    <span class="text-secondary">Vui lòng đăng nhập để sử dụng.</span>
                </div>
                <form action="/login" class="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label fw-medium">Mã nhân viên</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nhập mã nhân viên" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-medium">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="••••••••" />
                    </div>
                    <button type="submit" class="w-100 text-white rounded-3 py-2 fw-medium"
                        style="background: #17506B;border:#17506B">
                        Đăng nhập
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection