<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>
    Booking Details
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>Registration Form</h2>
      </div>
      <div class="row clearfix">
        <div class="">
          <form method="POST" action="register.php">
            <?php include('errors.php'); ?>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
              <input type="text" name="phone" placeholder="Mobile Number" required />
            </div>

            <div class="row clearfix">
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="fname" placeholder="First Name" />
                </div>
              </div>
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="lname" placeholder="Last Name" required />
                </div>
              </div>
            </div>
            <div class="input_field">
              <textarea style="width: 100%;" name="address" placeholder="Addresss"></textarea>

            </div>
            <div class="input_field radio_option">
              <input type="radio" name="radiogroup1" id="rd1" value="Male">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" id="rd2" value="Female">
              <label for="rd2">Female</label>
            </div>
            <div class="input_field select_option">
              <select name="cycle" id="cycle">
                <option>Select Number of cycles required</option>
                <option value="1"> 1</option>
                <option value="2"> 2</option>
                <option value="3"> 3</option>
                <option value="4"> 4</option>
                <option value="5"> 5</option>
                <option value="6"> 6</option>
                <option value="7"> 7</option>
                <option value="8"> 8</option>
              </select>
              <div class="select_arrow"></div>
            </div>

            <div class="input_field checkbox_option">
              <input type="checkbox" id="cb1">
              <label for="cb1">I agree with terms and conditions</label>
            </div>

            <input class="button" type="submit" name="reg_user" value="Proceed to Payment" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <p class="credit">&copy; Pink Pedals</p>
</body>

</html>