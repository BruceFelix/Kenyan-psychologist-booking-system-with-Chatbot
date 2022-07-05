<?php
    require '../backend/connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Images/logooriginal.png">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/help.css">
    <title>We can help you with...</title>
</head>
<body>
    <header>
        <nav>
            <div class="name">
                <h1>Kenya</h1>
                <h2>Therapy <br> <span class="platform">Platform</span></h2>
            </div>
            <div class="links">
                <ul>
                    <li><a href="../Frontend/landing.php">Home</a></li>
                    <li><a href="../Frontend/about.php">About</a></li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        header("location: ../Frontend/Loginpage/index.html");
                    }
                    else{
                        
                      echo "<li class='username'>".$_SESSION['username']."</li>";
                      echo "
                      <li>
                      <form action='../backend/destroy.php' method='post'>
                         <a > <input type='submit' class='link' value='Logout' id='logout'></a>
                      </form>
                      </li>";
                    }
                     ?>
                    <!-- <li class="link"><a href="/Frontend/Login page/index.html">Login</a></li> -->
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="heading">
            <h2>Information and Support</h2>
            <p>Access information about psychological conditions, symptoms and therapy. If you have concerns about your emotional wellbeing or you're living with a mental health condition, qualified therapists can help with a wide range of issues and conditions.</p>
        </section>
        <section class="content">
            <div class="help">
                <h3>We can help with..</h3>
                <ul>
                    <li><img src="../Images/arrow.svg" alt=""> Anger Problems</li>
                    <li><img src="../Images/arrow.svg" alt=""> Abuse</li>
                    <li><img src="../Images/arrow.svg" alt=""> Anxiety</li>
                    <li><img src="../Images/arrow.svg" alt=""> Conduct Disorders</li>
                    <li><img src="../Images/arrow.svg" alt=""> Depression</li>
                    <li><img src="../Images/arrow.svg" alt=""> Developmental Disorders</li>
                    <li><img src="../Images/arrow.svg" alt=""> Dissociation</li>
                    <li><img src="../Images/arrow.svg" alt=""> Eating Disorders</li>
                    <li><img src="../Images/arrow.svg" alt=""> Family Problems</li>
                    <li><img src="../Images/arrow.svg" alt=""> Grief</li>
                    <li><img src="../Images/arrow.svg" alt=""> Identity</li>
                    <li><img src="../Images/arrow.svg" alt=""> Mental Health & Corporate Wellbeing Workshops</li>
                    <li><img src="../Images/arrow.svg" alt=""> Mood Disorders</li>
                    <li><img src="../Images/arrow.svg" alt=""> Obsessive Compulsive Disorder</li>
                    <li><img src="../Images/arrow.svg" alt=""> Parenting Issues</li>
                    <li><img src="../Images/arrow.svg" alt=""> Pay As You Go Therapy For Your Employees</li>
                    <li><img src="../Images/arrow.svg" alt=""> Personality Disorders</li>
                    <li><img src="../Images/arrow.svg" alt=""> Phobias</li>
                    <li><img src="../Images/arrow.svg" alt=""> Post-Traumatic Stress Disorder (PTSD)</li>
                    <li><img src="../Images/arrow.svg" alt=""> Self-Esteem</li>
                    <li><img src="../Images/arrow.svg" alt=""> Self Harm</li>
                    <li><img src="../Images/arrow.svg" alt=""> Sleep Problems</li>
                    <li><img src="../Images/arrow.svg" alt=""> Stress</li>
                    <li><img src="../Images/arrow.svg" alt=""> Thanatophobia</li>
                    <li><img src="../Images/arrow.svg" alt=""> Therapy for the Workplace</li>
                    <li><img src="../Images/arrow.svg" alt=""> Trauma</li>
                    <li><img src="../Images/arrow.svg" alt=""> Workplace Stress</li>
                </ul>
            </div>
        </section>
    </main>
    <div class="look">
        <p>Looking to Start Counselling?</p>
        <p>Find a Therapist Today...</p>
        <button><span class="search"><img src="../Images/magnifying-glass-solid.svg" alt=""></span> Find a Therapist</button>
    </div>
    <footer>
        <a href="../Frontend/therapist.php">Book a Therapist</a>
        <div>
            <ul>
                <li><a href="../Frontend/landing.php">Home</a></li>
                <li><a href="../Frontend/about.php">About</a></li>
            </ul>
        </div>
        <p>Copyright &#169 Kenya Therapy Platform</p>
        <ul>
            <li><a href=""><img src="../Images/facebook.svg" alt=""></a></li>
            <li><a href=""><img src="../Images/instagram.svg" alt=""></a></li>
            <li><a href=""><img src="../Images/twitter.svg" alt=""></a></li>
            <li><a href="mailto:info@kenyatherapy.com">info@kenyatherapy.com</a></li>
            <li><a href=""></a>0700000000</li>
        </ul>
    </footer>
</body>
</html>