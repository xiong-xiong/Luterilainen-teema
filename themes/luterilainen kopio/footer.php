 <footer>

 <section class="footersection">
 <div class="nav-container footernavcontainer"> 

  <div class="nav-bar-meta" id="footernav">
               <?php wp_nav_menu( array( 'theme_location' => 'meta-menu', 'container_class' => 'meta-nav', 'container' => 'nav' )); ?> 
            
        </div>

 </div> <!-- /nav container-->


        <?php wp_footer(); ?>
</section>
      </footer>



<!-- JAVASCRIPTIT -->




<!--Estää sisältöä liikkumasta navin kasvusta huolimatta -->
   <script type="text/javascript">
$(function() {
  $('.main-nav ul li').hover(function() {
    $('.nav-container').css('margin-bottom', '18px');
  }, function() {
    // on mouseout, reset the background colour
    $('.nav-container').css('margin-bottom', '20px');
  });
});
</script>
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


<!-- TOGGLE MIKÄ VAAN DIV JQUERY 
    <script type="text/javascript">
      (function() {
      $('#menu-opetusnavi li ul').hide();

      $('.sivudrop').on('click', function() {    
      $('#menu-opetusnavi li ul').toggle('slow');
        });
       })();
    </script>-->

    <!--Sivunavin dropdownit -->
 <script type="text/javascript">
$('.sidedd').click(function () {

                $('#menu-opetusnavi li').children('ul').slideUp('slow');

                if ($(this).children('ul').is(":visible")) {

                    $(this).children('ul').slideUp('slow');
                     $(this).children('a').removeClass( "open-drop" );

                }

                else {

                    $(this).children('ul').slideDown('slow');
                    $(this).children('a').addClass( "open-drop" );
                }

            });
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

