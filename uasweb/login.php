<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login Pegawai</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="left">
        <img src="saa.jpg" alt="Barista">
    </div>

    <div class="right">

        <div class="login-box">

            <h1>Menu Pegawai</h1>

            <p>
                Masukkan username dan password untuk masuk ke sistem pegawai
            </p>

            <form action="proses_login.php" method="POST">

                <div class="form-group">
                    <label>Username</label>
                    <input
                        type="text"
                        name="username"
                        placeholder="Masukkan Username"
                        required>
                </div>

                <div class="form-group">
    <label>Password</label>

    <div class="password-box">
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Masukkan Password"
            required>

        <span class="eye" onclick="togglePassword()">
            👁️
        </span>
    </div>
</div>

                <button type="submit" class="btn-login">
                    Submit
                </button>

            </form>

            <div class="forgot">
                <div class="line"></div>
                <a href="#">Lupa Password</a>
            </div>

        </div>

    </div>

</div>

</body>
</html>