<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
    <img src="<?php echo base_url('uploads/img/profile.jpg'); ?>" class="avatar" alt="User Avatar">
  <h2>Create Here</h2>
        <form action="<?= base_url('/') ?>" method="post">
        <label for="username">Username</label>
         <input type="text" name="username" required>

         <label for="password">Password</label> 
         <input type="password" name="password" required>   

    <button type="submit">Create</button>
    <div class="links">
            <a href="/login">Login Account</a>
        </div>
</form>

    </div>
</body>
</html>

<style>
    /* Mengatur background */
body {
    background: url('uploads/img/nike.jpg') no-repeat center center fixed;
    background-size: cover;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container untuk form login */
.login-container {
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    width: 300px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    position: relative;
}

/* Gambar avatar di atas form */
.avatar {
    width: 70px;
    border-radius: 50%;
    position: absolute;
    top: -35px;
    left: 50%;
    transform: translateX(-50%);
    background: white;
    padding: 5px;
}

/* Label input */
label {
    display: block;
    text-align: left;
    margin-top: 10px;
    font-size: 14px;
}

/* Input field */
input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: none;
    border-radius: 5px;
}

/* Tombol login */
button {
    width: 100%;
    padding: 10px;
    margin-top: 15px;
    background: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

/* Link tambahan */
.links {
    margin-top: 10px;
}

.links a {
    color: white;
    text-decoration: none;
    font-size: 12px;
    display: block;
}

.links a:hover {
    text-decoration: underline;
}

</style>
