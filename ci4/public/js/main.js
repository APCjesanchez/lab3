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