<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="assets/logo-image.png" type="image/png" />
    <title>Wellness Junction | Where Community Nurtures Wellness</title>
  </head>
  <body>
  <div class="loader">
    <img src="assets/logo-image.png" alt="Logo">
    <div class="loader-text">Loading...</div>
  </div>

  <div id="content" style="display: none;">   
    <header>
      <nav class="section__container nav__container">
        <a href="menu-page.php" >
          <div class="nav__logo">Wellness<span>Junction</span></div>
        </a>
        <button class="btn">Contact Us</button>
      </nav>
      <div class="section__container header__container">
        <div class="header__content">
          <h1>Providing an Exceptional Wellness Experience</h1>
          <p>
            Welcome to a place where human connection and mental wellness thrive. We
            believe in nurturing your mind and soul with compassion and understanding.
            Through supportive communities, expert guidance, and personalized care,
            we're committed to enhancing your well-being holistically.
          </p>
          <a href="login/index.php"><button class="btn">Get Started</button></a>
        </div>
        <div class="header__img">
          <!-- <img src="assets/header-image.png" alt="Header image"> -->
        </div>
      </div>
    </header>

    <section class="section__container service__container">
      <div class="service__header">
        <div class="service__header__content">
          <h2 class="section__header">Our Mental Wellness Services</h2>
          <p>
            Discover our holistic approach to mental well-being, designed to
            nurture your mind and promote inner peace.
          </p>
        </div>
        <button class="service__btn">Explore Services</button>
      </div>
      <div class="service__grid">
        <div class="service__card">
          <span><i class="ri-speak-line"></i></span>
          <h4>Mindfulness Sessions</h4>
          <p>
            Cultivate awareness and reduce stress with guided mindfulness sessions
            led by experienced practitioners.
          </p>
          <a href="https://www.mindful.org/meditation/mindfulness-getting-started/">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class="ri-heart-pulse-line"></i></span>
          <h4>Emotional Wellness Workshops</h4>
          <p>
            Engage in workshops that empower emotional resilience and foster
            healthier coping mechanisms.
          </p>
          <a href="https://www.nih.gov/health-information/emotional-wellness-toolkit">Learn More</a>
        </div>
        <div class="service__card">
          <span><i class="ri-community-line"></i></span>
          <h4>Supportive Community Groups</h4>
          <p>
            Join supportive community groups where you can connect with others
            facing similar challenges and share experiences.
          </p>
          <a href="https://www.helpguide.org/articles/therapy-medication/support-groups.htm">Learn More</a>
        </div>
      </div>
    </section>
    
    <section class="section__container about__container">
      <div class="about__content">
        <h2 class="section__header">About Us</h2>
        <p>
          Welcome to our mental wellness hub, dedicated to supporting your journey
          towards holistic well-being. We strive to empower individuals with the
          knowledge and tools to achieve mental clarity and emotional balance.
        </p>
        <p>
          Dive into our curated resources that explore various aspects of mental
          health and wellness. From understanding mental health conditions to
          practical tips for stress management and self-care, our articles aim to
          educate and inspire positive changes in your life.
        </p>
        <p>
          Explore actionable strategies and mindfulness techniques to enhance your
          mental resilience and cultivate a deeper sense of inner peace. Whether
          you're seeking guidance on mindfulness practices or strategies for
          improving sleep quality, we're here to support your mental wellness journey
          every step of the way.
        </p>
      </div>      
      <div class="about__image">
        <img src="assets/about.png" alt="about" />
      </div>
    </section>

    <section class="section__container why__container">
      <div class="why__image">
        <img src="assets/header-image.png" alt="why choose us" />
      </div>
      <div class="why__content">
        <h2 class="section__header">Why Choose Us</h2>
        <p>
          At Wellness Junction, we offer comprehensive mental health services, expert guidance and support, and prioritize confidentiality and respect for your healing journey.
        </p>
        <div class="why__grid">
          <span><i class="ri-heart-pulse-line"></i></span>
          <div>
            <h4>Comprehensive Mental Health Services</h4>
            <p>
              Access a wide range of mental health services tailored to meet your individual needs.
            </p>
          </div>
          <span><i class="ri-team-line"></i></span>
          <div>
            <h4>Guidance and Support</h4>
            <p>
              Benefit from expert guidance and compassionate support from our dedicated team.
            </p>
          </div>
          <span><i class="ri-shield-check-line"></i></span>
          <div>
            <h4>Confidentiality and Respect</h4>
            <p>
              Rest assured with our strict confidentiality standards and respectful environment.
            </p>
          </div>
        </div>
      </div>            
    </section>

    <section class="section__container doctors__container">
      <div class="doctors__header">
        <div class="doctors__header__content">
          <h2 class="section__header">Our Special Doctors</h2>
          <p>
            We take pride in our exceptional team of doctors, each a specialist
            in their respective fields.
          </p>
        </div>
        <!-- <div class="doctors__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div> -->
      </div>
      <div class="doctors__grid">
        <div class="doctors__card">
          <div class="doctors__card__image">
            <img src="assets/doctor-1.png" alt="doctor" />
            <div class="doctors__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Dr. Sheetal Patel</h4>
          <p>Health Counsellor</p>
        </div>
        <div class="doctors__card">
          <div class="doctors__card__image">
            <img src="assets/doctor-2.jpg" alt="doctor" />
            <div class="doctors__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Dr. Jayesh Pandya</h4>
          <p>Child Counsellor</p>
        </div>
        <div class="doctors__card">
          <div class="doctors__card__image">
            <img src="assets/doctor-3.jpg" alt="doctor" />
            <div class="doctors__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Dr. Mohan Patil</h4>
          <p>Education Councellor</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>Wellness<span>Junction</span></h3>
          <p>
            We are honored to be a part of your mental wellness journey, dedicated to
            providing compassionate, personalized, and exceptional care at every stage.
          </p>
          <p>
            Trust us to support your mental health, and let's collaborate to achieve
            positive outcomes for you and your loved ones.
          </p>          
        </div>
        <div class="footer__col">
          <h4>About Us</h4>
          <p>Home</p>
          <p>About Us</p>
          <p>Work With Us</p>
          <p>Our Blog</p>
          <p>Terms & Conditions</p>
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <p>Search Terms</p>
          <p>Advance Search</p>
          <p>Privacy Policy</p>
          <p>Suppliers</p>
          <p>Our Stores</p>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <p>
            <i class="ri-map-pin-2-fill"></i> 123, London Bridge Street, London
          </p>
          <p><i class="ri-mail-fill"></i> support@care.com</p>
          <p><i class="ri-phone-fill"></i> (+91) 3456 789</p>
        </div>
      </div>
      <div class="footer__bar">
        <div class="footer__bar__content">
          <p>Copyright © 2024 Wellness Junction. All rights reserved.</p>
          <div class="footer__socials">
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-heart-fill"></i></span>
            <span><i class="ri-twitter-fill"></i></span>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <script src="script.js"></script>

  </body>
</html>
