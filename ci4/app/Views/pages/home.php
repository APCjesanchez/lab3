<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/f7d6092e35.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="with=device-width, intial-scale=1.0">
    <title>Johanne's Works</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!--navigation tab-->
    <div id="progress-bar"></div>
    <div id="scroll-path"></div>
   <div id="hero">
    <nav>
        <h2 id="logo">Johanne<span>Sanchez</span></h2>
        <ul id="nav-tab">
            <li><a href = "#hero">Home</a></li>
            <li><a href = "#content-about">About</a></li>
            <li><a href = "#content-references">References</a></li>
        <span id="time">
            <span id="hours">00</span>
            <span>:</span>
            <span id="minutes">00</span>
            <span>:</span>
            <span id="seconds">00</span>
            <span id="session">AM</span>
        </span>
        </ul>
    </nav>

    <!--content of the home tab-->
    <div id="page-content">
        <h2>
            <q>You are always learning. The problem is, sometimes you stop and think you understand the <br>
            world. This is not correct. The world is always moving. You never reach the point<br>
            you can stop making an effort.</q>
        </h2>
        <h3 id = "paulo">
            Paulo <span id="coelho">Coelho</span>
        </h3>
    </div>
   </div>

   <!--content of the about tab-->
   <section id="content-about"> 
    <div id="main-content-about">
        <img src="img/mepicture.jpg">
        <div id="content-about-me">
            <h2>Johanne Sanchez</h2>
            <h5><span id="apc-about">Asia Pacific College</span> Student under Bachelor of Science in Computer Science with Specialization in Cyber Security and Forensics</h5>
            <p>
                <span id="question-about">Did you choose this course?</span> Yes <br><br>
                <span id="question-about">Why Yes?</span> Since we are approaching a technological evolution, I believed that not only
                will it bring benefits but also detriments, therefore, I approached this course as my go-to
                because we will be in demand by the time, we have finished our college to against the
                detriments like black hat hackers. <br><br>
                <span id="question-about">I.T. Experience:</span> Beginner Level Python Programming, Beginner Level HTML, CSS and JavaScript Programming<br><br>
            </p>
        </div>
    </div>
   </section>

   <!--content of the references tab-->
   <section id="content-references">
        <div id="reference-title">
            <h2>References for Making Website</h2>
        </div>
        <div id="reference-box">
            <!--reference card for w3schools-->
            <div id="reference-card">
                <i id="fa-solid fa-book"></i>
                <h5>W3Schools</h5>
                <div id="reference-content">
                <p>
                    W3Schools was used to get the starting syntax for every element in HTML, CSS and JavaScript.
                </p>
                <p style="text-align: center;">
                    <a id="button" href="#">W3Schools Link</a>
                </p>
                </div>
            </div>
            <!--reference card for Tahmid Ahmed (Youtuber)-->
            <div id="reference-card">
                <i id="fa-solid fa-video"></i>
                <h5>Tahmid Ahmed</h5>
                <div id="reference-content">
                <p>
                    Tahmid Ahmed is a front-end developing Youtuber that helps to give creative ideas when making websites and I took a minimalistic approach from his Youtube videos.
                </p>
                <p style="text-align: center;">
                    <a id="button" href="#">Tahmid Ahmed's Youtube</a>
                </p>
                </div>
            </div>

        </div>
   </section>
   <!--In this area of the javascript, I have already implemented loops, functions and HTML DOM in order to create an alarm clock that depended on the time zone of the device.-->
   <!--I have also implemented the camelCase for all functions or variables for better code readability-->
   <!--I have also implemented more "let" variables for the website to have better performance with ready to call variables-->
   <script type="text/javascript">
        let progress = document.getElementById('progress-bar')
        let totalHeight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function(){
            let progressHeight = (window.pageYOffset / totalHeight) *  100;
            progress.style.height = progressHeight + "%";
        }
        function displayTime(){
            var dateTime = new Date();
            var hrs = dateTime.getHours();
            var min = dateTime.getMinutes();
            var sec = dateTime.getSeconds();
            var session = document.getElementById('session');
            
            if(hrs >= 12){
                session.innerHTML = 'PM';
            }else{
                sessions.innerHTML = 'AM';
            }

            if (hrs > 12) {
                hrs = hrs - 12;
            }
            
            document.getElementById('hours').innerHTML = hrs;
            document.getElementById('minutes').innerHTML = min;
            document.getElementById('seconds').innerHTML = sec;
        }
        setInterval(displayTime, 10);
   </script>
</body>
</html>