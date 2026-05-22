<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - Jayden Niepce</title>
  <meta name="description" content="CV of Jayden Niepce, a student interested in software and front-end development.">
  <link rel="icon" href="assets/logo-jayden-niepce.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cv.css">
</head>
<body>
  <nav>
    <span class="nav-logo">JN</span>
    <a href="index.php" class="active">Home</a>
    <a href="about.php">About Me</a>
    <a href="projects.php">Projects</a>
    <a href="cv.php">CV</a>
    <a href="kd.php">KD</a>
    <a href="contact.php">Contact</a>
    <a href="assets/Jayden_Niepce_CV.pdf" download class="btn-dl">Download CV</a>
  </nav>

  <main class="cv">
    <header class="header">
      <div class="header-content">
        <div>
          <h1>Jayden Niepce</h1>
          <p class="functie">Student</p>
          <address>
            Limburg · <a href="tel:060611696903">06-11696903</a> ·
            <a href="mailto:Jayden2008.niepce@gmail.com">Jayden2008.niepce@gmail.com</a>
          </address>
        </div>
        <img class="profile-photo" src="assets/images/Profiel.jpg" alt="Profile photo of Jayden Niepce">
      </div>
    </header>

    <section aria-labelledby="profiel-heading">
      <h2 id="profiel-heading">Profile</h2>
      <p>
        Motivated beginner with a passion for coding. Strong in HTML, CSS and JavaScript,
        focused on building user-friendly and clear interfaces.
      </p>
    </section>

    <section aria-labelledby="werkervaring-heading">
      <h2 id="werkervaring-heading">Work Experience</h2>
      <article>
        <h3>Shelf Stocker</h3>
        <p class="periode"><time datetime="2024-06">06/2024</time> – <time datetime="2025-02">02/2025</time></p>
        <ul>
          <li>Restocked shelves and kept products organized at Albert Heijn.</li>
          <li>Helped maintain a tidy and welcoming store layout.</li>
          <li>Worked with colleagues to ensure customers could quickly find what they needed.</li>
        </ul>
      </article>

      <article>
        <h3>Pool Attendant</h3>
        <p class="periode"><time datetime="2025-04">04/2025</time> – present</p>
        <ul>
          <li>Assist visitors in and around the pool at Van Tongeren.</li>
          <li>Support visitors and supervise to ensure safety and calm operation.</li>
        </ul>
      </article>
    </section>

    <section aria-labelledby="opleiding-heading">
      <h2 id="opleiding-heading">Education</h2>
      <article>
        <h3>MBO/ICT · Vista College</h3>
        <p class="periode"><time datetime="2025">2025</time> – <time datetime="2026">2026</time></p>
        <p>Specialization: Software Development</p>
      </article>
      <article>
        <h3>Middle School · Eijkhagen</h3>
        <p class="periode"><time datetime="2025">2021</time> – <time datetime="2026">2025</time></p>
      </article>
      <article>
        <h3>Primary School · Wereldwijs</h3>
        <p class="periode"><time datetime="2025">2013</time> – <time datetime="2026">2021</time></p>
      </article>
    </section>

    <section aria-labelledby="vaardigheden-heading">
      <h2 id="vaardigheden-heading">Skills</h2>
      <ul class="skills">
        <li>HTML5</li>
        <li>CSS3</li>
        <li>JavaScript</li>
        <li>C#</li>
        <li>PHP</li>
        <li class="skill skill-python">
          <details>
            <summary>Python</summary>
            <ul class="skill-dropdown">
              <li>Print statements and comments</li>
              <li>Variables and data types</li>
              <li>Arithmetic operations</li>
              <li>Processing user input</li>
              <li>String interpolation with f-strings</li>
              <li>If, elif and else</li>
              <li>Comparison and logical operators</li>
              <li>Using random numbers</li>
              <li>Loops with while and for</li>
            </ul>
          </details>
        </li>
        <li>Git &amp; GitHub</li>
        <li>Dutch (native), English (proficient)</li>
      </ul>
    </section>

    <section aria-labelledby="projecten-heading">
      <h2 id="projecten-heading">Projects</h2>
      <article>
        <h3>Snake Game (Python)</h3>
        <ul>
          <li>Built a Snake game in Python using Tkinter.</li>
          <li>Implemented logic for movement, scoring, collisions and game over.</li>
          <li>Added controls using arrow keys and WASD.</li>
        </ul>
      </article>

      <article>
        <h3>Mees Kantine</h3>
        <ul>
          <li>Designed and built a website to showcase the Mees Kantine project.</li>
          <li>Used a responsive layout and clear navigation.</li>
          <li>Link: <a href="https://github.com/jaydie2008">github.com/jaydie2008</a></li>
        </ul>
      </article>
    </section>

    <section aria-labelledby="certificaten-heading">
      <h2 id="certificaten-heading">Certifications</h2>
      <ul>
        <li>Currently working towards the AZ-900 certification.</li>
      </ul>
    </section>
  </main>

  <footer>
    <p>Made by &mdash; Jayden Niepce &mdash;  · Landgraaf, NL</p>
  </footer>
</body>
</html>
