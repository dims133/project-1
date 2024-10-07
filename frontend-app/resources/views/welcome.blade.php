<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>

    @auth
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <a href="{{ url('/dashboard') }}">Go to Dashboard</a>
    @else
        <p>Welcome, Guest!</p>
        <a href="{{ url('/login') }}">Login</a> | 
        <a href="{{ url('/register') }}">Register</a>
    @endauth
</body>
</html>
