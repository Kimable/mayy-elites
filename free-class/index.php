<?php
include('formHandler.php');

$successClass = $errorClass = '';

if ($successMsg !== '') {
  $successClass = 'successMsg';
}

if ($errorMsg !== '') {
  $errorClass = 'errorMsg';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Free Math Class</title>
</head>

<body>
  <div class="container">
    <section class="main-content">

      <h1>Free Math Class</h1>
      <img src="img/student-girl.webp" alt="Student doing homework" />
      <p>
        Access a completely free one on one math class for any topic that may
        be bugging you. Interact with your teacher and ask any question you
        have. Please fill this form to help us reach you.
      </p>
    </section>

    <!-- Form Goes Here -->
    <div class="contact-form">
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div class="<?php echo $successClass; ?>"><?php echo $successMsg; ?></div>
        <div class="<?php echo $errorClass; ?>"><?php echo $errorMsg; ?></div>
        <div class="input-container">
          <label for="name">Your Name<span>*</span></label>
          <input type="text" name="name" id="name" value="<?php echo $name; ?>" placeholder="e.g John Kamau" required />
        </div>
        <div class="input-container">
          <label for="email">Your Email Address<span>*</span></label>
          <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="e.g jk123@gmayl.com" required />
        </div>
        <div class="input-container">
          <label for="phone">Your Phone Number</label>
          <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="e.g 0719 849 455" />
        </div>
        <div class="input-container">
          <label for="class-or-grade">Your Grade or Class<span>*</span></label>
          <input type="text" name="grade" id="grade" value="<?php echo $grade; ?>" required placeholder="e.g Class 6" />
        </div>
        <div class="input-container">
          <label for="math-topic">Math Topic You Need Assistance In <span>*</span></label>
          <input type="text" name="mathTopic" id="mathTopic" value="<?php echo $mathTopic; ?>" placeholder="e.g Quadratic Equations" required />
        </div>
        <div class="input-container">
          <label for="msg">Any Additional Notes?</label>
          <textarea name="msg" id="msg" class="materialize-textarea"><?php echo $msg; ?></textarea>
        </div>
        <button class="btn" name="submit" type="submit">Request Class</button>
      </form>
    </div>

    <section class="meet-teacher">
      <h2>Meet Your Teacher</h2>
      <img src="img/Kelvin(1).jpg" alt="" />
      <p><strong>Kelvin Kimani</strong></p>
      <p>Math and Computer Science Tutor</p>
    </section>

    <div class="faq">
      <h2>Frequently Asked Questions</h2>
      <div class="question"></div>
    </div>

    <section class="modal"></section>
  </div>

  <script src="script.js"></script>
</body>

</html>