<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" type="text/css" href="estilo/style.css">
</head>
<body>
   <section class="showcase">
         <div class="video-container">
            <video src="video/aviao.mp4" autoplay muted loop></video>
         </div>
         <div class="content">
            <h1>AH_BORDO</h1>
            <h3>Seja bem-vindo! Nosso principal objetivo é que você <br> tenha uma viagem inesquecível</h3>
            <a href="../index.php" class="btn">Acesse aqui</a>
         </div>
      </section>
      
      <div>
      <button class="butt" style="background-color: black" onClick="goFull()" id="myBut"><h4 style="color: white">Para melhor visualização<br> clique aqui</h4></button>
   </div>

      <section id="about">
         <h1>Sobre</h1>
         <p>
          Projeto realizado por uma equipe formada de 4 alunas de programação: Camila Machado, <p style="color: white">Carolina Souza, Emanuelle Almeida</p> <p> e Stefany Teles com a finalidade de conclusão do curso.
         </p></p>

         <h2>Nossas redes sociais</h2>

          <div class="social">   <!-- Acesso ao twitter e ao instagram -->
                     <a href="https://twitter.com/"><img src="../imagens/twitter.png" width="20"></a> 
                     <a href="https://www.instagram.com/"><img src="../imagens/instagram.png" width="20"></a> 
                     <a href="https://www.facebook.com/"><img src="../imagens/facebook.png" width="20"></a>  
               </div>         
      </section>
   <script>
     //variable to keep track of whether we are in Full Screen mode or not
     var fullScreen = false;
     
     //NEED THIS TO GO FULL SCREEn        2)
       var elem = document.body; // Make the body go full screen.
     
     //use for slideshow to keep track of which image is displayed
     var imgCount = 0;
     var totImgs = 3;
     
      //create image object
       var img = new Image();
     
     //call draw function to display image
       draw();
    

   function draw()
   {
       //uncomment if you want to have a slideshow
       /* imgCount++;
           if(imgCount>totImgs)
               imgCount=0;
       */
       
     
       
        img = new Image();
       //setup first image to display
       img.src = imgCount + ".jpg";
       //determine the correct width and height to use to fit current screen size
      img.onload = getSize;
        
       //update HTML with image to display
       document.getElementById("myImg").src=img.src;   
         
  
      }
      //keep calling draw function to update image and update image size
      var myVar = setInterval(draw, 100);
     
     
   
      function getSize(){
          var height = img.height;
          var width = img.width;
          var w = window.innerWidth;//size of browser window
          var h = window.innerHeight;
          //going with w above as width of our image 
          //calculate ratio
         //original width * new height / original height = new width;
         //original height * new width / original width = new height;
          var adjH = height * (w/width);
          var adjW = w;
          
          //don't want image going below scroll - below will make sure it doesn't
          
          if(adjH>h){
              var wRatio = h/adjH;  
              adjH = h;
              adjW = wRatio * w;
          }
      
         
     
          // add new image height
         document.getElementById('myImg').height = adjH;
         document.getElementById('myImg').width = adjW;
     }
     
      //added method below so we can make button go away when we go full screen
     function goFull(){
         //hide button - comment if not using button
         document.getElementById("myBut").style.visibility="hidden";

         requestFullScreen(elem);
     }
     
     //added method below for full screen 3)
     
     function requestFullScreen(element) {
         
         if(fullScreen==false){
             fullScreen=true;
    // Supports most browsers and their versions.
    var requestMethod = element.requestFullScreen || element.webkitRequestFullScreen || element.mozRequestFullScreen || element.msRequestFullScreen;

    if (requestMethod) { // Native full screen.
        requestMethod.call(element);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
     }else{
         fullScreen=false;
         
         if(document.cancelFullScreen){
          document.cancelFullScreen();
      } else if(document.exitFullScreen){
          document.exitFullScreen();
      } else if(document.mozCancelFullScreen){
          document.mozCancelFullScreen();
      } else if(document.webkitCancelFullScreen){
          document.webkitCancelFullScreen();
      } else if(document.msExitFullscreen){
          document.msExitFullscreen();
      }
         //Show Button - comment if not using button
          document.getElementById("myBut").style.visibility="visible";
         
     }//end of else
         
   }

//fullscreen final

    
    
   </script>
</body>
</html>