<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
    <link rel="stylesheet" href="{{url('/css/signup.css')}}"/>
</head>
<body>
    <div class="container">
        <div class="login">
          <form action="/submit/signup" method="post">
                @csrf
                <h1>Welcome to EcoTrack</h1>
                <hr/>
                {{-- <label for="first_name">First Name</label>
                <input type="text" name="firstname" placeholder="First name" required> --}}
                <label for="username"> Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your Email" required>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit"><span>Sign Up</span></button>
                <button><span><a href="login">Log in</a></span></button>
            </form>
        </div>
        <div class="pic">
            <img src="{{url('/image/carrot.png')}}" alt="">
        </div>
    </div>
</body>
</html>

