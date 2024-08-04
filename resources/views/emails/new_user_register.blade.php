<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Thành Công</title>
</head>
<body>
    {{-- optional($user) --}}
    <h1>Xin Chào {{ $user->name }},</h1>
    <p>Cảm ơn bạn đã đăng ký tài khoản với chúng tôi!</p>
    <p>Bạn có thể đăng nhập vào tài khoản của mình tại: <a href="{{ route('login') }}">Đăng Nhập</a></p>
    <p>Chúc bạn có trải nghiệm tốt!</p>
</body>
</html>