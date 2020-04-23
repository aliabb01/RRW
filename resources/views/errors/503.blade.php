<title>Apollon Railway</title>
<style>
  @import url('https://fonts.googleapis.com/css?family=Orbitron');
  body {
    text-align: center;
    padding: 150px;
  }

  h1 {
    font-size: 50px;
  }

  html,
  /* Fills the body inside html tag */
  body {
    margin: 0;
    height: 100%;
    background-color: #C2DFFF;
  }

  body {
    font: 20px Helvetica, sans-serif;
    color: #333;
  }

  article {
    display: block;
    text-align: left;
    width: 45%;
    margin: 0 auto;
  }

  a {
    color: #dc8100;
    text-decoration: none;
  }

  a:hover {
    color: #333;
    text-decoration: none;
  }
  .countdown-timer{
    font-family: "Sofia Pro Light";
  }

</style>

<article>
  <h1>We&rsquo;ll be back soon!</h1>
  <div>
    <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can
      always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
    <p>&mdash; ApollonRailway</p>    
  </div>
</article>
<div class="container">
  <h1 class="countdown-timer display-1" id="countdown-timer"></h1>
</div>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("May 10, 2020 00:00:00").getTime();
  
  // Update the count down every 1 second
  var x = setInterval(function() {
  
    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
      
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    // Output the result in an element with id="demo"
    document.getElementById("countdown-timer").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown-timer").innerHTML = "COMING VERY SOON";
    }
  }, 1000);
</script>