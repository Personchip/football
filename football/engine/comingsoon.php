<!DOCTYPE html>
<html>
<style>
body,
html {
    background-image: url('img/footballcort.jpg');
    height: 100%;
    margin: 0;
}

.bgimg {
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    display: grid;
    justify-content: left;
    height: 10%;
    width: 7%;
    position: absolute;
    top: 0;
    left: 16px;
}

.topleft:img {

    height: 10%;
    width: 7%;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

a {
    text-decoration: none;
    color: white;
}





hr {
    margin: auto;
    width: 40%;
}
</style>

<body>

    <div class="bgimg">
        <div class="topleft">
            <h1><a href="/index2.php">ThinkBall</a></h1>
        </div>
        <div class="middle">
            <h1>
                <font color="black">
                    СКОРО
                </font>
            </h1>
            <hr>
            <p id="demo" style="font-size:30px"></p>
        </div>
        <div class="bottomleft">
            <p>Приложение в разработке</p>
        </div>
    </div>

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

    // Update the count down every 1 second
    var countdownfunction = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + " дней " + hours + " часов " +
            minutes + " минут " + seconds + " секунд ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

</body>

</html>