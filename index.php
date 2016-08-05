<?php include 'header.html'; ?>

      <div class="contenedor">
        <h1 class="titulo">Guitarras <span>invie</span>sibles</h1><!-- titulo -->
        <h3 class="title-a">Sé la estrella de rock que siempre quisiste ser</h3><!-- resumen -->
        <a class="button" href="#guitarras">Conoce mas</a><!-- boton -->
      </div>
    </section>
    <section id="guitarras" class="guitarras contenedor"> <!-- guitarras -->
      <h2>Nuestra guitarras</h2><!-- titulo -->
      <article class="guitarra"> <!-- guitarra 1 -->
        <img class="derecha" data-src="images/invie-acustica.png" alt="Guitarra Invie Acustica" width="350"/>
        <div class="contenedor-guitarra-a">
          <h3 class="title-b">Invie Acustica</h3>
          <ol>
            <li>Estilo vintage</li>
            <li>Madera pura</li>
            <li>Incluye estuche invisible de aluminio</li>
          </ol>
        </div>
      </article>
      <article class="guitarra b"> <!-- guitarra 2 -->
        <img class="izquierda" data-src="images/invie-classic.png" alt="Guitarra Invie Classic" width="350"/>
        <div class="contenedor-guitarra-b">
          <h3 class="title-b">Invie Classic</h3>
          <ol>
            <li>Estilo vintage</li>
            <li>Liviana</li>
            <li>Inicia tu camino como Rockstar</li>
          </ol>
        </div>
      </article>
      <article class="guitara">
        <div class="video-responsive-contenedor">
          <iframe class="video-responsive-src" width="560" height="315" src="https://www.youtube.com/embed/_9cipamUCtM" frameborder="0" allowfullscreen></iframe>
        </div>
      </article>
    </section>

<?php include 'footer.html'; ?>
    
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/blazy/1.6.2/blazy.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
     <script type="text/javascript">
     /* var consultaresize = window.matchMedia('(max-width: 350px)');
      consultaresize.addListener(mediaQuery);*/
      var $body = document.body;
      var $menu = document.getElementById("menu-id");
      var $burguer = document.getElementById("burguer-button-id");      
      $burguer.addEventListener('touchstart',presionabotonburguer);

      var gestos = new Hammer($body);
      gestos.on('swipeleft', quitarmenu);
      gestos.on('swiperight', ponermenu);
      /*function mediaQuery(){
        if(consultaresize.matches){           
          $burguer.addEventListener('touchstart',presionabotonburguer);          
          console.log('Si se cumple la condicion');
        }
        else{
          $burguer.removeEventListener('touchstart',presionabotonburguer);                
          console.log('No se cumple la condicion');
        }
      }*/
          // $burguer.addEventListener('touchstart',presionabotonburguer);   
        function quitarmenu() {
          $menu.classList.remove('active');    
          ponerquitarburguer();
        }
        function ponermenu() {
          $menu.classList.add('active'); 
          ponerquitarburguer();         
        }
        function ponerquitarburguer() {
          if($menu.classList.contains('active') == true){
            $burguer.classList.add('icon-cancel');  
          }
          else{
            $burguer.classList.remove('icon-cancel');
          }      
        }
        function presionabotonburguer(){                         
          $menu.classList.toggle('active'); 
          ponerquitarburguer();
          
        }       
        var blazy = new Blazy({
          //options
          selector:'img'
          breakpoints: [{
              , src: 'data-src'
          }]
          , success: function(element){
                    setTimeout(function(){
                    // We want to remove the loader gif now.
                    // First we find the parent container
                    // then we remove the "loading" class which holds the loader image
                    var parent = element.parentNode;
                    parent.className = parent.className.replace(/\bloading\b/,'');
                      }, 200);
                    }
      });
      //lazy loading

    </script>
  </body>
</html>
