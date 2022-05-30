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



<div class="bg"></div>

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

<main>
    <div class="wrapper">

        <section class="hero">
            <h1><span>A more humane</span> to-do list</h1>
            <p>Dona is back-to basic to-do list focused on fast and delightful user experience.</p>
            <button><img src="style/images/play.svg" alt="">Whatch video</button>
            <button class="secondary"><a href="">Early access</a></button>
        </section>

        <section class="interface">
            <div class="bg"></div>
            <nav>
                <ul>
                    <input type="radio" name="interface" id="Home" title="Home">
                    <label for="Home">
                        <div class="label-bg"></div>
                        <div class="icon"><img src="style/images/icons/Home_1.svg" alt=""></div>
                        Home
                        <div class="shortcut">12</div>
                    </label>
                    <input type="radio" name="interface" id="Today" title="Today">
                    <label for="Today">
                        <div class="label-bg"></div>
                        <div class="icon"><img src="style/images/icons/Today_1.svg" alt=""></div>
                        Today
                        <div class="shortcut">7</div>
                    </label>
                    <input type="radio" name="interface" id="Personal" title="Personal">
                    <label for="Personal">
                        <div class="label-bg"></div>
                        <div class="icon"><img src="style/images/icons/Personal_1.svg" alt=""></div>
                        Personal
                        <div class="shortcut">4</div>
                    </label>
                    <input type="radio" name="interface" id="Road_trip" title="Road trip">
                    <label for="Road_trip">
                        <div class="label-bg"></div>
                        <div class="icon"><img src="style/images/icons/Road_trip.svg" alt=""></div>
                        Road trip
                        <div class="shortcut">2</div>
                    </label>
                    <input type="radio" name="interface" id="House" title="House">
                    <label for="House">
                        <div class="label-bg"></div>
                        <div class="icon"><img src="style/images/icons/House.svg" alt=""></div>
                        House
                        <div class="shortcut">6</div>
                    </label>
                    <input type="radio" name="interface" id="Work" title="Work" checked>
                    <label for="Work">
                        <div class="label-bg"></div>
                        <div class="icon"><img src="style/images/icons/Work_1.svg" alt=""></div>
                        Work
                        <div class="shortcut">4</div>
                    </label>
                    <label><div class="icon"></div>Create list<div class="shortcut wide">Ctrl + L</div></label>
                </ul>
            </nav>
            <article>
                <h3><img src="style/images/icons/Work.svg" alt=""><span>Work</span></h3>
                <input type="text" placeholder="Write a new task" disabled>
                <div id="dHome">
                    <input type="checkbox" id="t1">
                    <label for="t1">
                        <div class="chb"></div>
                        <span>Book a table at Eska</span>
                        <div class="date">10 Mar</div>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                </div>
                <div id="dToday">

                </div>
                <div id="dPersonal">

                </div>
                <div id="dRoad_trip">
                    <input type="checkbox" id="t1">
                    <label for="t1">
                        <div class="chb"></div>
                        <span>Book a hotel room</span>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                    <input type="checkbox" id="t2">
                    <label for="t2">
                        <div class="chb"></div>
                        <span>Change camera</span>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                </div>
                <div id="dHouse">

                </div>
                <div id="dWork">
                    <input type="checkbox" id="t1">
                    <label for="t1">
                        <div class="chb"></div>
                        <span>Meeting with Thomas</span>
                        <div class="date">16 Mar</div>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                    <input type="checkbox" id="t2">
                    <label for="t2">
                        <div class="chb"></div>
                        <span>Send repoort to Michelle</span>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                    <input type="checkbox" id="t3">
                    <label for="t3">
                        <div class="chb"></div>
                        <span>Marketing page designs</span>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                    <input type="checkbox" id="t4">
                    <label for="t4">
                        <div class="chb"></div>
                        <span>Kick-off mobile app  project</span>
                        <div class="date">19 Mar</div>
                        <img src="style/images/icons/Work.svg" alt="">
                    </label>
                </div>
            </article>
        </section>

        <section>
            <article>
                <div class="bg"></div>
                <div>
                    <h2>Fast & delightful user experience</h2>
                    <p class="min">Dona helps you to manage your tasks and achieve your goals in intuitive and delightful way. We wanted to build an app you will enjoy using every day.</p>
                </div>
                <img src="style/images/interface.svg" alt="">
            </article>
            <div>
                <article>
                    <div class="bg"></div>
                    <h2>Light, dark & black UI theme</h2>
                    <p class="min">Dona offers lot of customizations, one of them allowing you to choose from light, dark and black UI theme.</p>
                    <img src="style/images/interface (1).svg" alt="">
                </article>
                <article>
                    <div class="bg"></div>
                    <img src="style/images/task item.svg" alt="">
                    <h2>Details matter</h2>
                    <p class="min">We want to bring satisfation to every interaction.</p>
                </article>
            </div>
        </section>

        <section>
            <form action="" id="email-form">
                <div class="bg"></div>
                <input type="email" placeholder="Enter your email">
                <button class="black" disabled>Get early access<img src="style/images/arrow.svg" alt=""></button>
            </form>
        </section>

    </div>
</main>

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