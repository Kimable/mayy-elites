<!--Footer goes here-->
<footer class="page-footer cyan darken-4">
  <div class="container">
    <div class="row">
      <div class="col l5 s12">
        <h5 class="white-text">We are here for you</h5>
        <p class="grey-text text-lighten-4">Lets build your future together.</p>
      </div>
      <!-- Stages of learning -->
      <div class="col l4 s12">
        <h5 class="white-text">Stages of Learning</h5>
        <ul>
          <li>
            <a class="grey-text text-lighten-3" href="primary.php">Primary</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="secondary.php">Lower Secondary</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="secondary.php">Upper Secondary</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="advanced.php">Advanced</a>
          </li>
        </ul>
      </div>
      <!-- Explore pages -->
      <div class="col l3 s12">
        <h5 class="white-text">Explore</h5>
        <ul>
          <li>
            <a class="grey-text text-lighten-3" href="about">About us</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="contact">Contact us</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="homeschooling">Homeschooling</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="tuition">Tuition</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="programming">Computer Science</a>
          </li>
          <li>
            <a class="grey-text text-lighten-3" href="fees">School Fees</a>
          </li>
        </ul>
      </div>

    </div>

    <div class="section">
      <div class="">
        <p>
          <span id="copy"></span>
          <span class="social right">
            <span class="fontawesome-icons"><a href="https://www.facebook.com/mayyelites"><i class="fab fa-facebook"></i></a></span>
            <span class="fontawesome-icons"><a href="https://wa.me/+254719849455"><i class="fab fa-whatsapp"></i></a></span>
            <span class="fontawesome-icons"><a href="https://www.instagram.com/mayyelites/"><i class="fab fa-instagram"></i></a></span>
          </span>
        </p>
      </div>
    </div>
</footer>

<!--JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/glider.min.js"></script>
<script src="js/app.js"></script>
<script>
  // Dynamic year
  const copy = document.getElementById("copy")
  const year = new Date().getFullYear()
  copy.innerHTML = `Mayy Elites &copy; ${year}`
</script>
</body>

</html>