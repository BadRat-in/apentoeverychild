<?php
try {
    $ref = ($_GET['ref'] != null && $_GET['ref']) ? $_GET['ref'] . "_ref" : "";
    $blank = $_GET['blank'];
} catch (Exception $error) {
    $ref = "";
    $blank = "";
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://www.apentoeverychild.online/crowdfunding/index.php" />
    <meta property="og:image" content="https://www.apentoeverychild.online/statics/image/fav.ico" />
    <link rel="stylesheet" href="./statics/CSS/style.css" type="text/CSS">
    <script src="./statics/JS/nav-button.js" type="text/javascript"></script>
    <script src="./statics/JS/checkValues.js" type="text/javascript"></script>
    <script src="./statics/JS/countdown.js"></script>
    <link rel="stylesheet" href="./statics/CSS/countdown.css" type="text/CSS">
    <link rel="stylesheet" href="./statics/CSS/fonts.css" type="text/CSS">
    <link rel="stylesheet" href="./statics/CSS/color.css" type="text/CSS">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="./statics/image/fav.ico" type="image/x-icon">
    <script src="./statics/JS/nav-to-payment.js" type="text/javascript"></script>
    <title>A PEN TO EVETY CHILD</title>
</head>

<body onload="call(timer, timer2)">
    <input type="hidden" name="blank" id="blank" value="<?php echo $blank; ?>">
    <div class="container" id="header">
        <div class="nav-container">
            <img class="logo" src="./statics/image/fav.ico" alt="logo" type="image/x-icon">
            <div class="menu-icon" onclick="opendrawer('menu_view')">
                <div class="icon1"></div>
                <div class="icon2"></div>
                <div class="icon3"></div>
            </div>
            <div class="menu">
                <ul>
                    <a href="#participate" id="anchor">
                        <li id="participate-btn"><b>participate</b></li>
                    </a>
                    <a href="#" id="anchor" onclick="showhome(home, payment)">
                        <li>home</li>
                    </a>
                    <a href="#about" id="anchor" onclick="showhome(home, payment)">
                        <li>about</li>
                    </a>
                    <a href="#rules" id="anchor" onclick="showhome(home, payment)">
                        <li>rules</li>
                    </a>
                    <a href="#contact" id="anchor" onclick="showhome(home, payment)">
                        <li>contact us</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-button-nav" id="menu_view">
        <ul>
            <a href="#" id="anchor" onclick="closedrawer(menu_view, home, payment)">
                <li id="nav-btn">home</li>
            </a>
            <a href="#about" id="anchor" onclick="closedrawer(menu_view, home, payment)">
                <li id="nav-btn">about</li>
            </a>
            <a href="#rules" id="anchor" onclick="closedrawer(menu_view, home, payment)">
                <li id="nav-btn">rules</li>
            </a>
            <a href="#participate" id="anchor" onclick="closedrawer(menu_view, home, payment)">
                <li id="nav-btn">praticipate</li>
            </a>
            <a href="#contact" id="anchor" onclick="closedrawer(menu_view, home, payment)">
                <li id="nav-btn">contact us</li>
            </a>
        </ul>
    </div>
    <div class="home" id="home">
        <div class="pop-up-container" id="popUp">
            <div class="pop-up">
                <i class="fas fa-times close" style="color: white;" onclick="hidePopUp()"></i>
                <img src="./statics/image/pop_up_image.png" alt="popup" style="filter: grayscale(0%);">
                <div class="timer" id="timer2"></div>
            </div>
        </div>
        <div class="front">
            <div class="info">
                <div>
                    <p class="p-normal">online crowd funding for</p>
                    <p class="p-heading">children <strong>education</strong></p>
                    <a href="#participate" class="zoom"><button><b>participate</b></button></a>
                </div>
            </div>
            <img src="./statics/image/education.jpg" alt="smilinggirl" style="filter: grayscale(0%);">
        </div>
        <div class="section" id="about">
            <div class="heading load">
                <p><strong>About the Campain</strong></p>
            </div>
            <p class="cam-detail load">This campaign is running by some college students to child education. By the report of google, 8.1 million children are out of school as of Sept 2004 as per Government statistics. You can not imagine that how many children has got this list after the pendemic. So through this campain we are collecting fund to them but our team has decided we will not take money from poeple. If you want to help them just join our campain through the participation, we are organizing an online lucky draw event where you can appriciate our work through join and participate in this event by pay participation fees.</p>
            <div class="section about-campain">
                <div class="number">
                    <div class="count">
                        <p class="done" id="done"><b>138</b></p>
                        <p class="total"><b>/500</b></p>
                    </div>
                    <p><strong>Participation has Done.</strong></p>
                </div>
                <img src="./statics/image/7.png" alt="happychildern">
            </div>
            <p class="cam-detail load" style="font-size: 20px;">We need 500 Participant to this luckydraw and by the computer algorithm 10 participants will announce lucky winners , each winner will get Rs10000.</p>
            <p class="cam-detail load" style="color: red; margin-top: 30px; font-size: 16px;">NOT - We will return all participation fees amount through the price money, we are interested in GOOGLE ADS Revenue to our mission By Last event's rush we generated $600 and we hope that also we will collect fund to our mission.</p>
        </div>

        <div class="rule-section" id="rules">
            <div class="rule-div load">
                <h3>RULES</h3>
                <div>
                    <p class="rule">1. Whole event has settled by computer algorithms.</p>
                    <p class="rule">2. 10 winners will decided by the computer algorithm from the all participants.</p>
                    <p class="rule">3. Human interfere is not allowed in the event.</p>
                    <p class="rule">4. Everyone can participate with pay event fee. </p>
                    <p class="rule">5. One person Participate only one time by gmail and mobile number. </p>
                    <p class="rule">6. Participants will get a H-Code ( Ex-As6#m ) which is their unique Hash code.( <i style="color:red;">H - Hash</i>)</p>
                    <p class="rule">7. A single participate can hold multiple Hash code which will increase their winnin probability.</p>
                    <p class="rule">8. Participants will have chance to get more H-Code by refferals.</p>
                    <p class="rule">9. Each participate get 1 more H-Code upon 5 succesfull refferals</p>
                    <p class="rule">10. After the pay registration fees Participation get their H-Code via Gmail and Mobile number.</p>
                    <p class="rule">11. Every participant will get unique H-code even we are not able to revocer that so keep safely.</p>
                </div>
            </div>
            <div class="reading-girl load">
                <img src="./statics/image/27indiaschool3.jpg" alt="stydinggirl">
            </div>
        </div>
        <div class="round-box"></div>
        <div class="section paticipation-box" id="participate">
            <div class="text-section">
                <h3>how to participate</h3>
                <p>To become a part of out mission participant this event</p>
                <p>your just one</p>
            </div>
            <div class="for-and">
                <div class="price-boxes">
                    <div class="box">
                        <div class="price" onclick="showpayment(home, payment, count, 'c')">
                            <div>
                                <p>Rs</p>
                                <h2>100</h2>
                            </div>
                        </div>
                        <div class="participate-button">
                            <button onclick="showpayment(home, payment, count, 'c')"><b>participate</b></button>
                        </div>
                        <p class="des-text"><i>If you participate with Rs 100, you will get </i><b>1 H-code</b><i> and </i><b>5 world's best selling E-books</b><i> market price are Rs 4500/- approx on kindel.</i></p>
                    </div>
                    <div class="box">
                        <div class="price" onclick="showpayment(home, payment, count, 'b')">
                            <div>
                                <p>Rs</p>
                                <h2>300</h2>
                            </div>
                        </div>
                        <div class="participate-button">
                            <button onclick="showpayment(home, payment, count, 'b')"><b>participate</b></button>
                        </div>
                        <p class="des-text"><i>If you participate with Rs 300, you will get </i><b>4 H-code</b><i> and </i><b>5 world's best selling E-books</b><i> market price are Rs 4500/- approx on kindel.</i></p>
                    </div>
                    <div class="box">
                        <div class="price" onclick="showpayment(home, payment, count, 'a')">
                            <div>
                                <p>Rs</p>
                                <h2>600</h2>
                            </div>
                        </div>
                        <div class="participate-button">
                            <button onclick="showpayment(home, payment, count, 'a')"><b>participate</b></button>
                        </div>
                        <p class="des-text"><i>If you participate with Rs 600, you will get </i><b>10 H-code</b><i> and </i><b>5 world's best selling E-books</b><i> market price are Rs 4500/- approx on kindel.</i></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="timer-div">
            <div class="announce">
                <h3>Time left to announce</h3>
                <h2>Lucky Winners</h2>
            </div>
            <div class="timer" id="timer"></div>
        </div>
    </div>

    <div class="round-box2"></div>
    <div class="winners">
        <div class="item">
            <img src="./statics/image/mubarak.jpg" class="winner" alt="winner1">
            <a href="https://instagram.com/mubarakshah65/" target="_blank"><img class="icon-for-desktop" alt="winner" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
            <h4>Mubarak Shah</h4>
        </div>
        <div class="item">
            <img src="./statics/temp/2.jpg" class="winner" alt="winner2">
            <a href="" target="_blank"><img class="icon-for-desktop" alt="winner" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
            <h4>Satyam Singh</h4>
        </div>
        <div class="item">
            <img src="./statics/image/dm.jpg" class="winner" alt="winner3">
            <a href="https://instagram.com/tanudeep_kadam/" target="_blank"><img class="icon-for-desktop" alt="winner" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
            <h4>Tanu kadam</h4>
        </div>
        <div class="item">
            <img src="./statics/image/mohit.jpg" class="winner" alt="winner4">
            <a href="https://instagram.com/creater_mohit/" target="_blank"><img class="icon-for-desktop" alt="winner" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
            <h4>Mohit Bhilbar</h4>
        </div>
        <div class="item">
            <img src="./statics/temp/5.jpg" class="winner" alt="winner5">
            <a href="https://instagram.com/kashish_khatik88/" target="_blank"><img class="icon-for-desktop" alt="winner" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
            <h4>Kashish Khatik</h4>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner carousel-mobile">
            <div class="item active">
                <img src="./statics/image/mubarak.jpg" alt="winner" style="width:250px; height: 250px; border-radius: 50%;">
                <a href="https://instagram.com/mubarakshah65/" target="_blank"><img class="icon" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
                <h4>Mubarak Shah</h4>
            </div>
            <div class="item">
                <img src="./statics/temp/2.jpg" alt="winner" style="width:250px; height: 250px; border-radius: 50%;">
                <a href="" target="_blank"><img class="icon" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
                <h4>Satyam Singh</h4>
            </div>


            <div class="item">
                <img src="./statics/image/dm.jpg" alt="winner" style="width:250px; height: 250px; border-radius: 50%;">
                <a href="https://instagram.com/tanudeep_kadam/" target="_blank"><img class="icon" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
                <h4>Tanu Kadam</h4>
            </div>

            <div class="item">
                <img src="./statics/image/mohit.jpg" alt="winner" style="width:250px; height: 250px; border-radius: 50%;">
                <a href="https://instagram.com/creater_mohit" target="_blank"><img class="icon" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
                <h4>Mohit Bhilbar</h4>
            </div>

            <div class="item">
                <img src="./statics/temp/5.jpg" alt="winner" style="width:250px; height: 250px; border-radius: 50%;">
                <a href="https://instagram.com/kashish_khatik88/" target="_blank"><img class="icon" src="./statics/image/insta.ico" style="filter: grayscale(0%);" type="image/x-icon"></i></a>
                <h4>Kashish Khatik</h4>
            </div>
        </div>

    </div>

    <div class="winner-text">
        <h2>last event's lucky draw winners</h2>
    </div>

    <div class="mission" id="mission">
        <div class="mission-box">
            <div class="text">
                <p>Our <strong>Mission</strong></p>
                <p>every child in school</p>
                <p>We are a team of college students, we are on a mission collect fund to educate children in rural areas where they don't have good meal and they can't think about the education. So we are request to all you Please participat in this event, and share your friends, family and incourage them to support our campain then you will be responsible to their eduction.</p>
                <button class="more"><b>LEARN MORE</b></button>
            </div>
            <img src="./statics/image/studing.jpg" alt="poorstudent">
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="contact-form">
            <form action="./back/contact.php" method="POST">
                <p>contact us</p>
                <table>
                    <tr>
                        <td><input type="text" minlength="5" name="name" placeholder="Enter your full name"></td>
                    </tr>
                    <tr>
                        <td><input type="mail" minlength="15" name="mail" placeholder="Enter your email address"></td>
                    </tr>
                    <tr>
                        <td><textarea name="query" id="query-text-area" cols="25" rows="5" placeholder="Enter your message"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <lottie-player src="./statics/lottie-namaste.json" speed="1" loop autoplay class="lottie-player"></lottie-player>
    </div>
    <footer>
        <div class="footer">
            <ul>
                <li>
                    <a href="#about">about us</a>
                </li>
                <li>
                    <a href="#mission">out mission</a>
                </li>
                <li>
                    <a href="#">become a promoter</a>
                </li>
                <li>
                    <a href="#">join as volunteer</a>
                </li>
                <li>
                    <a href="#contact">quiery</a>
                </li>
            </ul>
            <a href="#participate">
                <button><b>participate</b></button>
            </a>
            <div class="ftr-contact">
                <p><b>contact us</b></p>
                <a href="mailto:example@mail.com">example@mail.com</a>
            </div>
        </div>
        <div class="cp-right">
            <p>2022&copy apentoeverychild.online chile. All rights reserved.</p>
        </div>
    </footer>
    </div>
    <div id="payment" class="payment-section">
        <div class="payment-box">
            <div class="pay-text-book">
                <p class="pay-text"><b>payment</b></p>
                <div class="books">
                    <p>e-books</p>
                    <div class="books-div">
                        <div class="book">
                            <div>
                                <a href=""><img src="./statics/image/alchemist-original-imafzfhzefg8etxh.jpeg" alt="e-book" style="filter: grayscale(0);"></a>
                                <p>$3.3 at kindel</p>
                                <div class="lock" id="lock">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="book">
                            <div>
                                <a href=""><img src="./statics/image/questions-are-the-answers-original-imadhtdwtj6mzm3b.jpeg" alt="e-book" style="filter: grayscale(0);"></a>
                                <p>$3.3 at kindel</p>
                                <div class="lock" id="lock">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="book">
                            <div>
                                <a href=""><img src="./statics/image/rich-dad-poor-dad-original-imafxf885pytvycy.jpeg" alt="e-book" style="filter: grayscale(0);"></a>
                                <p>$4.8 at kindel</p>
                                <div class="lock" id="lock">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="book">
                            <div>
                                <a href=""><img src="./statics/image/the-magic-of-thinking-big-original-imagayy2mhzw3buj.jpeg" alt="e-book" style="filter: grayscale(0);"></a>
                                <p>$2.3 at kindel</p>
                                <div class="lock" id="lock">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="book">
                            <div>
                                <a href=""><img src="./statics/image/the-psychology-of-money-original-imafvb5vbgcczykj.jpeg" alt="e-book" style="filter: grayscale(0);"></a>
                                <p>$10 at kindel</p>
                                <div class="lock" id="lock">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-and-payment">
                <div class="detail">
                    <form action='./back/navigatetopay.php?ref=<?php echo $ref; ?>' name="userform" onsubmit="return (checkValue());" method='POST'>
                        <table>
                            <tr>
                                <td><input type="hidden" id="count" name="type" value="0"></td>
                            </tr>
                            <tr>
                                <td><input type="text" minlength="5" name="name" id="name" placeholder="Full Name" onkeyup="check(this)"></td>
                            </tr>
                            <tr>
                                <td><input type="mail" minlength="15" name="mail" id="mail" placeholder="Email" onkeyup="check(this)"></td>
                            </tr>
                            <tr>
                                <td><input type="number" minlength="10" maxlength="10" name="number" id="number" placeholder="Mobile No." onkeyup="check(this)"></td>
                            </tr>
                            <tr>
                                <td><input type="text" minlength="5" name="clg" placeholder="Collage(optional)"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Pay Now"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    let popup = document.querySelector("#popUp");

    popup.addEventListener("click", async(e) => {
        if (e.type == "click") {
            popup.style.animation = "hide-pop-up 300ms ease-out";
            await sleep(300);
            popup.style.display = "none";
        }
    });
</script>

</html>