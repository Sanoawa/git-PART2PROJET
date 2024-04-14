<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="inscri.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="co_inscrire.php" method="post">
            <h1>inscription</h1>
            <div class="input-box">
                <input type="text" placeholder="nom" name="nom" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="prenoms" name="prenom" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="email" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="mot de pass" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remenber me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" onclick="window.location.href='ins.php'">C'est parti!</button>


            <!-- <li><a href="acceuille.html"></a><a href="offres.html">offres</a></li>-->

            <!--div class="register-link">
                <p>don't have an account?<a href="connecter.php">Register</a></p-->
            </div>
        </form>
    </div>
</div>
<script src="re.js"></script>
</body>
</html>


          