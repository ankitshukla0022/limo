<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Majesty Limousine Services</title>

  <?php include ('includes/top-header.php') ?>


</head>

<body>

  <!-- ========== header ============ -->
  <?php include ('includes/header.php') ?>

  <main id="contact-page">

    <section class="inner-banner">
      <div class="container">
        <h3>Contact Us</h3>
      </div>
    </section>

    <section class="contact-main section-padding">
      <div class="container">
        <div class="contact-details aos-init aos-animate" data-aos="fade-left" data-aos-duration="2000">
          <h4>Get In Touch</h4>
          <p>At Majesty Limousine Services, we provide luxury transportation with exceptional customer service. Contact us at <a href="tel:+17805991222">(780) 599-1222</a>  or email <a href="mailto:majestylimousine@gmail.com">majestylimousine@gmail.com</a> to book your stylish and comfortable journey. Our professional chauffeurs and premium fleet are ready for every occasion.</p>

          <div class="details-items">

            <div class="box call">
              <div class="icon call-icon">
                <i class="fa-solid fa-phone-volume"></i>
              </div>
              <div class="content call-contact">
                <h5>Phone No.</h5>
                <span><a href="tel:+17805991222">(780) 599-1222</a></span>
              </div>
            </div>


            <div class="box email">
              <div class="icon email-icon">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="content email-contact">
                <h5>E-mail</h5>
                <span><a href="mailto:majestylimousine@gmail.com">majestylimousine@gmail.com</a></span>
              </div>
            </div>

          </div>
        </div>
        <div class="contact-form aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000">
          <form action="" method="post">
            <input type="text" name="name" placeholder="Your Name">
            <div class="box"> <input type="tel" name="phone" placeholder="Phone Number">
              <input type="email" name="email" placeholder="E-mail">
            </div>

            <input type="text" name="subject" placeholder="Subject">

            <textarea name="description" cols="30" rows="10" placeholder="Message"></textarea>
            <input name="btn_submit" type="submit">
          </form>
        </div>
      </div>
    </section>

  </main>

  <!-- ====== footer ===== -->

  <?php include ('includes/footer.php') ?>

</body>

</html>