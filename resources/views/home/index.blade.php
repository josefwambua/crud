<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basics review</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <label class="logo">Blog</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
                        {{-- check logged in users  --}}
            @if (Route::has('login'))
            @auth
                <li><a href="" class='btn btn-info'>{{Auth::user()->name}}</a></li>
            
                @else
                <li><a href="{{ route('login') }}" class='btn btn-primary'>Login</a></li>
                <li><a href="{{ route('register') }}" class="btn btn-success">Register</a></li>
            @endauth
            @endif
        </ul>
    </nav>
</body>

{{-- Fetching data from the database using foreach loop --}}
@foreach ($post as $post)
<div class="container">
    <h1>{{$post->username}}</h1>
    <img src="post/{{$post->image}}" alt="Award Image">
    <p class="description">{{$post->description}}</p>
    <div class="award-badge">Winner - 2025 Excellence Prize</div>
</div>
@endforeach

</html>
