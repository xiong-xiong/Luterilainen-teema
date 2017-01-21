 <footer>

 <section class="footersection">
 <div class="nav-container"> 

  <div class="nav-bar-meta" id="footernav">
               <?php wp_nav_menu( array( 'theme_location' => 'meta-menu', 'container_class' => 'meta-nav', 'container' => 'nav' )); ?> 
            
        </div>

 </div> <!-- /nav container-->


        <?php wp_footer(); ?>
</section>
      </footer>



<!-- JAVASCRIPTIT -->

    <!--HAIRARI -->
    <script type="text/javascript">
   (function() {
      $("#otsikko1").click(function(){     
      $('#teksti1').slideToggle("slow"); 
      }); 
      $("#otsikko2").click(function(){     
      $('#teksti2').slideToggle("slow"); 
      }); 
      })();
    </script>


<!-- TOGGLE MIKÄ VAAN DIV JQUERY-->
 
    <script type="text/javascript">
      (function() {
      $('#tähän avattava suljettu elementti').hide();

      $('#tähän avausnappi id').on('click', function() {    
      $('#tähän mitä avataan').toggle('slow');
        });
       })();
    </script>

    <!--TÄLLÄ JQUERYLLA VOI VAIHTAA BUTTON TEKSTIN -->
    <script type="text/javascript">
      $('#button id').click(function(){
    var $this = $(this);
    $this.toggleClass('tähänbutton id ilman #');
    if($this.hasClass('tähänbutton id ilman #')){
        $this.text('Tähän uusi teksti');         
    } else {
        $this.text('Tähän alkuperäinen teksti');
    }
    });
    </script>

  </body>
</html>

