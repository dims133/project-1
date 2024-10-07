<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>

    <?php if(auth()->guard()->check()): ?>
        <p>Welcome, <?php echo e(Auth::user()->name); ?>!</p>
        <a href="<?php echo e(url('/dashboard')); ?>">Go to Dashboard</a>
    <?php else: ?>
        <p>Welcome, Guest!</p>
        <a href="<?php echo e(url('/login')); ?>">Login</a> | 
        <a href="<?php echo e(url('/register')); ?>">Register</a>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /mnt/d/project-1/frontend-app/resources/views/welcome.blade.php ENDPATH**/ ?>