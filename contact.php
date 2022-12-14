<?php include('templates/header.php') ?>
<?php include('templates/nav.php') ?>

<!--section 1-->
<div class="contact-sec-1">
  <div class="container white-text center">
    <h1>Talk To Us</h1>
    <P>We pay more than the usual attention</P>
  </div>
</div>
<!--section 2-->
<div class="contact-sec-2">
  <div class="container row section">
    <div class="col l6 s12 m6">
      <div class="card center">
        <div class="card-content">
          <div class="card-icon">
            <a href="tel: +254719849455"><i class="material-icons medium black-text">phone</i></a>
          </div>
          <span class="card-title">Call us</span>
          <p>Our phone is always on 24/7</p>
        </div>
        <div class="card-action cyan darken-4">
          <a href="tel: +254719849455" class="white-text">Call Us Now</a>
        </div>
      </div>
    </div>
    <div class="col l6 s12 m6">
      <div class="card center">
        <div class="card-content">
          <div class="card-icon">
            <a href="mailto: info@mayyelites.com"><i class="material-icons medium black-text">email</i></a>
          </div>
          <span class="card-title">Email us</span>
          <p>We typically reply within one hour</p>
        </div>
        <div class="card-action cyan darken-4">
          <a href="mailto: info@mayyelites.com" class="white-text">Send Email Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Contact Form-->
<div class="container contact-form">
  <h4 class="section center">Send us a quick Message</h4>
  <form action="send.php" method="POST">
    <div class="row">
      <div class="input-field col l6 m6 s12">
        <i class="material-icons prefix">account_circles</i>
        <input id="name" name="name" type="text" class="validate" required />
        <label for="name">Name</label>
      </div>
      <div class="input-field col l6 m6 s12">
        <i class="material-icons prefix">email</i>
        <input id="email" name="email" type="email" class="validate" required />
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col l6 m6 s12">
        <i class="material-icons prefix">phone</i>
        <input id="phone" name="phone" type="text" class="validate" />
        <label for="phone">Phone Number</label>
      </div>
      <div class="input-field col l6 m6 s12">
        <i class="material-icons prefix">topic</i>
        <input id="title" name="subject" type="text" class="validate" />
        <label for="title">Message Title </label>
      </div>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
      <label for="icon_prefix2">Message</label>
    </div>
    <div class="submit-btn center">
      <button class="btn-large waves-effect waves-light cyan darken-4" type="submit" name="action">
        send message
        <i class="material-icons left">send</i>
      </button>
    </div>
  </form>
</div>
<?php include('templates/footer.php') ?>