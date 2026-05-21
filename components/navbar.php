<?php
$activePage = $activePage ?? '';
?>
<nav class="site-nav">
  <a class="brand" href="index.html" aria-label="Go to home page">
    <span class="brand-mark">JN</span>
    <span class="brand-copy">
      <strong>Jayden Niepce</strong>
      <span>Software Developer</span>
    </span>
  </a>

  <div class="nav-links">
    <a class="nav-link <?php echo $activePage === 'home' ? 'is-active' : ''; ?>" href="index.html">Home</a>
    <a class="nav-link <?php echo $activePage === 'about' ? 'is-active' : ''; ?>" href="about.html">About</a>
    <a class="nav-link <?php echo $activePage === 'projects' ? 'is-active' : ''; ?>" href="projects.php">Projects</a>
    <a class="nav-link <?php echo $activePage === 'cv' ? 'is-active' : ''; ?>" href="cv.html">CV</a>
    <a class="nav-link <?php echo $activePage === 'kd' ? 'is-active' : ''; ?>" href="kd.html">KD</a>
    <a class="nav-link <?php echo $activePage === 'contact' ? 'is-active' : ''; ?>" href="contact.html">Contact</a>
    <a class="nav-cta" href="assets/Jayden_Niepce_CV.pdf" download>Download CV</a>
  </div>
</nav>