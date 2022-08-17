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
    <link rel="stylesheet" href="../styles/therapist.css">
    <link rel="stylesheet" href="../Frontend/interface/assets/css/chat.css">
    <link rel="stylesheet" href="../Frontend/interface/style.css">
    <link rel="stylesheet" href="../Frontend/interface/assets/css/typing.css">
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
                    <li><a href="../Frontend/landing.php">Home</a></li>
                    <li><a href="../Frontend/about.php">About</a></li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        header("location: ../Frontend/Loginpage/index.html");
                    }
                    else{
                      echo "<li class='uname'>".$_SESSION['username']."</li>";
                      echo "
                      <li>
                      <form action='../backend/destroy.php' method='post'>
                         <a class='link' > <input type='submit'  id='logout'    value='Logout' ></a>
                      </form>
                      </li>";
                    }
                     ?>
                    <!-- <li class="link"><a href="../Frontend/Login page/index.html">Login</a></li> -->
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
            </div>
        </div>
    </main>
    <div class="letsgo">
        <a href="#home">
            <img src="../Images/letsgo.png" alt="">
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
    <script src="./test.js"></script>
    <!-- <script src="slider.js"></script> -->
    <script src="../Frontend/interface/assets/js/Chat.js"></script>
    <script src="../Frontend/interface/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>