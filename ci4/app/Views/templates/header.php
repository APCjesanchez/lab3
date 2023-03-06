<!doctype html>
<html>
<head>    
    <script src="https://kit.fontawesome.com/f7d6092e35.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="with=device-width, intial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <?php echo link_tag('css/style.css'); ?>
    <title>CodeIgniter Tutorial</title>
</head>
<body>
<div id="progress-bar"></div>
    <div id="scroll-path"></div>
   <div id="hero">
    <nav>
        <h2 id="logo">Johanne<span>Sanchez</span></h2>
        <ul id="nav-tab">
            <li><a href = "/lab3/ci4/public/home#hero">Home</a></li>
            <li><a href = "/lab3/ci4/public/home#content-about">About</a></li>
            <li><a href = "/lab3/ci4/public/home#content-references">References</a></li>
            <li><a href = "/lab3/ci4/public/guest/create">Register</a></li>
            <li><a href = "/lab3/ci4/public/guest">Members</a></li>
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
    