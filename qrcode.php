<?php
session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div id="loadingMessage" style="margin: auto; text-align: center;">🎥 Kamera kullanım iznini kabul ettiğinizden emin olunuz!</div>
    <canvas id="canvas" hidden style="display: block; margin: auto;"></canvas>
    <script>
      var page = 
      "<?php
      if($_GET['pg']=="index")
      {
        echo "search.php?no=";
      }
      else
      {
        if(isset($_GET['sno']))
        {
          echo "index.php?pg=".$_GET['pg']."&type=".$_GET['type']."&sno=".$_GET['sno']."&qr=";
        }
        else if (isset($_GET['eno']))
        {
          echo "index.php?pg=".$_GET['pg']."&type=".$_GET['type']."&eno=".$_GET['eno']."&qr=";
        }
        else
        {
          echo "index.php?pg=".$_GET['pg']."&type=".$_GET['type']."&qr=";
        }
      }
      ?>";
      var video = document.createElement("video");
      var canvasElement = document.getElementById("canvas");
      var canvas = canvasElement.getContext("2d");
      var loadingMessage = document.getElementById("loadingMessage");
  
      function drawLine(begin, end, color) {
        canvas.beginPath();
        canvas.moveTo(begin.x, begin.y);
        canvas.lineTo(end.x, end.y);
        canvas.lineWidth = 4;
        canvas.strokeStyle = color;
        canvas.stroke();
      }

      navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } }).then(function(stream) {
        video.srcObject = stream;
        video.setAttribute("playsinline", true);
        video.play();
        requestAnimationFrame(tick);
      });
  
      function tick() {
        loadingMessage.innerText = "⌛ Kamera Başlatılıyor..."
        if (video.readyState === video.HAVE_ENOUGH_DATA) {
          loadingMessage.hidden = true;
          canvasElement.hidden = false;
          
          canvasElement.height = video.videoHeight;
          canvasElement.width = video.videoWidth;
          canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);
          var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);
          var code = jsQR(imageData.data, imageData.width, imageData.height, {
            inversionAttempts: "dontInvert",
          });
          if (code) {
            drawLine(code.location.topLeftCorner, code.location.topRightCorner, "#FF3B58");
            drawLine(code.location.topRightCorner, code.location.bottomRightCorner, "#FF3B58");
            drawLine(code.location.bottomRightCorner, code.location.bottomLeftCorner, "#FF3B58");
            drawLine(code.location.bottomLeftCorner, code.location.topLeftCorner, "#FF3B58");
            window.location.href = page+code.data;
            video.stop();
          } 
          else
          {

          }
        }
        requestAnimationFrame(tick);
      }
    </script>
  </body>
  </html>
  <script src="assets/js/jsQR.js"></script>