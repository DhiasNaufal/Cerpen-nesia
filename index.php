<?php

    require "auth.php";

    if (isset($_SESSION["email"])) {
        header("Location: /ppl-app/dashboard.php");
    }

?>

<html>
<head>
    <title>Cerpen-nesia | Home</title>

    <?php include "basic-head.php"; ?>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="title-wrapper">
        <h1 class="title-main">Cerpen-nesia</h1>
        <span class="title-subtitle">Tunjukkan cerpen buatanmu!</span>
    </div>

    <?php if(isset($_GET["login"])) { // login form, if parameter passed ?>
        <form action="" method="POST" class="form">
            <h2 class="mg-0"> Login </h2>

            <?php if (count($errors) > 0) { ?>
                <div class="input-wrapper alert-wrapper">
                    <?php foreach ($errors as $errorMsg) { ?>
                        <p class="alert-message mg-0"><?= $errorMsg ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
            
            <label class="input-wrapper" id="emailWrapper">
                <span class="input-label">Email</span>
                <input type="email" name="email" class="input-field" >
            </label>

            <label class="input-wrapper">
                <span class="input-label">Password</span>
                <input type="password" name="password" pattern="^[0-9a-zA-Z]*$" minlength="8" maxlength="20" class="input-field" >
            </label>
                
            <button type="submit" name="login_form" class="button action-button">Login</button>
            
            <div class="input-wrapper">
                <p class="desc form-switch">Belum daftar? <a href="index.php">Daftar dulu dong</a></p> 
            </div>
        </form>
    
    <?php
    } else { // register form, default state ?> 

        <p class="desc mg-0">Ikuti Cerpen-nesia dan menangkan uang tunai!</p>

        <form action="" method="POST" class="form">
            <h2 class="mg-0"> Daftarkan dirimu sekarang! </h2>
            
            <?php if (count($errors) > 0) { ?>
                <div class="input-wrapper alert-wrapper">
                    <?php foreach ($errors as $errorMsg) { ?>
                        <p class="alert-message mg-0"><?= $errorMsg ?></p>
                    <?php } ?>
                </div>
            <?php } ?>

            <label class="input-wrapper" id="emailWrapper">
                <span class="input-label">Email</span>
                <input type="email" name="email" class="input-field" required>
            </label>

            <label class="input-wrapper" id="namaWrapper">
                <span class="input-label">Nama</span>
                <input type="text" name="nama" class="input-field" required>
            </label>

            <label class="input-wrapper">
                <span class="input-label">Asal sekolah/institusi</span>
                <input type="text" name="asal" class="input-field" required>
            </label>        
        
            <div class="input-wrapper">
                <label class="input-wrapper password-field-wrapper">
                    <span class="input-label">Password</span>
                    <input type="password" name="password1" pattern="^[0-9a-zA-Z]*$" minlength="8" maxlength="20" class="input-field" required aria-describedby="password-help-block">
                </label>
        
                <p class="input-description" id="password-help-block">
                    Password harus terdiri atas 8-20 karakter tanpa mengandung spasi, karakter khusus, atau emoji.
                </p>
            </div>
        
            <div class="input-wrapper">
                <label class="input-wrapper password-field-wrapper">
                    <span class="input-label">Konfirmasi password</span>
                    <input type="password" name="password2" pattern="^[0-9a-zA-Z]*$" minlength="8" maxlength="20" class="input-field" required aria-describedby="confirm-password-help-block">
                </label>
        
                <p class="input-description" id="confirm-password-help-block">
                    Masukkan kembali password yang sama.
                </p>
            </div>
                
            <button type="submit" name="register_form" class="button action-button">Sign Up</button>

            <div class="input-wrapper">
                <p class="desc form-switch">Sudah mendaftar? <a href="index.php?login">Masuk sini</a></p> 
            </div>
        </form>
    <?php } ?>
    
</body>
</html>