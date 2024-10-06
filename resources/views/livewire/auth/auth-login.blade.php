<div class="login-container">
    <div class="logo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKOwq_nPU4k1w9jnUJcXHb9m6rUkezIKZjLA&s" alt="Logo" />
    </div>
    <h2>Login</h2>
    <form action="#" method="post">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn login-btn">Log In</button>
    </form>
    <p class="link">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
</div>
