<?php include 'header.html'; ?>

    <section class="tabla">
      <div class="contenedor">
        <table>
          <thead>
            <tr>
              <th>Modelo</th>
              <th>Precio</th>
              <th>Descripción</th>
              <th>Modelo</th>
              <th>Precio</th>
              <th>Descripción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Invie classic</td>
              <td>$100000</td>
              <td>Una guitarra muy pro</td>
              <td>Invie classic</td>
              <td>$100000</td>
              <td>Una guitarra muy pro</td>
            </tr>
            <tr>
              <td>Invie classic</td>
              <td>$100000</td>
              <td>Una guitarra muy pro</td>
              <td>Invie classic</td>
              <td>$100000</td>
              <td>Una guitarra muy pro</td>
            </tr>
            <tr>
              <td>Invie classic</td>
              <td>$100000</td>
              <td>Una guitarra muy pro</td>
              <td>Invie classic</td>
              <td>$100000</td>
              <td>Una guitarra muy pro</td>
            </tr>
          </tbody>
        </table>
      </div>
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
        });
        //lazy loading

    </script>
  </body>
</html>
