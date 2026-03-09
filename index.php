<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gilded Foundry | Custom Metal Casting & Art Fabrication</title>
  <meta name="description" content="Gilded Foundry specializes in custom metal casting, bespoke art installations, architectural metalwork, and restoration projects in New York.">
  <meta name="author" content="Gilded Foundry">
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: rgb(38, 216, 103);
      --primary-light-color: rgb(132, 224, 166);
      --primary-dark-color: rgb(26, 151, 72);
      --secondary-warm-color: rgb(220, 180, 140);
      --accent-color: rgb(220, 59, 161);
      --hero-bg-color: rgb(26, 26, 46);
      --text-light-color: rgb(255, 255, 255);
      --text-dark-color: rgb(33, 37, 41);
      --border-radius: 12px;
      --section-spacing: 3rem;
      --hover-effect: translateY(-8px);
      --default-transition: transform 0.3s ease-in-out;
    }

    body {
      font-family: 'Merriweather', serif;
      font-weight: 400;
      color: var(--text-dark-color);
      background-color: var(--text-light-color); /* Ensures contrast */
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 700;
      color: var(--hero-bg-color); /* Darker for headings */
    }

    .btn-primary-gradient {
      background: linear-gradient(45deg, var(--primary-dark-color), var(--primary-color), var(--primary-light-color));
      border: none;
      color: var(--text-light-color);
      border-radius: var(--border-radius);
      padding: 0.75rem 1.75rem;
      transition: var(--default-transition);
    }

    .btn-primary-gradient:hover {
      transform: var(--hover-effect);
      opacity: 0.9;
      color: var(--text-light-color);
    }

    .btn-outline-light {
      border: 2px solid var(--text-light-color);
      color: var(--text-light-color);
      border-radius: var(--border-radius);
      padding: 0.75rem 1.75rem;
      transition: var(--default-transition);
    }

    .btn-outline-light:hover {
      background-color: rgba(255, 255, 255, 0.1);
      transform: var(--hover-effect);
      color: var(--text-light-color);
    }

    .navbar-brand, .nav-link {
      color: var(--hero-bg-color) !important;
      font-weight: 700;
    }
    .navbar-brand:hover, .nav-link:hover {
      color: var(--primary-dark-color) !important;
    }

    .sticky-top {
      background-color: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(5px);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      z-index: 1030;
    }

    section {
      padding: var(--section-spacing) 0;
      position: relative;
    }

    .card {
      border-radius: var(--border-radius);
      overflow: hidden;
      border: none;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: var(--default-transition);
    }

    .card:hover {
      transform: var(--hover-effect);
    }

    .card-gradient-bg {
      background: linear-gradient(135deg, var(--primary-light-color), var(--primary-color));
      color: var(--text-light-color);
    }

    .card-gradient-bg h3, .card-gradient-bg p {
      color: var(--text-light-color);
    }

    .icon-container {
      border: 2px solid currentColor;
      border-radius: 50%;
      fill: none;
      background: transparent;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 64px;
      height: 64px;
      margin-bottom: 1rem;
    }
    .icon-container svg {
      width: 32px;
      height: 32px;
      stroke: currentColor;
      stroke-width: 2;
    }

    #hero {
      background-color: var(--hero-bg-color);
      color: var(--text-light-color);
      padding-top: 8rem;
      padding-bottom: 8rem;
      position: relative;
      overflow: hidden;
    }

    #hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: var(--hero-bg-color);
      clip-path: ellipse(150% 100% at 50% 100%);
      transform: translateY(50%);
      z-index: 1; /* Ensure it's above other content but below hero content */
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .process-step {
      position: relative;
    }

    .process-step::before {
      content: '';
      position: absolute;
      top: 50%;
      left: calc(50% - 10px);
      width: 20px;
      height: 20px;
      background-color: var(--primary-color);
      border-radius: 50%;
      transform: translateY(-50%);
      z-index: 1;
    }

    /* Connector lines for process steps */
    .process-steps-container {
      position: relative;
      padding-bottom: 2rem;
    }

    .process-steps-container .row {
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }

    @media (min-width: 768px) {
      .process-steps-container .col-md-4:nth-child(even) .process-step-content {
        order: -1; /* For alternating image/text */
      }
      .process-steps-container .col-md-4:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 25%;
        left: calc(100% - 1.5rem); /* Adjust as needed */
        width: 3rem; /* Length of the connecting line */
        height: 2px;
        background-color: var(--accent-color);
        z-index: 0;
        transform: translateY(-50%);
      }
      .process-steps-container .col-md-4:nth-child(odd):not(:last-child)::after {
        clip-path: path("M0 0 C 30 0, 30 15, 60 15"); /* Example of a curving line */
        height: 30px; /* Adjust height for curve */
        top: calc(25% - 15px);
        left: calc(100% - 3rem);
      }
      .process-steps-container .col-md-4:nth-child(even):not(:last-child)::after {
        clip-path: path("M0 15 C 30 15, 30 0, 60 0"); /* Reverse curve */
        height: 30px; /* Adjust height for curve */
        top: calc(25% - 15px);
        left: calc(100% - 3rem);
      }
    }

    .process-diagram-image {
      border-radius: var(--border-radius);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .portfolio-item {
      position: relative;
      overflow: hidden;
      border-radius: var(--border-radius);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: var(--default-transition);
    }

    .portfolio-item:hover {
      transform: var(--hover-effect);
    }

    .portfolio-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 1.5rem;
      color: var(--text-light-color);
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .portfolio-item:hover .portfolio-overlay {
      opacity: 1;
    }

    .carousel-item {
      background-color: var(--primary-light-color);
      border-radius: var(--border-radius);
      padding: 2rem;
      color: var(--text-light-color);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0, 0, 0, 0.3);
      border-radius: 50%;
      padding: 1.5rem;
    }

    #contact .form-card {
      background: linear-gradient(135deg, var(--secondary-warm-color), var(--accent-color));
      color: var(--text-light-color);
      border-radius: var(--border-radius);
      padding: 2.5rem;
    }

    #contact .form-card .form-control,
    #contact .form-card .form-select {
      border-radius: 8px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      background-color: rgba(255, 255, 255, 0.1);
      color: var(--text-light-color);
      margin-bottom: 1rem;
    }
    #contact .form-card .form-control::placeholder,
    #contact .form-card .form-select {
      color: rgba(255, 255, 255, 0.7);
    }
    #contact .form-card .form-control:focus,
    #contact .form-card .form-select:focus {
      border-color: var(--text-light-color);
      box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
      background-color: rgba(255, 255, 255, 0.2);
    }

    #contact .contact-info-block {
      background-color: var(--hero-bg-color); /* Dark background */
      color: var(--text-light-color);
      padding: 2.5rem;
      border-radius: var(--border-radius);
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    #contact .contact-info-block::before {
      content: '';
      position: absolute;
      top: -50px;
      left: -50px;
      width: 200px;
      height: 200px;
      background: var(--accent-color);
      border-radius: 50%;
      opacity: 0.1;
      filter: blur(40px);
    }

    #contact .contact-info-block::after {
      content: '';
      position: absolute;
      bottom: -50px;
      right: -50px;
      width: 150px;
      height: 150px;
      background: var(--primary-color);
      border-radius: 50%;
      opacity: 0.1;
      filter: blur(30px);
    }

    footer {
      background-color: var(--text-dark-color); /* Dark contrasting background */
      color: var(--text-light-color);
      padding: var(--section-spacing) 0 1rem 0;
      position: relative;
    }
    footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 50px; /* Adjust height for the curve */
      background: var(--text-dark-color);
      clip-path: ellipse(150% 100% at 50% 0%); /* Organic curving top border */
      transform: translateY(-50%);
      z-index: 1;
    }
    footer .container {
        position: relative;
        z-index: 2;
    }

    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: var(--hero-bg-color);
        color: var(--text-light-color);
        padding: 1rem 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 10000;
        box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
        flex-wrap: wrap;
    }
    .cookie-consent p {
        margin-bottom: 0;
        flex-grow: 1;
        padding-right: 1rem;
    }
    .cookie-consent button {
        background-color: var(--primary-color);
        color: var(--text-light-color);
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .cookie-consent button:hover {
        background-color: var(--primary-dark-color);
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Gilded Foundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#process">Process</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item ms-lg-3">
              <a class="btn btn-primary-gradient" href="#contact">Get a Quote</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<main>
    <section id="hero" class="position-relative overflow-hidden">
      <div class="container hero-content">
        <div class="row align-items-center">
          <div class="col-lg-7 text-center text-lg-start mb-4 mb-lg-0">
            <h1 class="display-3 fw-bold mb-4" style="color: var(--text-light-color);">Masterful Metal Casting & Bespoke Fabrication at Gilded Foundry</h1>
            <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8);">From intricate art installations to enduring architectural metalwork, we bring your vision to life in bronze, aluminum, and iron.</p>
            <div class="d-flex flex-column flex-md-row justify-content-center justify-content-lg-start gap-3">
              <a class="btn btn-primary-gradient btn-lg" href="#portfolio">Explore Our Work</a>
              <a class="btn btn-outline-light btn-lg" href="#contact">Consult With Us</a>
            </div>
          </div>
          <div class="col-lg-5 text-center">
            <img src="images/hero-molten-pour.jpeg" alt="Molten metal being poured into a custom cast" class="img-fluid rounded-4 shadow-lg" width="576" height="576" style="transform: translateY(0); transition: transform 0.3s ease;">
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <h2 class="text-center mb-3">Our Specialized Services</h2>
        <p class="text-center lead mb-5 text-muted">Merging traditional casting techniques with modern fabrication tech to serve artists, architects, and designers.</p>

        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 p-4 card-gradient-bg text-center">
              <div class="icon-container border-secondary mx-auto mb-3" style="color: var(--text-light-color);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.8,2.1c-0.4-0.1-0.9,0.1-1.1,0.5l-2.4,5.8C8.8,8.8,8.2,9.2,7.5,9.2H2.3C1.9,9.2,1.6,9.6,1.7,10v4.2c0.1,0.4,0.5,0.7,0.8,0.7h5.2c0.7,0,1.4,0.3,1.7,0.9l2.4,5.8c0.2,0.4,0.7,0.6,1.1,0.5c0.4-0.1,0.7-0.5,0.5-0.9l-2-4.8H18c0.4,0,0.8-0.3,0.9-0.7v-4.2c0.1-0.4-0.1-0.9-0.5-0.9h-5.2c-0.7,0-1.4-0.3-1.7-0.9L10.3,2.5C10.2,2.1,9.8,1.9,9.4,2.1z"/></svg>
              </div>
              <h3 class="h5 mb-3">Custom Metal Casting</h3>
              <p class="mb-0">Using sand casting and lost-wax methods to produce high-fidelity bronze, aluminum, and iron components.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 p-4 card-gradient-bg text-center">
              <div class="icon-container mx-auto mb-3" style="color: var(--text-light-color);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2.5C7.3,2.5,3.5,6.3,3.5,11c0,2.1,0.8,4.1,2.2,5.6l-2.4,4c-0.2,0.3-0.1,0.8,0.2,1.1c0.3,0.3,0.8,0.4,1.1,0.2l4-2.4c1.5,1.4,3.5,2.2,5.6,2.2c4.7,0,8.5-3.8,8.5-8.5S16.7,2.5,12,2.5z M12,20.5c-4.4,0-8-3.6-8-8c0-2.4,1.1-4.7,2.9-6.3L12,5.2l5.1,5.1c0.7-0.1,1.4,0.2,1.9,0.7c0.5,0.5,0.7,1.2,0.6,1.9C19.2,16.9,15.9,20.5,12,20.5z M12,4.5c4.1,0,7.5,3.4,7.5,7.5c0,1.3-0.3,2.5-0.9,3.6L12,7.2L6.1,13.1c-0.6-1.1-0.9-2.3-0.9-3.6C5.5,7.9,8.4,4.5,12,4.5z M12,10.5l-5,5L12,20.5l5-5L12,10.5z"/></svg>
              </div>
              <h3 class="h5 mb-3">Bespoke Art Installations</h3>
              <p class="mb-0">Collaborating with sculptors and artists to engineer, scale, and assemble monumental civic and private art.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 p-4 card-gradient-bg text-center">
              <div class="icon-container mx-auto mb-3" style="color: var(--text-light-color);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2.5c-4.7,0-8.5,3.8-8.5,8.5c0,2.1,0.8,4.1,2.2,5.6l-2.4,4c-0.2,0.3-0.1,0.8,0.2,1.1c0.3,0.3,0.8,0.4,1.1,0.2l4-2.4c1.5,1.4,3.5,2.2,5.6,2.2c4.7,0,8.5-3.8,8.5-8.5S16.7,2.5,12,2.5z M12,20.5c-4.4,0-8-3.6-8-8c0-2.4,1.1-4.7,2.9-6.3L12,5.2l5.1,5.1c0.7-0.1,1.4,0.2,1.9,0.7c0.5,0.5,0.7,1.2,0.6,1.9C19.2,16.9,15.9,20.5,12,20.5z M12,4.5c4.1,0,7.5,3.4,7.5,7.5c0,1.3-0.3,2.5-0.9,3.6L12,7.2L6.1,13.1c-0.6-1.1-0.9-2.3-0.9-3.6C5.5,7.9,8.4,4.5,12,4.5z M12,10.5l-5,5L12,20.5l5-5L12,10.5z"/></svg>
              </div>
              <h3 class="h5 mb-3">Architectural Metalwork</h3>
              <p class="mb-0">Gates, railings, façades, and structural accents designed with an organic, flowing aesthetic.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 p-4 card-gradient-bg text-center">
              <div class="icon-container mx-auto mb-3" style="color: var(--text-light-color);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2.5c-4.7,0-8.5,3.8-8.5,8.5c0,2.1,0.8,4.1,2.2,5.6l-2.4,4c-0.2,0.3-0.1,0.8,0.2,1.1c0.3,0.3,0.8,0.4,1.1,0.2l4-2.4c1.5,1.4,3.5,2.2,5.6,2.2c4.7,0,8.5-3.8,8.5-8.5S16.7,2.5,12,2.5z M12,20.5c-4.4,0-8-3.6-8-8c0-2.4,1.1-4.7,2.9-6.3L12,5.2l5.1,5.1c0.7-0.1,1.4,0.2,1.9,0.7c0.5,0.5,0.7,1.2,0.6,1.9C19.2,16.9,15.9,20.5,12,20.5z M12,4.5c4.1,0,7.5,3.4,7.5,7.5c0,1.3-0.3,2.5-0.9,3.6L12,7.2L6.1,13.1c-0.6-1.1-0.9-2.3-0.9-3.6C5.5,7.9,8.4,4.5,12,4.5z M12,10.5l-5,5L12,20.5l5-5L12,10.5z"/></svg>
              </div>
              <h3 class="h5 mb-3">Restoration Projects</h3>
              <p class="mb-0">Meticulous archival repairs and recreations of historical metalworks and monuments.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="process">
      <div class="container">
        <h2 class="text-center mb-3">The Foundry Process</h2>
        <p class="text-center lead mb-5 text-muted">Every project relies on precision and a deep understanding of metallurgy.</p>

        <div class="process-steps-container">
          <div class="row g-5 align-items-center justify-content-center">
            <div class="col-md-4 text-center process-step">
              <div class="p-3">
                <img src="images/process-design-consult.jpeg" alt="Engineers looking at blueprints and a small metal maquette" class="img-fluid process-diagram-image mb-4" width="384" height="384">
                <h3 class="h5">1. Design Consultation</h3>
                <p class="text-muted">Reviewing CAD files, maquettes, and material requirements to ensure structural integrity and aesthetic fidelity.</p>
              </div>
            </div>
            <div class="col-md-4 text-center process-step">
              <div class="p-3">
                <img src="images/process-mold-making.jpeg" alt="Artisan preparing a ceramic shell mold" class="img-fluid process-diagram-image mb-4" width="384" height="384">
                <h3 class="h5">2. Mold Making & Casting</h3>
                <p class="text-muted">Rigorous ceramic shell or sand molds followed by our precision pouring process.</p>
              </div>
            </div>
            <div class="col-md-4 text-center process-step">
              <div class="p-3">
                <img src="images/process-patina.jpeg" alt="Artist applying a green patina to a bronze sculpture" class="img-fluid process-diagram-image mb-4" width="384" height="384">
                <h3 class="h5">3. Chasing & Patination</h3>
                <p class="text-muted">Welding, grinding, and application of specialized chemical patinas to achieve the final organic color.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="bg-light">
      <div class="container">
        <h2 class="text-center mb-3">Featured Commissions</h2>
        <p class="text-center lead mb-5 text-muted">Discover the unique artistry and precision engineering behind our recent projects.</p>

        <div class="row g-4">
          <div class="col-md-6">
            <div class="portfolio-item ">
              <img src="images/portfolio-botanical-gates.jpeg" alt="Large flowing bronze gates in a garden setting" class="img-fluid w-100" width="640" height="512">
              <div class="portfolio-overlay">
                <h3 class="h5 mb-1">Botanical Garden Gates</h3>
                <p class="mb-0 text-muted">Architectural Metalwork</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-item">
              <img src="images/portfolio-civic-monument.jpeg" alt="Abstract metal sculpture in a city plaza" class="img-fluid w-100" width="640" height="512">
              <div class="portfolio-overlay">
                <h3 class="h5 mb-1">Civic Plaza Monument</h3>
                <p class="mb-0 text-muted">Bespoke Art Installations</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials">
      <div class="container">
        <h2 class="text-center mb-3">Client Experiences</h2>
        <p class="text-center lead mb-5 text-muted">Hear what our collaborators and clients have to say about working with Gilded Foundry.</p>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <div class="col-lg-8">
                  <div class="carousel-item p-4 text-center">
                    <p class="lead mb-3">"Gilded Foundry translated my fragile wax maquette into a monumental bronze masterpiece flawlessly. Their attention to detail and artistic sensitivity is unparalleled."</p>
                    <p class="fw-bold mb-1">- Elena R., Sculptor</p>
                    <div class="text-warning">
                        ★★★★★
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="col-lg-8">
                  <div class="carousel-item p-4 text-center">
                    <p class="lead mb-3">"Their architectural metalwork completely transformed the façade of our historical restoration project. The blend of durability and aesthetic elegance is truly remarkable."</p>
                    <p class="fw-bold mb-1">- James T., Principal Architect at Meridian Designs</p>
                    <div class="text-warning">
                        ★★★★★
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="col-lg-8">
                  <div class="carousel-item p-4 text-center">
                    <p class="lead mb-3">"The team's consultation on material limits and patinas saved our public art installation. Their expertise and collaborative approach made all the difference."</p>
                    <p class="fw-bold mb-1">- Sarah M., City Arts Council Project Manager</p>
                    <div class="text-warning">
                        ★★★★★
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                  <div class="col-lg-8">
                    <div class="carousel-item p-4 text-center">
                      <p class="lead mb-3">"We commissioned a bespoke garden sculpture. The final piece from Gilded Foundry exceeded our highest expectations, a true work of art that seamlessly blends with nature."</p>
                      <p class="fw-bold mb-1">- Anya Sharma, Private Collector</p>
                      <div class="text-warning">
                          ★★★★★
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-center">
                  <div class="col-lg-8">
                    <div class="carousel-item p-4 text-center">
                      <p class="lead mb-3">"For our new office entrance, Gilded Foundry fabricated stunning, organic-inspired bronze doors. The craftsmanship is impeccable and truly elevates our brand."</p>
                      <p class="fw-bold mb-1">- Michael Chen, CEO Synergy Tech</p>
                      <div class="text-warning">
                          ★★★★★
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <h2 class="text-center mb-3">Discuss Your Next Project</h2>
        <p class="text-center lead mb-5 text-muted">Ready to transform your vision into a metal masterpiece? Reach out to us today.</p>

        <div class="row g-4 align-items-stretch">
          <div class="col-lg-7">
            <div class="form-card h-100">
              <h3 class="h4 mb-4" style="color: var(--text-light-color);">Project Inquiry Form</h3>
              <form action="#" method="POST">
                <div class="mb-3">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
                <div class="mb-3">
                  <select class="form-select" name="service" required>
                    <option value="" disabled selected>Select a Service</option>
                    <option value="Custom Metal Casting">Custom Metal Casting</option>
                    <option value="Art Fabrication">Art Fabrication</option>
                    <option value="Architectural Metalwork">Architectural Metalwork</option>
                    <option value="Restoration">Restoration</option>
                  </select>
                </div>
                <div class="mb-3">
                  <textarea class="form-control" name="details" rows="5" placeholder="Tell us about your project dimensions, materials, and timeline." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary-gradient w-100">Submit Inquiry</button>
              </form>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="contact-info-block h-100">
              <h3 class="h4" style="color: var(--text-light-color);">Gilded Foundry</h3>
              <address class="mb-4">
                <p class="mb-1" style="color: var(--text-light-color);">71-26 69th Street</p>
                <p class="mb-1" style="color: var(--text-light-color);">New York, New York, 11385, USA</p>
              </address>
              <p class="mb-1">
                <a href="tel:+12706271168" class="text-decoration-none" style="color: var(--primary-light-color);">+1(270)627-1168</a>
              </p>
              <p class="mb-4">
                <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-decoration-none" style="color: var(--primary-light-color);">info@<?php echo $_SERVER['HTTP_HOST']; ?></a>
              </p>
              <div class="ratio ratio-16x9" style="border-radius: var(--border-radius); overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.7042571343764!2d-73.8967926845942!3d40.71801217933182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f4a7c0d7f27%3A0x6b4c3e8a4a5e3e2b!2sQueens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sus!4v1678888888888!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer>
    <div class="container text-center">
      <p class="mb-2">&copy; 2024 Gilded Foundry. All rights reserved.</p>
      <p class="mb-4">Gilded Foundry - Metal Casting & Art Fabrication</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="./privacy.html" class="text-decoration-none" style="color: var(--primary-light-color);">Privacy Policy</a>
        <a href="./tos.html" class="text-decoration-none" style="color: var(--primary-light-color);">Terms of Service</a>
      </div>
    </div>
  </footer>

  <div id="cookieConsent" class="cookie-consent" style="display:none;">
    <p>This website uses cookies to ensure you get the best experience on our website. By continuing, you agree to our use of cookies.</p>
    <button id="acceptCookies">Accept</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cookieConsent = document.getElementById('cookieConsent');
      const acceptCookies = document.getElementById('acceptCookies');
      const cookieNamePrefix = 'consent_';
      const randomSuffix = Math.random().toString(36).substring(2, 15);
      const fullCookieName = cookieNamePrefix + randomSuffix;

      // Check if cookie consent has been given
      if (!localStorage.getItem(fullCookieName)) {
        cookieConsent.style.display = 'flex';
      }

      acceptCookies.addEventListener('click', function() {
        localStorage.setItem(fullCookieName, 'true');
        cookieConsent.style.display = 'none';
      });

      // Smooth scrolling for navigation links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
              e.preventDefault();
              document.querySelector(this.getAttribute('href')).scrollIntoView({
                  behavior: 'smooth'
              });
          });
      });
    });
  </script>
</body>
</html>