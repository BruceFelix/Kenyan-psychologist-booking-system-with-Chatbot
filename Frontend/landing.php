<?php
    require '../backend/connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../Images/logooriginal.png">
    <title>Kenya Psychologist Booking System</title>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="name">
                    <p> Kenya</p>
                    <p> Therapy </br> Platform</p>
                </div>
                <ul>
                    <li id="home">Home</li>
                    <li><a href="../Frontend/help.php">We can help with...</a></li>
                    <li><a href="../Frontend/therapist.php">Therapists</a></li>
                    <li><a href="../Frontend/about.php">About</a></li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        header("location: ../Frontend/Loginpage/index.html");
                    }
                    else{
                      echo $_SESSION['username'];
                      echo "
                      <li>
                      <form action='../backend/destroy.php' method='post'>
                         <a > <input type='submit' class='logout' value='Logout' id='logout'></a>
                      </form>
                      </li>";
                    }
                     ?>
                    <!-- <li><a class="link"  href="../Frontend/Login page/index.html">Login</a></li> -->
                </ul>
            </div>
            <div class="description">
                <h1>The Smarter Way to Book Therapy</h1>
                <p>Book counselling with a qualified therapist easily and quickly.</p>
                <p>Talk online, in person or by phone.</p>
                <p>Help us Match you with the right therapist</p>
                <button><span class="search"><img src="../Images/magnifying-glass-solid.svg" alt=""></span> Find a Therapist</button>
            </div>
        </nav>
    </header>
    <main>
        <section class="working">
            <h2>How it works</h2>
            <div class="cards">
                <div class="card">
                    <img src="../Images/search.svg" alt="">
                    <div class="content">
                        <h4>Smart Search</h4>
                        <p>Find the best therapy for you<br> from 500+ registered, professional therapists.</p>
                        <p>Same-day appointements are available</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../Images/bookings.svg" alt="">
                    <div class="content">
                        <h4>Book online</h4>
                        <p>Choose how you want to connect - either by video, chat, phone or in-person.</p>
                        <p>Simply click to book your therapy sesson.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../Images/guarantee.svg" alt="">
                    <div class="content">
                        <h4>Book online</h4>
                        <p>Choose how you want to connect - either by video, chat, phone or in-person.</p>
                        <p>Simply click to book your therapy sesson.</p>
                    </div>
                </div>
            </div>
            <p class="last"><a href="">Find a therapist <img src="/Images/chevron-right-solid.svg" alt=""></a></p>
        </section>
        <section class="testimonys">
            <h3>What our clients are saying...</h3>
            <div class="rating">
                <img src="../Images/star-solid 1.svg" alt="">
                <img src="../Images/star-solid 1.svg" alt="">
                <img src="../Images/star-solid 1.svg" alt="">
                <img src="../Images/star-solid 1.svg" alt="">
                <img src="../Images/star-solid 1.svg" alt="">
            </div>
            <div class="slider">
                <div class="sliderone">
                    <div class="left">
                        <img src="../Images/less-than-solid.svg" alt="">
                    </div>
                    <div class="testimony one">
                        <blockquote>"An understanding therapist. I'm glad to have found someone to discuss my concerns about the past and how to move on."</blockquote>
                        <div class="details">
                            <p>Therapist: <a href="">Jame Mwangi</a></p>
                        </div>
                        <p>July 5th 2021</p>
                    </div>
                    <div class="right">
                        <img src="../Images/chevron-right-solid.svg" alt="">
                    </div>
                </div>
                <div class="testimony two">
                    <blockquote>"Only had one session with Lee and can't fault him anywhere. Seemed very patient, understanding and perceptive. Asked questions that seemed to broaden my perspective. Happily registered for a follow up."</blockquote>
                    <div class="details">
                        <p>Therapist: <a href="">Peter Mwangi</a></p>
                    </div>
                    <p>Septemer 8th 2021</p>
                </div>
                <div class="testimony three">
                    <blockquote>"Joe was kind, empathetic, non-judgemental and very understanding. I felt like I made clear, genuine progress through our sessions together. I found that the exercises and little assignments he made me do 
                        applied positively to my life and I believe I've made a meaningful change in our sessions together. There was never an instance where I felt uncomfortable talking to him regarding the issues and concerns 
                        I had going on with my life. I could not recommend him more!"</blockquote>
                    <div class="details">
                        <p>Therapist: <a href="">Jane Awuor</a></p>
                    </div>
                    <p>March 17th 2022</p>
                </div>
                <div class="testimony four">
                    <blockquote>“Ali was great. A kind and empathetic listener who was able to hold space for me to speak about my issues and helped me clarify and reframe them in a way that better enabled me to move forward. Would highly recommend her.”</blockquote>
                    <div class="details">
                        <p>Therapist: <a href="">Joyce Njeri</a></p>
                    </div>
                    <p>May 20th 2021</p>
                </div>
                <div class="testimony five">
                    <blockquote>Franka honestly is the kind of therapeutic relationship that I have been dreaming of for some time. I feel heard, she has amazing insights that, even as someone who is always reflecting on myself and my actions, I feel like I
                         have never asked myself before. Although I've only had 2 sessions, I feel like I will really do some major healing with Franka because I am feeling a level of understanding about why I am seeking comfort in harmful actions 
                         and emotional disconnection this early on already. And not only this but Franka is very warm and provides exactly the kind of safe space for myself who is used to all manner of self abuse.</blockquote>
                    <div class="details">
                        <p>Therapist: <a href="">Ivy Murugi</a></p>
                    </div>
                    <p>January 20th 2022</p>
                </div>

            </div>
        </section>
        <div class="about">
           <div class="content_about">
                <h2>About Harley Therapy</h2>
                <p>We are bringing the best expertise to make life-changing, private therapy available around the Kenya. Now you can get the help you need wherever you are,
                and whenever you need it</p>
                <p>The Kenyan Therapy community is made up of experienced and qualified therapists who have made a positive difference to thousands of lives through in-person therapy, phone therapy, and online counselling.</p>
                <img src="../Images/mhk-1.png" alt="">
           </div>
        </div>
        <div class="adjectives">
            <div class="countrys_description">
                <h2>The Kenya's leading<br>booking platform for<br>counselling and<br>psychotherapy</h2>
            </div>
            <div class="more_description">
                <div class="adjective">
                    <h4>Simple</h4>
                    <p>Find a therapist online in minutes and book your first session in three easy steps.</p>
                </div>
                <div class="adjective">
                    <h4>professional</h4>
                    <p>All therapists are qualified, insured and professionally trained with experience<br>in private practice.</p>
                </div>
                <div class="adjective">
                    <h4>Accessible</h4>
                    <p>Talk to a professional, wherever you are. Start online counselling,<br>telephone counselling or find a therapist near you to see in person.</p>
                </div>
            </div>
        </div>
        <div class="letsgo">
            <a href="#home">
                <img src="../Images/letsgo.png" alt="">
            </a>
        </div>
        <footer>
            <a href="">Book a Therapist</a>
            <div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact us</a></li>
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
    </main>
    <script src="slider.js"></script>
</body>
</html>