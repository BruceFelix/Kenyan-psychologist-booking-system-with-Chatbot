<?php
require '../backend/connection.php';
$therapist = mysqli_query($connection, "SELECT * FROM therapists");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/therapist.css">
    <title>Therapists</title>
</head>
<body>
    <header>
        <nav>
            <div id="home" class="name">
                <h1>Kenya</h1>
                <h2>Therapy <br> <span class="platform">Platform</span></h2>
            </div>
            <div class="links">
                <ul>
                    <li><a href="../Frontend/landing.html">Home</a></li>
                    <li><a href="../Frontend/about.html">About</a></li>
                    <li class="link"><a href="../Frontend/Login page/index.html">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="therapits">
            <div class="container">
                <?php
                    if(mysqli_num_rows($therapist) > 0){
                        $i = 0;
                        while($row = mysqli_fetch_assoc($therapist)){
                ?>
                <div class="card">
                    <div class="intro">
                        <?php echo "<img src='../Images/Therapists/".$row['profile']."'>"?>
                        <h3> <?php echo $row['name'];?> </h3>
                        <p> <?php echo $row['title'];?></p>
                        <p> <?php echo $row['organization'];?></p>
                    </div>
                    <div class="details">
                        <p> <?php echo $row['aboutself'];?></p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:"><?php echo $row['email'];?></a></button>
                        <button><a href="tel:"><?php echo $row['phone_number'];?></a></button>  
                    </div>
                </div>
                <?php
                        $i++;
                        }
                    }
                else{
                    echo "No results found.".mysqli_error($connection);
                }  
                ?>
                <!-- <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="intro">
                        <img src="../Images/ivy.jpg" alt="">
                        <h3>Ivy Murugi</h3>
                        <p>Psychologist</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="intro">
                        <img src="../Images/kate.jpg" alt="">
                        <h3>Kate Busaka</h3>
                        <p>Registered Counsellor</p>
                        <p>Kenya Psychologist association</p>
                    </div>
                    <div class="details">
                        <p>"I work psychodynamically and take a person-centred approach to the process of therapy, working with each client as an individual. Counselling supports you to be the author of your own life story – giving you a safe space to be heard and the courage to live life on your"</p>
                    </div>
                    <div class="contacts">
                        <button><a href="mailto:katebusaka@gmail.com">Email me</a></button>
                        <button><a href="tel:0700023232">Phone number.</a></button>
                        
                    </div>
                </div> -->
            </div>
        </div>
    </main>
    <div class="letsgo">
        <a href="#home">
            <img src="../Images/letsgo.png" alt="">
        </a>
    </div>
    <footer>
        <div>
            <ul>
                <li><a href="../Frontend/landing.html">Home</a></li>
                <li><a href="../Frontend/about.html">About</a></li>
                <li><a href="../Frontend/help.html">We can help with..</a></li>
            </ul>
        </div>
        <p>Copyright &#169 Kenya Therapy Platform</p>
        <ul>
            <li><a href=""><img src="../Images/facebook.svg" alt=""></a></li>
            <li><a href=""><img src="../Images/instagram.svg" alt=""></a></li>
            <li><a href=""><img src="../Images/twitter.svg" alt=""></a></li>
            <li><a href="mailto:info@kenyatherapy.com">info@kenyatherapy.com</a></li>
            <li><a href="tel:0700000000">Call us.</a></li>
        </ul>
    </footer>
</body>
</html>