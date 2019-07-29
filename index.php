<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!----LINK---->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/script.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
<!----LINK---->


<!----SCRIPT----> 
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
<!----SCRIPT---->
    <title>TR Pronos</title>
</head>

<body>
    
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
       <source src="fond/particules.mp4" type="video/mp4">
       <img src="image/image1.jpg" width="100%" height="100%" >
    </video>

    <section id="particles-js" class="header">
            <nav class="navbar navbar-light">
              <h1>TR Pronos</h1>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                          <li class="nav-item active">
                                <a class="nav-link" href="#">Connexion <span class="sr-only"></span></a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="#">Inscription</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                          </li>
                    </ul>
              </div>
        </nav>

        <div id="corps">
             <div class="container">
                <div class="heading">
                   <img src="image/pronos.png" alt="TR Pronos">
                    <h1>Bienvenue sur TR Pronos</h1>
                </div>
                <div class="row">
                     <div class="btn col-sm-6 col-md-6 col-lg-6 col-xl-6">
                         <a href=""><p>Connexion</p></a>
                     </div>
                     <div class="btn col-sm-6 col-md-6 col-lg-6 col-xl-6">
                         <a href=""><p>Inscription</p></a>
                     </div>
                </div>
            </div>
        </div>    
   </section>
   <section id="footer">
       <footer class="fixed-bottom">
           <div class="container">
                  <div class="row">
                      <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p><a class="cond" href="">Jouer comporte des risques : endettement, isolement, dépendance. Pour être aidé, appelez le 09-74-75-13-13 (appel non surtaxé)</a></p>
                       </div>
                       
                       <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                           <p><a class="cond" href="">CGV / CGU - Politique de confidentialité</a></p>
                       </div>
                       
                       <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <p><a class="cond" href="">Contact</a></p>                       
                       </div>
                   </div>
               </div>
       </footer>    
   </section>
   
   
   
<!----SCRIPT PARTICULES---->

    <script src="js/particles.js"></script>
    <script src="app.js"></script>
   <script>
       var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
   </script>
   
<!----SCRIPT PARTICULES---->

</body>
</html>
