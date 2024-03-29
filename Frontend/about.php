<?php
    header("Access-Control-Allow-Origin: *");
    require '../backend/connection.php';
    $therapist = mysqli_query($connection, "SELECT * FROM therapists");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Images/logooriginal.png">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="../Frontend/interface/assets/css/chat.css">
    <link rel="stylesheet" href="../Frontend/interface/style.css">
    <link rel="stylesheet" href="../Frontend/interface/assets/css/typing.css">
    <link rel="stylesheet" href="../styles/about.css">
    <title>About Us</title>
</head>
<body>
    <img class="bg" src="../Images/blob2.svg" alt="">
    <img class="bg" src="../Images/blob.svg" alt="">
    <header>
        <nav>
            <div class="container">
                <div class="name">
                    <p> Kenya</p>
                    <p> Therapy </br> Platform</p>
                </div>
                <ul>
                    <li id="home"> <a href="../Frontend/landing.php">Home</a></li>
                    <li><a href="../Frontend/help.php">We can help with...</a></li>
                    <li><a href="../Frontend/therapist.php">Therapists</a></li>
                    <!-- <li><a href="../Frontend/about.html">About</a></li> -->
                    <?php
                    if(!isset($_SESSION['username'])){
                        header("location: ../Frontend/Loginpage/index.html");
                    }
                    else{
                      echo $_SESSION['username'];
                      echo "
                      <li>
                      <form action='../backend/destroy.php' method='post'>
                         <a  > <input type='submit' class='link  ' value='Logout'></a>
                      </form>
                      </li>";
                    }
                     ?>
                    <!-- <li><a class="link"  href="../Frontend/Loginpage/index.html">Login</a></li> -->
                </ul>
            </div>
        </nav>
        <div class="about">
            <h1>About Us</h1>
            <p>Whenever you’re ready, we’re here to help you book counselling online with qualified,<br>professional counsellors and psychotherapists easily and quickly, at the times and prices<br>that suit you, wherever you are.</p>
            <p>Our vision is a healthier, brighter world where everyone has access to professional<br>psychological support.</p>
            <p>To make this possible, we’re on a mission to enable people to quickly and easily connect<br>with the highest-quality wellbeing help, through our trusted community of professional<br>therapists and best-in-class mental health resources.</p>
            <p>As the largest and most reputable psychotherapy group in the Kenya, we will continue<br>transforming the world one person at a time, for the good of everyone.</p>
        </div>
    </header>
    <section class="therapists">
        <h2>About Our Therapists</h2>
        <p>To help you find a therapist who is right for you, we ensure that all the therapists on our platform are UK registered, insured and professionally trained counsellors, psychotherapists, psychologists and cognitive behaviour therapists. They are skilled, experienced, compassionate, and dedicated to both their personal and professional development. Our therapists offer appointments online by video and chat, in person or over the telephone, because we know that talking to a real person, in real time, is important to build a therapeutic relationship.</p>
        <p>While the therapists on our platform might be diverse in their therapeutic approaches, they are united in their exceptional commitment to clients.</p>
    </section>
    <section class="goalsandvalues">
        <h2>Our Goals & Values</h2>
        <div class="goals">
            <div class="transform goals-values">
                <img src="../Images/transform.svg" alt="">
                <div class="gcontent">
                    <p>We believe that therapy can help anyone to transform their life.</p>
                    <p>We want to make booking counselling with qualified therapists simple, fast and accessible to everyone, wherever they are.</p>
                </div>
            </div>
            <div class="improve goals-values">
                <img src="../Images/improve.svg" alt="">
                <div class="gcontent">
                    <p>We believe that therapy can help anyone to transform their life.</p>
                    <p>We want to make booking counselling with qualified therapists simple, fast and accessible to everyone, wherever they are.</p>
                </div>
            </div>
            <div class="safespace goals-values">
                <img src="../Images/safespace.svg" alt="">
                <div class="gcontent">
                    <p>We are on a mission to eliminate prolonged emotional suffering worldwide. We want to make it as common and important to seek treatment for our mental health as it is for physical difficulties.</p>
                    <p>We are committed to maintaining the highest quality standards across all of the therapists listed on the platform and regularly review client feedback.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gurantee">
        <div class="gucontent">
            <h2>Our client Guarantee</h2>
            <p>We aim to align ourselves with the most select group of therapists. They are fully qualified, accredited and insured to practice privately. If there's any reason why you're not getting the most out of your sessions, let us know and we'll do our best to arrange an alternative meeting at no cost to you.</p>
        </div>
    </section>
    <section class="confidentiality">
        <h2>We take confidentiality seriously</h2>
        <div class="ccontent">
            <div class="confidence">
                <p>While engaging in therapy sessions is a sign of strength and something that should be spoken about freely with others, we place a huge emphasis on clients' and prospective clients' confidentiality. We are registered with the Information Commissioner's Office.</p>
                <p>KenyaTherapy.com and supporting systems are hosted on in highly accredited data centres with PCI Level 1 compliance. All communications with users is encrypted with SSL.</p>
                <p>To read about how we handle your electronic data please see our Terms which includes our Privacy Policy.</p>
                <p>Each therapist is bound by their professional organisation's ethical rules which includes confidentiality and client safety.</p>
            </div>
            <div class="feedback">
                <h3>Feedback</h3>
                <p>We appreciate any feedback so that we can continue to match existing and future clients with the very best of therapists in the UK. Please email us <a href="mailto:info@kenyatherapy.com">info@kenyatherapy.com</a> to submit any comments.</p>
            </div>
        </div>
    </section>
    <div class="letsgo">
        <a href="#home">
            <img src="/Images/letsgo.png" alt="">
        </a>
    </div>
    <div class="container">
            <div class="chatbox">
                <div class="chatbox__support">
                    <div class="chatbox__header">
                        <div class="chatbox__image--header">
                            <img src="../Frontend/interface/images/image.png" alt="image">
                        </div>
                        <div class="chatbox__content--header">
                            <h4 class="chatbox__heading--header">Chat support</h4>
                            <p class="chatbox__description--header">Your personal psychologist available 24/7. Just for fun.</p>
                        </div>
                    </div>
                    <div class="chatbox__messages">
                        <div id='mainText'>
                            <!-- <div class="messages__item messages__item--visitor">
                                Hi Bruce.How are you feeling today? Please answer me in English
                            </div>
                            <div class="messages__item messages__item--operator">
                                I feel bored
                            </div>
                            <div class="messages__item messages__item--visitor">
                                Please tell me more.
                            </div>
                            <div class="messages__item messages__item--operator">
                                I don't feel anything
                            </div>

                            <div class="messages__item messages__item--visitor">
                                You don't feel anything?
                            </div>

                            <div class="messages__item messages__item--typing">
                                <span class="messages__dot"></span>
                                <span class="messages__dot"></span>
                                <span class="messages__dot"></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="chatbox__footer">
                        <img src="../Frontend/interface/images/icons/emojis.svg" alt="">
                        <img src="../Frontend/interface/images/icons/microphone.svg" alt="">
                        <input type="text" placeholder="Write a message..." id="inputMsg">
                        <button class="chatbox__send--footer" id="send-btn">Send</button>
                        <img src="../Frontend/interface/images/icons/attachment.svg" alt="">
                    </div>

                    <script>
                        let sendBtn = document.getElementById("send-btn");
                        let sender_msg =document.getElementById("inputMsg").value
                        sendBtn.addEventListener("click", ()=>{
                            if(document.getElementById("inputMsg").value!=""){
                                putText(document.getElementById("inputMsg").value, 1)
                            $.ajax({
                                type: "POST",
                                url: "http://127.0.0.1:5000",
                                data: JSON.stringify({"sender":document.getElementById("inputMsg").value}),
                                contentType:"application/json",
                                success:(data)=> {
                                    console.log(data)
                                    putText(data['msg'], 4)
                                    console.log("yes")
                                } 
                                })
                                document.getElementById("inputMsg").value =""
                                // .done(function( data ) {
                                //     alert( "Data Loaded: " + data );
                                // });
                                ;
                            console.log("send")
                        
                            console.log("Received")
                            }
                        })
                    </script>

                </div>
                <div class="chatbox__button">
                    <img src="../Images/messaging.svg" alt="">
                </div>
            </div>
        </div>
    <footer>
        <a href="">Book a Therapist</a>
        <div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="../about.php">About</a></li>
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
    <script src="./test.js"></script>
    <!-- <script src="slider.js"></script> -->
    <script src="../Frontend/interface/assets/js/Chat.js"></script>
    <script src="../Frontend/interface/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</main>
</body>
</html>