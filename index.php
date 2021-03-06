<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=320, initial-scale=1">
    <meta charset="utf-8">
    <style>
      body, html {
        min-width: 100%;
        min-height: 100%;
        margin: 0;
        padding: 0;
        font: Arial 14px;
      }
      #selfie{
        border-radius:50%;
        width:75%;
        
      }
    </style>
    <link rel="stylesheet" href="http://dstatic.darrylmcoder.com/assets/style.css">
    <script src="http://dstatic.darrylmcoder.com/assets/script.js"> </script>
  </head>
  <body>
    <?php echo file_get_contents('http://dstatic.darrylmcoder.com/assets/header.html') ?>
    <div class="content">
      <div class="pagetitle">
        Home Page
      </div><br>
      <img src="me.jpg" class="opts" id="selfie">
      <div style="color: blue" class="titletext">
        <h2>
          I am Darrylmcoder.<br>
          -known in real life as <br>Darryl Martin
        </h2>
      </div>
      <div class="opts">
        <div class="pagetitle">
          About me
        </div>
        <p>
          I am a <span id="age"></span> year old with a huge interest in electronics, both hardware and software. This website is a collection of my most successful software projects so far. You can use it whenever you want, most of it for free, but I definitely won't refuse if you want to pay &#128521;.
        </p>
      </div>
      <div class="pagetitle">
        My Projects
      </div>
      <div class="opts">
        <h2 class="titletext" style="color: blue">
          Video Downloader
        </h2>
        <p>
          My first and most popular major software project, a tool to download videos from YouTube. I started this project around the beginning of 2021 and have been improving it occassionally ever since.
        </p>
        <a href="http://yt.app.darrylmcoder.com">
          <button class="go">
            Check it out
          </button>
        </a>
      </div>
      <div class="opts">
        <h2 class="titletext" style="color: blue">
          Web Proxy
        </h2>
        <p>
          A simple and easy to use web proxy. I started it after studying the Drawbridge internet filter and noticing an interesting configuration which allows this proxy to bypass it entirely. 
        </p>
        <a href="http://imap.compass-bypass.darrylmcoder.com">
          <button class="go">
            Check it out
          </button>
        </a>
      </div>
      <div class="opts">
        <h2 class="titletext" style="color: blue">
          Music Downloader
        </h2>
        <p>
          A tool for downloading mp3 music. You can search and download nearly any song available on Spotify.
        </p>
        <a href="http://spotdl.darrylmcoder.com">
          <button class="go">
            Check it out
          </button>
        </a>
      </div>
    </div>
    <?php echo file_get_contents('http://dstatic.darrylmcoder.com/assets/footer.html') ?>
    <script defer type="text/javascript">
      function calculateAge(birthday) { // birthday is a date
       var ageDifMs = Date.now() - birthday;
       var ageDate = new Date(ageDifMs); // miliseconds from epoch
       return Math.abs(ageDate.getUTCFullYear() - 1970);
     }
      
      var birthday = new Date("September 22, 2005 00:00:00");
      var age = document.getElementById("age");
      age.innerHTML = calculateAge(birthday);
    </script>
  </body>
</html>
