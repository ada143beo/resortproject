<div class="register-container">
    <div class="logo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKOwq_nPU4k1w9jnUJcXHb9m6rUkezIKZjLA&s" alt="Logo" />
    </div>
    <h2>Register</h2>
    <form action="#" method="post">
        <div class="input-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="input-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn register-btn">Register</button>
    </form>
    <p class="link">Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
</div>
