<?php 
if(isset($_POST['action'])){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $learner = htmlspecialchars($_POST["learner-name"]);
    $msg = htmlspecialchars($_POST["message"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $level = htmlspecialchars($_POST["level"]);

    $to = "info@mayyelites.com";
    $body = "";
    

    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Phone: ".$phone. "\r\n";
    $body .= "Learner's Name: ".$learner. "\r\n";
    $body .= "Level of Study: ".$level. "\r\n";
    $body .= "Message: ".$msg. "\r\n";

    $headers = "From: Student Enroll Form <contact@mayyelites.com>". "\r\n";
    $headers .= "Reply-To: ".$name. "<" .$email. ">". "\r\n";

    if(mail($to, $subject, $body, $headers)) {
        header("Location: thanks.php");
    } else{
        header("Location: error.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<meta name="description" content="Virtual learning for homeschooling students who want to stand out among the masses." />
 <!--page title-->
 <title>Mayy Elites | Real definition of Homeschooling and Tutoring</title>
</head>
<body>
<?php include('templates/nav.php') ?>

<!--section 1-->
<div class="contact-sec-1">
      <div class="container white-text center">
        <h1>Enroll to Learn with The Best</h1>
        <P>You have access to hundreds of high end learning materials when you 
            register with us.
        </P>
      </div>
    </div>
 <!--Enroll Form-->
 <div class="container contact-form">
      <h4 class="section center">Enroll Form</h4>
      <form action="enroll-form.php" method="POST">
        <div class="row">
        <!-- Name Field -->
          <div class="input-field col l6 s12">
            <i class="material-icons prefix">account_circles</i>
            <input
              id="name"
              name="name"
              type="text"
              class="validate"
              required
            />
            <label for="name">Full Name</label>
          </div>
          <!-- Email Field -->
          <div class="input-field col l6 s12">
            <i class="material-icons prefix">email</i>
            <input
              id="email"
              name="email"
              type="email"
              class="validate"
              required
            />
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
            <!-- Phone Field -->
          <div class="input-field col l6 s12">
            <i class="material-icons prefix">phone</i>
            <input id="phone" name="phone" type="text" class="validate" />
            <label for="phone">Phone Number</label>
          </div>
          <!-- Message Title Field -->
          <div class="input-field col l6 s12">
            <i class="material-icons prefix">account_circles</i>
            <input id="title" name="learner-name" type="text" class="validate" />
            <label for="title">Learner's Name</label>
          </div>
        </div>
        <div class="row">
        <!-- Level of Study -->
        <div class="input-field col l6 s12">
            <i class="material-icons prefix">topic</i>
            <input id="level" name="level" type="text" class="validate" />
            <label for="level">Level of study</label>
          </div>
        <!-- Message Field -->
        <div class="input-field col l6 s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea
            id="icon_prefix2"
            name="message"
            class="materialize-textarea"
          ></textarea>
          <label for="icon_prefix2">Any Comments</label>
        </div>
        </div>
        <div class="submit-btn center">
          <button
            class="btn-large waves-effect waves-light cyan darken-4"
            type="submit"
            name="action"
          >
            send message
            <i class="material-icons left">send</i>
          </button>
        </div>
      </form>
    </div>
<?php include('templates/footer.php') ?>
</html>