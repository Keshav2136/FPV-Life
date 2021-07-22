
      <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 f-col">
            <h3><?= lang('newsletter') ?></h3>
                  <div class="input-append newsletter-box text-center">
                      <form method="POST" id="subscribeForm">
                            <input type="text" class="full text-center" name="subscribeEmail" placeholder="<?= lang('email_address') ?>">
                            <button class="btn bg-gray" onclick="checkEmailField()" type="button"> <?= lang('subscribe') ?> <i class="fa fa-long-arrow-right"></i></button>
                      </form>
                  </div>
      </div>

<br>
<!--Color this bg-black
//Made with love by Keshav Sharma-->
<footer>
  Made with <b><span class="lnr lnr-heart"></span></b> by <i>
    <a href="https://twitter.com/Keshav2136" class="myname">Keshav Sharma</a></i>.
</footer>





<?php if ($this->session->flashdata('emailAdded')) { ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= lang('email_added') ?>');
        });
    </script>
    <?php
}
echo $addJs;
?>
</div>
</div>
<div id="notificator" class="alert"></div>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-confirmation.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap-select-1.12.1/js/bootstrap-select.min.js') ?>"></script>
<script src="<?= base_url('assets/js/placeholders.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
<script>
var variable = {
    clearShoppingCartUrl: "<?= base_url('clearShoppingCart') ?>",
    manageShoppingCartUrl: "<?= base_url('manageShoppingCart') ?>",
    discountCodeChecker: "<?= base_url('discountCodeChecker') ?>"
};
</script>
<script src="<?= base_url('assets/js/system.js') ?>"></script>
<script src="<?= base_url('templatejs/mine.js') ?>"></script>






<!--Jquery--><script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--Slick--><script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!--SVG Embedder--><script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>




<!--CODEPEN SIGNUP MODAL-->
<script type="text/javascript">
jQuery(document).ready(function($){
  var $form_modal = $('.cd-user-modal'),
    $form_login = $form_modal.find('#cd-login'),
    $form_signup = $form_modal.find('#cd-signup'),
    $form_forgot_password = $form_modal.find('#cd-reset-password'),
    $form_modal_tab = $('.cd-switcher'),
    $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
    $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
    $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
    $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
    $main_nav = $('.main-nav');

  //open modal
  $main_nav.on('click', function(event){

    if( $(event.target).is($main_nav) ) {
      // on mobile open the submenu
      $(this).children('ul').toggleClass('is-visible');
    } else {
      // on mobile close submenu
      $main_nav.children('ul').removeClass('is-visible');
      //show modal layer
      $form_modal.addClass('is-visible'); 
      //show the selected form
      ( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
    }

  });

  //close modal
  $('.cd-user-modal').on('click', function(event){
    if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
      $form_modal.removeClass('is-visible');
    } 
  });
  //close modal when clicking the esc keyboard button
  $(document).keyup(function(event){
      if(event.which=='27'){
        $form_modal.removeClass('is-visible');
      }
    });

  //switch from a tab to another
  $form_modal_tab.on('click', function(event) {
    event.preventDefault();
    ( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
  });

  //hide or show password
  $('.hide-password').on('click', function(){
    var $this= $(this),
      $password_field = $this.prev('input');
    
    ( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
    ( 'Hide' == $this.text() ) ? $this.text('Show') : $this.text('Hide');
    //focus and move cursor to the end of input field
    $password_field.putCursorAtEnd();
  });

  //show forgot-password form 
  $forgot_password_link.on('click', function(event){
    event.preventDefault();
    forgot_password_selected();
  });

  //back to login from the forgot-password form
  $back_to_login_link.on('click', function(event){
    event.preventDefault();
    login_selected();
  });

  function login_selected(){
    $form_login.addClass('is-selected');
    $form_signup.removeClass('is-selected');
    $form_forgot_password.removeClass('is-selected');
    $tab_login.addClass('selected');
    $tab_signup.removeClass('selected');
  }

  function signup_selected(){
    $form_login.removeClass('is-selected');
    $form_signup.addClass('is-selected');
    $form_forgot_password.removeClass('is-selected');
    $tab_login.removeClass('selected');
    $tab_signup.addClass('selected');
  }

  function forgot_password_selected(){
    $form_login.removeClass('is-selected');
    $form_signup.removeClass('is-selected');
    $form_forgot_password.addClass('is-selected');
  }

  //REMOVE THIS - it's just to show error messages 
  $form_login.find('input[type="submit"]').on('click', function(event){
    event.preventDefault();
    $form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
  });
  $form_signup.find('input[type="submit"]').on('click', function(event){
    event.preventDefault();
    $form_signup.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
  });


  //IE9 placeholder fallback
  //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
  if(!Modernizr.input.placeholder){
    $('[placeholder]').focus(function() {
      var input = $(this);
      if (input.val() == input.attr('placeholder')) {
        input.val('');
        }
    }).blur(function() {
      var input = $(this);
        if (input.val() == '' || input.val() == input.attr('placeholder')) {
        input.val(input.attr('placeholder'));
        }
    }).blur();
    $('[placeholder]').parents('form').submit(function() {
        $(this).find('[placeholder]').each(function() {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
          input.val('');
        }
        })
    });
  }
});

//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
  return this.each(function() {
      // If this function exists...
      if (this.setSelectionRange) {
          // ... then use it (Doesn't work in IE)
          // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
          var len = $(this).val().length * 2;
          this.setSelectionRange(len, len);
      } else {
        // ... otherwise replace the contents with itself
        // (Doesn't work in Google Chrome)
          $(this).val($(this).val());
      }
  });
};

jQuery('#cody-info ul li').eq(1).on('click', function(){
$('#cody-info').hide();
});
</script>
<!--CODEPEN SIGNUP MODAL-->

<br>


<!--Codepen NAVBAR-->
  <script>
  window.console = window.console || function(t) {};
</script>



<script>
if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");}
</script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script id="rendered-js">
const navbar = document.querySelector('.navbar-fp');

navbar.querySelector('.toggle').addEventListener('click', () => {

  navbar.classList.toggle('collapsed');

});

window.addEventListener('scroll', e => {

  let windowY = window.pageYOffset;

  let navbarHeight = document.querySelector('.navbar-fp').offsetHeight;

  if (windowY > navbarHeight) navbar.classList.add('sticky');else
  navbar.classList.remove('sticky');

});

//# sourceURL=pen.js
</script>

<!--Codepen Product Slider-->
<script type="text/javascript">
function createSlick(){  

  $(".slider").not('.slick-initialized').slick({
    centerMode: true,
      autoplay: true,
      dots: true,
  
      slidesToShow: 3,
      responsive: [{ 
          breakpoint: 768,
          settings: {
              dots: false,
              arrows: false,
              infinite: false,
              slidesToShow: 1,
              slidesToScroll: 1
          } 
      }]
  }); 
}

createSlick();

//Will not throw error, even if called multiple times.
$(window).on( 'resize', createSlick );

</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fd729bfa8a254155ab316b0/1epg7m5th';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>