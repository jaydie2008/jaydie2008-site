<?php
$status = $_GET["status"] ?? "";
$errors = [];
if (!empty($_GET["errors"])) {
  $errors = explode("|", urldecode($_GET["errors"]));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact – Jayden Niepce</title>
  <link rel="icon" href="assets/logo-jayden-niepce.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <style>
    .melding {
      padding: 1rem 1.25rem;
      border-radius: 14px;
      margin-bottom: 1.2rem;
      font-size: 0.95rem;
    }
    .melding-succes {
      background: rgba(0, 255, 150, 0.08);
      border: 1px solid rgba(0, 255, 150, 0.25);
      color: #7fffcb;
    }
    .melding-fout {
      background: rgba(255, 80, 80, 0.08);
      border: 1px solid rgba(255, 80, 80, 0.25);
      color: #ffaaaa;
    }
    .melding ul {
      margin: 0.4rem 0 0 1.2rem;
      padding: 0;
    }
    .melding ul li {
      margin-top: 0.3rem;
    }
  </style>
</head>
<body>

<nav>
  <span class="nav-logo">JN</span>
  <a href="index.php">Home</a>
  <a href="about.php">About Me</a>
  <a href="projects.php">Projects</a>
  <a href="cv.php">CV</a>
  <a href="kd.php">KD</a>
  <a href="contact.php" class="active">Contact</a>
  <a href="assets/Jayden_Niepce_CV.pdf" download class="btn-dl">Download CV</a>
</nav>

<main>

  <section class="contact-hero">
    <p class="hud-tag">Contact</p>
    <h1>Get in touch</h1>
    <p class="intro">Send me a message using the form or one of my socials.</p>
  </section>

  <div class="contact-grid">

    <div class="contact-form-wrap">
      <h2>Send a message</h2>

      <?php if ($status === "sent"): ?>
        <div class="melding melding-succes">
          ✓ Your message has been sent! I will get back to you as soon as possible.
        </div>
      <?php elseif ($status === "error" && !empty($errors)): ?>
        <div class="melding melding-fout">
          Please check the following:
          <ul>
            <?php foreach ($errors as $error): ?>
              <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form action="https://formspree.io/f/mlgvneqa" method="POST">
        <div class="form-group">
          <label for="naam">Name</label>
          <input type="text" id="naam" name="naam" placeholder="Your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>
        </div>
        <div class="form-group">
          <label for="bericht">Message</label>
          <textarea id="bericht" name="bericht" rows="6" placeholder="Write your message here..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>

    <div class="contact-info">
      <h2>Socials</h2>
      <ul class="socials-list">
        <li>
          <span class="social-label">GitHub</span>
          <a href="https://github.com/jaydie2008" target="_blank">github.com/jaydie2008</a>
        </li>
        <li>
          <span class="social-label">LinkedIn</span>
          <a href="https://www.linkedin.com/in/jayden-niepce-52277b410/" target="_blank">linkedin.com/in/jayden</a>
        </li>
        <li>
          <span class="social-label">Email</span>
          <a href="mailto:jayden2008.niepce@gmail.com">jayden2008.niepce@gmail.com</a>
        </li>
      </ul>
    </div>

  </div>

</main>

<footer>
  <p>Made by &mdash; Jayden Niepce &mdash; · Landgraaf, NL</p>
</footer>

<script src="js/script.js"></script>

</body>
</html>