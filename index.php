<?php include('templates/header.php') ?>
<?php include('templates/nav.php') ?>
<!--Important content goes here-->
<main>
  <!-- Hero Section -->
  <div class="hero-content">
    <div class="container hero-container">
      <div class="left-col">
        <h1>Virtual Learning with Distinction</h1>
        <p>
          Access our online school from anywhere in the world at any time.
          What we offer at Mayy Elites is an educational experience like no other.
          It is a learning journey that offers all a physical school can offer and much more.
        </p>

        <p>
          Our students are not only taught but shown practically how to be responsible,
          hardworking, resilient, confident, self-reliant and much more.
          This enables them to handle real life challenges effectively and efficiently.
        </p>

        <p>
          From live classrooms to student-teacher and student-student interaction,
          we make learning not only fun but instil principles that are transferable to adulthood.
          All our classes are recorded and are easily accessible to our
          students for revision purposes, tracking learning progress or just catching up.
        </p>
        <p>
          Join us today and become a part of our ever valued fast-growing
          online family.
        </p>
        <div class="section">
          <a href="about.php" class="btn pink darken-3">Learn More</a>
          <a href="contact.php" class="btn white black-text">Talk to us</a>
        </div>
      </div>
      <div class="right-col">
        <img src="img/happy-girl-black.jpg" alt="" />
      </div>
    </div>
  </div>
  <!-- Our Curriculum -->
  <div class="container expect section">
    <div class="left-col">
      <img src="img/caie.jpg" alt="Cambridge Curriculum Logo" />
    </div>
    <div class="right-col">
      <h3>Curriculum of Choice</h3>
      <p>
        We offer the Cambridge Assessment International Curriculum (CAIE formerly CIE)
        for Primary Level (Key Stages 1 and 2), Lower Secondary (Key Stage 3),
        upper Secondary (Key Stage 4) and Advanced Level (Key stage 5).
      </p>
      <p>The Cambridge curriculum is widely accepted and all major universities in the world
        readily take in students from this curriculum,
        making it one of the best curricula in the world.
      </p>
      <p>
        We put each child's needs first before formulating a customized
        program. Talk to us today and get expert advice on this subject.
      </p>
    </div>
  </div>
  <!-- Dynamic enroll content -->
  <?php include('templates/enroll.php') ?>

  <!-- Stages of study -->
  <div class="container stages">
    <h2 class="center">Stages of Learning</h2>
    <div class="row">
      <!-- Primary level -->
      <div class="col s12 l4 m4 primary">
        <img src="img/Computer-young-cool-student.jpg" alt="Primary Student">
        <p>Key Stage 1 & 2</p>
        <h3>Primary Level</h3>
        <p>
          This is the most crucial stage in a learner's journey. We strive to inculcate
          best educational practices so that the learner can start out strong.
        </p>
        <div class="btn-link">
          <a href="primary.php" class="btn pink darken-3">Learn More</a>
        </div>
      </div>
      <!-- Secondary -->
      <div class="col s12 l4 m4 secondary">
        <img src="img/slider3.jpg" alt="Secondary Student">
        <p>Key Stage 3 & 4</p>
        <h3>Secondary Level</h3>
        <p>
          Secondary level is considered to be the most exciting stage of learning. At this stage the
          learner begins to think for himself which is highly encouraged.
        </p>
        <div class="btn-link">
          <a href="secondary.php" class="btn pink darken-3">Learn More</a>
        </div>
      </div>

      <!-- Advanced -->
      <div class="col s12 l4 m4 advanced">
        <img src="img/group-discussion.jpg" alt="Primary Student">
        <p>Key Stage 5</p>
        <h3>Advanced Level</h3>
        <p>
          This stage give learners the
          skills that are necessary for the job market. Soft skills are highly emphasised.
        </p>
        <div class="btn-link">
          <a href="advanced.php" class="btn pink darken-3">Learn More</a>
        </div>
      </div>

    </div>
  </div>
  <!--Services Section-->
  <div class="services section">
    <div class="container row">
      <h1 class="center">What we offer</h1>
      <div class="col l4 s12 m6">
        <div class="card large center">
          <div class="card-content">
            <div class="card-icon">
              <a href=""><i class="material-icons medium black-text">school</i></a>
            </div>
            <span class="card-title">Homeschooling</span>
            <p>
              Our Homeschooling curriculum is prepared to suit the needs of
              each student, considering the unique abilities each student
              has. <br />
              <br />
              We encourage talent, independent thinking, collaboration and
              self drive.
            </p>
          </div>
          <div class="card-action cyan darken-4 white-text">
            <a href="homeschooling.php" class="white-text">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col l4 s12 m6">
        <div class="card large center">
          <div class="card-content">
            <div class="card-icon">
              <a href=""><i class="material-icons medium black-text">science</i></a>
            </div>
            <span class="card-title">Holiday Tuition</span>
            <p>
              Students may need tuition for a number of reasons: perhaps the
              teacher just went too fast, or the student may want to read
              ahead, or maybe he/she missed a number of classes, hence the
              need to recover. <br />
              <br />
              For whatever reason, we are ready to help. Our content is
              offered in an easy to understand manner.
            </p>
          </div>
          <div class="card-action cyan darken-4">
            <a href="tuition.php" class="white-text">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col l4 s12 m6">
        <div class="card large center">
          <div class="card-content">
            <div class="card-icon">
              <a href=""><i class="material-icons medium black-text">code</i></a>
            </div>
            <span class="card-title">Programming and Graphic Design</span>
            <p>
              This is offered to students of all ages in an effort to
              encourage technology innovation to our learners. Technology is
              changing how we do things.<br /><br />
              We offer these lessons free of charge to all students
              enrolled to our homeschooling curriculum.
            </p>
          </div>
          <div class="card-action cyan darken-4">
            <a href="programming.php" class="white-text">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subjects -->
  <?php include("templates/secondary-subjects.php") ?>
  <!--Testimonial-->
  <div class="testimonial white-text">
    <div class="container">
      <div class="glider-contain">
        <div class="glider container">
          <!--First Student-->
          <div class="student">
            <img src="img/Matthew kanyua.jpeg" class="responsive-img circle" alt="" />
            <h3 class="student-name">Matthew Kanyua</h3>
            <h4 class="student-role">IGCSE Student</h4>
            <div class="content">
              <p>
                Homeschooling has been the best experience for me. I receive
                personalized attention which was extremely lacking in my
                previous school. My homeschooling teachers Kelvin and Mabel
                are very kind in offering the support I need. My grades have
                greatly improved.
              </p>
            </div>
          </div>
          <!--second Student-->
          <div class="student">
            <img src="img/Vansh Aggarwal.jpg" class="responsive-img circle" alt="" />
            <h3 class="student-name">Vansh Aggarwal</h3>
            <h4 class="student-role">IGCSE Student</h4>
            <div class="content">
              <p>
                Sir Kelvin helped me do very well in Mathematicts after
                having failed for for many years. He helped me understand
                hard concepts in an easy manner which contributed to my
                success. He is really a good teacher.
              </p>
            </div>
          </div>
          <!--Third Student-->
          <div class="student">
            <img src="img/female.png" class="responsive-img circle" alt="" />
            <h3 class="student-name">Kathi Macharia</h3>
            <h4 class="student-role">A Level Student</h4>
            <div class="content">
              <p>
                Kelvin from Mayy Elites helped me improve my grade in Maths
                and Chemistry greately. He is a really good teacher who
                takes time to understand the student
              </p>
            </div>
          </div>
        </div>
        <div class="glider-prev" style="padding-left: 20px">
          <i class="fas fa-arrow-alt-circle-left"></i>
        </div>
        <div class="glider-next" style="padding-right: 20px">
          <i class="fas fa-arrow-alt-circle-right"></i>
        </div>
        <!-- <button class="glider-prev">??</button>
            <button class="glider-next">??</button> -->
        <div id="dots"></div>
      </div>
    </div>
  </div>
</main>

<?php include('templates/footer.php') ?>