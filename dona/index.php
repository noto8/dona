<?php
    $base_path = 'C:\xampp\htdocs\\';
    function autoloader(string $class_name){require_once 'modules\classes\\'.$class_name.'.php';}
    spl_autoload_register('autoloader');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="icon" href="style/images/0">
    <link rel="stylesheet" href="style/style/style.css?v=<?php echo time();?>">
</head>

<body>



    <header>
        <div class="wrapper">
            <button class="min"><a href="">About</a></button>
            <a href="index.php" class="logo">
                <div class="icon"></div>
                <div>dona</div>
            </a>
            <button class="min"><a href="">Login</a></button>
        </div>
    </header>

<div class="wrapper">
    <main>
        <section class="hero">
            <h1><span>A more humane</span> to-do list</h1>
            <p>Dona is back-to basic to-do list focused on fast and delightful user experience.</p>
            <button><img src="style/images/play.svg" alt="">Whatch video</button>
            <button class="secondary"><a href="">Early access</a></button>
        </section>
        <section>
            <img src="style/images/Program interface.svg" alt="">
        </section>
        <section>
            <img src="style/images/feature.svg" alt="">
            <div>
                <img src="style/images/feature (1).svg" alt="">
                <img src="style/images/feature (2).svg" alt="">
            </div>
        </section>
        <section>
            <form action="" id="email-form">
                <input type="email" placeholder="Enter your email">
                <button class="black" disabled>Get early access<img src="style/images/arrow.svg" alt=""></button>
            </form>
        </section>
    </main>
</div>

<footer>
    <div class="wrapper">
        <article>
            <div>© 2022 Dona.</div>
            <div>Made by <a href="">Jakub Antalik</a> & <a href="">Aaron Iker</a></div>
            <div><a href="">Terms of Service</a> · <a href="">Privacy policy</a></div>
        </article>
        <article>
            <a href=""></a>
        </article>
    </div>
</footer>



<script src="script/script.js"></script>
</body>

</html>