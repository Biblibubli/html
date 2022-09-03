
<?php
    include_once 'header.php'
?>

<head>
    <link rel="stylesheet" href="css/login.css" media="screen">
    <meta name="generator" content="login page">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="login">
    <meta property="og:type" content="website">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>

<section class="u-clearfix u-section-1">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-form u-login-control u-form-1">
      <h5>Log In</h5>
      <form action="includes/login.inc.php" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
        <div class="u-form-group u-form-name">
          <label class="u-label">Username *</label>
          <input type="text" name="username" placeholder="Enter your Username" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
        </div>
        <div class="u-form-group u-form-password">
          <label class="u-label">Password *</label>
          <input type="password" name="pwd" placeholder="Enter your Password" class="u-border-grey-30 u-input u-input-rectangle u-input-2" required=""><br>
        </div>
        <div class="u-align-left u-form-group u-form-submit">
            <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">
            Login</a>
          <input type="submit" value="submit" class="u-form-control-hidden">
        </div>
      </form>
    </div>
    <a href="signup.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-1-base u-btn-3">Don't have an account? Sign up now</a>
  </div>
</section>

    <?php
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput"){
                echo "<P>Fill in all fields, try again!</P>";
            }

            if ($_GET["error"] == "wronglogin"){
                echo "<P>Username & Password do not match!</P>";
            }

        }
    ?>

</section>

<?php
    include_once 'footer.php'
?>
