<hr>
 <footer>

 <section class="footersection">
 <div class="nav-container footernavcontainer"> 

  <div class="nav-bar-meta" id="footernav">
               <?php wp_nav_menu( array( 'theme_location' => 'meta-menu', 'container_class' => 'meta-nav', 'container' => 'nav' )); ?> 
            
        </div>

 </div> <!-- /nav container-->


        <?php wp_footer(); ?>
</section>
<section>
<div class="container">
<div class="row fhakurow">
  <center><?php dynamic_sidebar("footerhaku"); ?> </center>
  </div>
</div>
</section>

<section> 
 <div class="container">
<div class="row">

    <div class="col-md-6">
    <?php dynamic_sidebar("footer1"); ?>
    </div>
    <div class="col-md-6">
    <?php dynamic_sidebar("footer2"); ?>
    </div>
  </div>
</div>
</section>
      </footer>
<section class="palkki">
<span>Ulkoasu: Simo Santala |</span>  <span>Wordpress kehitys: <a href="http://juhastenroos.fi" target="_blank">Juha Stenroos </a></span>
</section>



<!-- JAVASCRIPTIT -->

<!-- scroll IF single and mobile-->
<?php if (is_singular('post')) {
echo '<script>
var mq = window.matchMedia( "(max-width: 768px)" );
if (mq.matches) {
  $(document).ready(function()
      {
        $("html,body").animate({scrollTop: 400}, 1000);
      })
}
</script>';
}?>

<!-- sivutusnavin tekstit ikoneiksi-->
    <script type="text/javascript">
$(document).ready(function(){
     $(".prev").html('<i class="fa fa-chevron-left"></i>');
     $(".next").html('<i class="fa fa-chevron-right"></i>');
});
</script>


  
    <script type="text/javascript">
   (function() {
      $("#open-sidenav").click(function(){     
      $('.sidenavwrapper').slideToggle("slow"); 
      }); 
      $("#otsikko2").click(function(){     
      $('.teksti2').slideToggle("slow"); 
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

    <!--Sivunavin dropdownit 
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
</script>-->




    <!--TÄLLÄ JQUERYLLA VOI VAIHTAA BUTTON TEKSTIN 
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
    </script>-->
<script type="text/javascript">
    var docWidth = document.documentElement.offsetWidth;

[].forEach.call(
  document.querySelectorAll('*'),
  function(el) {
    if (el.offsetWidth > docWidth) {
      console.log(el);
    }
  }
);
</script>

  </body>
</html>

