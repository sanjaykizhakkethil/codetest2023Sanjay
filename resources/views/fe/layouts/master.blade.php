<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Blog Post</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <meta name="theme-color" content="#ffffff" />
  <meta name="robots" property="robots" content="index,follow">


  <!-- <?php if (env('APP_ENV') == 'production') { ?>
    <meta name="robots" property="robots" content="index,follow">
  <?php } else { ?>
    <meta name="robots" property="robots" content="noindex,nofollow">
  <?php } ?> -->
 
  <link rel="canonical" href="{{ url()->current() }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  @yield('css')


 

</head>

<body>


  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="js/jquery.slimmenu.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $('.slimmenu').slimmenu({
      resizeWidth: '992',
      collapserTitle: 'Main Menu',
      animSpeed: 'medium',
      indentChildren: true,
      childrenIndenter: '&raquo;'
    });
    $('.collapse-button').click(function() {
      $(this).toggleClass("crotate");
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#btn_enquiry").click(function() {
        var name = $("#enquiry_name").val();
        var email = $("#enquiry_email").val();
        var phone = $("#enquiry_phone").val();
        var message = $("#enquiry_message").val();
        if (name == '') {
          Swal.fire({
            title: 'Error!',
            text: 'Please Enter Name',
            icon: 'error',
          })
          return false;
        }

        if (email == '') {
          Swal.fire({
            title: 'Error!',
            text: 'Please Enter Email',
            icon: 'error',
          })
          return false;
        }


        if (country == '') {
          Swal.fire({
            title: 'Error!',
            text: 'Please Enter Country',
            icon: 'error',
          })
          return false;
        }

        if (phone == '') {
          Swal.fire({
            title: 'Error!',
            text: 'Please Enter Phone',
            icon: 'error',
          })
          return false;
        }

        if (message == '') {
          Swal.fire({
            title: 'Error!',
            text: 'Please Enter Message',
            icon: 'error',
          })
          return false;
        }


        grecaptcha.execute('{{env('
          RECAPTCHA_KEY ')}}', {
            action: 'contact'
          }).then(function(token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;

          $("#bookingform").submit();
        });


        return true;
      })
    })
  </script>
  <!--  bookingenquiry -->

  <script>
    $(document).ready(function() {

      function applyswalfire(text) {
        Swal.fire({
          title: 'Error!',
          text: text,
          icon: 'error',
        })

      }

      $("#apply_now").click(function() {

        var apply_name = $('#apply_name').val();
        var apply_email = $('#apply_email').val();
        var apply_country = $('#apply_country').val();
        var apply_phone = $('#apply_phone').val();
        var apply_message = $('#apply_message').val();

        if (apply_name == "") {
          applyswalfire('Please enter the Name');
          return false;
        }

        if (apply_email == "") {
          applyswalfire('Please enter the Email');
          return false;
        }

        if (apply_phone == "") {
          applyswalfire('Please enter the Phone');
          return false;
        }

        if (apply_country == "") {
          applyswalfire('Please enter the Country');
          return false;
        }

        if (apply_message == "") {
          applyswalfire('Please enter the Message');
          return false;
        }
        $('#apply_now_form').submit();
        return true;
      });
    });
  </script>
  <!-- Apply now -->


</body>

</html>