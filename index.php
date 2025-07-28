<?php
// Functions remain the same

function getSkills() {
    return ["PHP", "MySQL", "JavaScript", "HTML", "CSS", "Python", "SQL", "Git", "Kali-Linux"];
}

function getProjects() {
    return [
        ["title" => "E-Commerce System", "desc" => "A modern E-Commerce website integrated with PHP, MySQL, and CSS."],
        ["title" => "RFID Door Access System", "desc" => "A secure door access system built with C++ and BLE33 Nano microcontroller, using RFID technology for real-time authentication and control."],
        ["title" => "Wi-Fi Enabled Mini Robot", "desc" => "Developed using ESP8266, this robot integrates wireless control via a custom web interface, ideal for IoT and robotics prototyping."]
    ];
}

function getContact() {
    return ["email" => "mrdanial2791@outlook.my", "github" => "https://github.com/danial-blackhat"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Professional portfolio of Wan Muhammad Danial - Programmer & Hardware Developer">
  <title>Wan Muhammad Danial | Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Fira+Code&display=swap" rel="stylesheet">
  <link rel="icon" href="image/top-icon.png" type="image/png">
  
    <!-- Viewport optimization for minimal sizing -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header with glass effect -->
  <header class="header-bg">
    <!-- Glass Navbar -->
    <nav class="navbar">
      <div class="container">
        <a href="#" class="logo">"Strategize. Develop. Scale."</a>
        <div class="nav-links">
          <a href="#about" class="nav-link">About</a>
          <a href="#skills" class="nav-link">Skills</a>
          <a href="#projects" class="nav-link">Projects</a>
          <a href="#contact" class="nav-link">Contact</a>
          <a href="<?php echo htmlspecialchars(getContact()['github']); ?>" class="github-btn" target="_blank">
            <i class="fab fa-github"></i> GitHub
          </a>
        </div>
        <button class="hamburger" aria-label="Menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="about">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Wan Muhammad Danial</h1>
          <h2 class="hero-subtitle">Programmer & Hardware Developer</h2>
          <p class="hero-text">I create digital solutions that bridge software and hardware, delivering efficient and innovative systems.</p>
          <div class="hero-buttons">
            <a href="#projects" class="btn">View My Work</a>
          </div>
        </div>
      </div>
    </section>
  </header>
  
  <!-- About Section -->
  <section class="section about-section" id="about-section" style="background: url('image/web1.jpeg') center/cover no-repeat; position: relative;">
    <div class="container" style="position: relative; z-index: 1;">
      <h2 class="section-title">About Me</h2>
      <div class="about-content">
        <div class="about-text">
          <p>I'm a dedicated and innovative programmer with a strong foundation in web development, backend architecture, and scripting. I thrive on solving real-world problems through clean, scalable, and high-performance solutions.</p>
          <p>Whether it's optimizing systems or crafting seamless digital experiences, I bring both passion and precision to every project I take on.</p>
        </div>
        <div class="about-image">
          <img src="image/pic_2.jpeg" alt="About Me Photo">
        </div>
      </div>
    </div>
  </section>

<!-- Skills Section -->
<section class="section" id="skills" style="position: relative; background-image: url('image/skillsbg.jpeg'); background-size: cover; background-position: center; background-attachment: fixed;">
  <div class="skills-bg-overlay"></div>
  <div class="container" style="position: relative; z-index: 1;">
    <h2 class="section-title">My Expertise</h2>
    <div class="skills-grid">
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fab fa-php"></i>
        </div>
        <h3 class="skill-name">PHP</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fas fa-database"></i>
        </div>
        <h3 class="skill-name">MySQL</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fab fa-js"></i>
        </div>
        <h3 class="skill-name">JavaScript</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fab fa-html5"></i>
        </div>
        <h3 class="skill-name">HTML</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fab fa-css3-alt"></i>
        </div>
        <h3 class="skill-name">CSS</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fab fa-python"></i>
        </div>
        <h3 class="skill-name">Python</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fas fa-server"></i>
        </div>
        <h3 class="skill-name">SQL</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fab fa-git-alt"></i>
        </div>
        <h3 class="skill-name">Git</h3>
      </div>
      <div class="skill-card glass">
        <div class="skill-icon">
          <i class="fas fa-terminal"></i>
        </div>
        <h3 class="skill-name">Kali Linux</h3>
      </div>
    </div>
  </div>
</section>

  <!-- Projects Section -->
  <section class="section projects-section" id="projects" style="background: url('image/web2.jpeg') center/cover no-repeat; position: relative;">
    <div class="container" style="position: relative; z-index: 1;">
      <h2 class="section-title">Featured Projects</h2>
      <div class="projects-grid">
        <?php foreach(getProjects() as $project): ?>
          <div class="project-card">
            <div class="project-header">
              <i class="fas fa-folder-open project-icon"></i>
              <div class="project-links">
                <?php if ($project['title'] === 'E-Commerce System'): ?>
                  <a href="https://github.com/danial-blackhat/e-commerce-system" target="_blank"><i class="fab fa-github"></i></a>
                <?php elseif ($project['title'] === 'RFID Door Access System'): ?>
                  <a href="https://github.com/danial-blackhat/systemdoor-access" target="_blank"><i class="fab fa-github"></i></a>
                <?php elseif ($project['title'] === 'Wi-Fi Enabled Mini Robot'): ?>
                  <a href="https://github.com/danial-blackhat/esp8266-quadruped-robot" target="_blank"><i class="fab fa-github"></i></a>
                <?php else: ?>
                  <a href="<?php echo htmlspecialchars(getContact()['github']); ?>" target="_blank"><i class="fab fa-github"></i></a>
                <?php endif; ?>
              </div>
            </div>
            <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
            <p class="project-desc"><?php echo htmlspecialchars($project['desc']); ?></p>
            <div class="project-footer">
              <?php if ($project['title'] === 'E-Commerce System'): ?>
                <a href="https://github.com/danial-blackhat/e-commerce-system" target="_blank" class="project-link">View Project</a>
              <?php elseif ($project['title'] === 'RFID Door Access System'): ?>
                <a href="https://github.com/danial-blackhat/systemdoor-access" target="_blank" class="project-link">View Project</a>
              <?php elseif ($project['title'] === 'Wi-Fi Enabled Mini Robot'): ?>
                <a href="https://github.com/danial-blackhat/esp8266-quadruped-robot" target="_blank" class="project-link">View Project</a>
              <?php else: ?>
                <a href="<?php echo htmlspecialchars(getContact()['github']); ?>" target="_blank" class="project-link">View Project</a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="section contact-section" id="contact" style="background: url('image/pic_3.jpeg') center/cover no-repeat; position: relative;">
    <div style="position: absolute; inset: 0; background: rgba(27,28,30,0.85); backdrop-filter: blur(2px) saturate(120%); z-index: 0;"></div>
    <div class="container" style="position: relative; z-index: 1;">
      <h2 class="section-title">Get In Touch</h2>
      <div class="contact-content">
        <div class="contact-info">
          <?php $contact = getContact(); ?>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>"><?php echo htmlspecialchars($contact['email']); ?></a>
          </div>
          <div class="contact-item">
            <i class="fab fa-github"></i>
            <a href="<?php echo htmlspecialchars($contact['github']); ?>" target="_blank">github.com/danial-blackhat</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Footer -->
<footer class="footer" style="background-image: url('image/footer.jpeg');">
  <div class="container">
    <div class="social-links">
      <a href="<?php echo htmlspecialchars(getContact()['github']); ?>" target="_blank"><i class="fab fa-github"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>"><i class="fas fa-envelope"></i></a>
    </div>
    <p class="copyright">&copy; <?php echo date('Y'); ?> Wan Muhammad Danial. All rights reserved.</p>
  </div>
</footer>

  <!-- Scroll to Top Button -->
<button id="scrollToTopBtn" class="scroll-to-top" aria-label="Scroll to top">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 19V5M12 5L6 11M12 5L18 11" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

  <script src="script.js"></script>
  <script>
  // Scroll to Top Button Logic
  const scrollBtn = document.getElementById('scrollToTopBtn');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
      scrollBtn.classList.add('show');
    } else {
      scrollBtn.classList.remove('show');
    }
  });
  scrollBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  </script>
</body>
</html>