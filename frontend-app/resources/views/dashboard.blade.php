<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>You are logged in as: {{ Auth::user()->role }}</p>
    @if(Auth::user()->role == 'admin')
        <a href="{{ url('/admin') }}">Admin Panel</a>
    @else
        <p>Welcome, regular user!</p>
    @endif
</body>
</html>
