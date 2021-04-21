function startTimer(duration, display) {
    var first=1;
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        diff = duration - (((Date.now() - start) / 1000) | 0);
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = "OTP expires in " + minutes + ":" + seconds; 

        if (diff <= 0) {
        	if(minutes==0)
        	{
        		window.location="signup.php";
        	}
        	else
        	{
            	start = Date.now() + 1000;
            }
        }
    }
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 10,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};