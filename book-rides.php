<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Rides | Majesty Limousine Services</title>

  <?php include ('includes/top-header.php') ?>

</head>

<body>

  <!-- ========== header ============ -->
  <?php include ('includes/header.php') ?>

  <main id="book-rides">

    <section class="inner-banner">
      <div class="container">
        <h3>Book A Rides</h3>
      </div>
    </section>

    <section class="book-a-ride section-padding">
      <div class="container">
        <div class="main-book-ride">
          <form action="#" method="Post">

            <div class="box">
              <label for="fname">Full Name</label>
              <input type="text" placeholder="Your Name" name="name" id="fname" required>
            </div>

            <div class="box-2">

              <div class="box-2-item">
                <label for="phoneNo">Phone No.</label>
                <input type="tel" name="phone" id="phoneNo" placeholder="Enter Your Number" required>
              </div>

              <div class="box-2-item">
                <label for="phoneNo">Email</label>
                <input type="mail" name="email" id="phoneNo" placeholder="Enter Your Email I'd" required>
              </div>

            </div>


            <div class="box-2">

              <div class="box-2-item">
                <label for="pickup-passengers">Passengers</label>
                <input type="text" name="passenger" id="pickup-passengers" placeholder="passengers" required>
              </div>

              <div class="box-2-item">
                <label for="services">Choose Service</label>
                <select id="services" name="service">
                  <option value="">-- Select Service --</option>
                  <option value="Wedding">Wedding</option>
                  <option value="Graduations">Graduations</option>
                  <option value="Airport Shuttle">Airport Shuttle</option>
                  <option value="Corporate">Corporate</option>
                  <option value="Birthday">Birthday</option>
                  <option value="Bachelor">Bachelor</option>
                  <option value="Special Nights Out">Special Nights Out
                  </option>
                  <option value="Sporting Events">Sporting Events</option>
                  <option value="Concerts">Concerts</option>
                  <option value="Hourly Limo">Hourly Limo</option>
                </select>
              </div>

            </div>

            <h4>Pick Up Address</h4>


            <div class="box-2">

              <div class="box-2-item">
                <label for="pickup-address">Address</label>
                <input type="text" id="pickup-address" name="address" placeholder="Address" required>
              </div>

              <div class="box-2-item">
                <label for="pickup-city">City</label>
                <input type="text" id="pickup-city" name="city" placeholder="City" required>
              </div>

            </div>

            <div class="box-2">

              <div class="box-2-item">
                <label for="pickup-state">State</label>
                <input type="text" id="pickup-state" name="state" placeholder="State" required>
              </div>

              <div class="box-2-item">
                <label for="pickup-zip">Zip code</label>
                <input type="text" id="pickup-zip" name="zipcode" placeholder="Zip" required>
              </div>

            </div>

            <div class="box-2">


              <div class="box-2-item">
                <label for="pickup-date">Date</label>
                <input type="date" id="pickup-date" name="date" placeholder="Pick up Date" required>
              </div>

              <div class="box-2-item">
                <label for="pickup-time">Time</label>
                <input type="time" id="pickup-time" name="time" placeholder="Pick up Time" required>
              </div>


            </div>


            <h4>Drop Address</h4>


            <div class="box-2">

              <div class="box-2-item">
                <label for="pickup-address">Address</label>
                <input type="text" id="pickup-address" name="addresses" placeholder="Address" required>
              </div>

              <div class="box-2-item">
                <label for="pickup-city">City</label>
                <input type="text" id="pickup-city" name="cities" placeholder="City" required>
              </div>

            </div>

            <div class="box-2">

              <div class="box-2-item">
                <label for="pickup-state">State</label>
                <input type="text" id="pickup-state" name="states" placeholder="State" required>
              </div>

              <div class="box-2-item">
                <label for="pickup-zip">Zip code</label>
                <input type="text" id="pickup-zip" name="zips" placeholder="Zip" required>
              </div>

            </div>

            <div class="box">
              <input type="submit" name="btn_submit" value="SUBMIT">
            </div>

          </form>
        </div>
      </div>
    </section>

  </main>

  <!-- ====== footer ===== -->

  <?php include ('includes/footer.php') ?>

</body>

</html>