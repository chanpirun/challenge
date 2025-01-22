<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="{{ url('/css/login.css') }}" />
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="/submit/login" method="post">
                @csrf
                <h1>Welcome to EcoTrack</h1>
                <hr />
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your email" required>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
                <button type="submit"><span>Log in</span></button>
            </form>
        </div>
        <div class="pic">
            <img src="{{ url('/image/carrot.png') }}" alt="">
        </div>
    </div>
</body>

</html>
