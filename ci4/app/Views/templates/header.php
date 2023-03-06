<!doctype html>
<html>
<head>
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
    