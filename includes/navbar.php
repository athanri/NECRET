<nav class="navbar navbar-expand-lg navbar-primary bg-primary improved-navbar">
  <div class="container align-items-center py-2">
    <a class="navbar-brand logo-hover" href="index.php">
      <img src="./img/logo.webp" alt="Logo" width="185" height="75" style="max-width:100%;height:auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target=".navbar-collapse" aria-controls="navbarMain" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarMain">
      <!-- Search -->
      <form action="search.php" method="GET" class="d-flex search-form mb-0 improved-search-form">
        <input type="text" class="form-control me-2 improved-search-input" name="q" placeholder="Search Term..." required>
        <button type="submit" class="btn btn-outline-light btnHover improved-search-btn">
          <i class="fa fa-search btnHover"></i> <span class="d-none d-md-inline">Search</span>
        </button>
      </form>
      <!-- Social Icons -->
      <div class="d-flex social-icons ms-3 improved-social-icons">
        <a class="social-icon mx-1" id="facebookSI" target="_blank" href="https://www.facebook.com/NECRET/" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
        <a class="social-icon mx-1" id="linkedinSI" target="_blank" href="https://www.linkedin.com/in/necret/" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
        <a class="social-icon mx-1" id="youtubeSI" target="_blank" href="https://www.youtube.com/channel/UC-b5wfquKcAwz81uZGvd4NQ" aria-label="YouTube"><i class="fa fa-youtube"></i></a>
        <a class="social-icon mx-1" id="twitterSI" target="_blank" href="https://twitter.com/Drogheda_Oncol" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
      </div>
      <!-- Buttons -->
      <div class="d-flex ms-3 gap-2">
        <a href="donate.php" class="btn btn-outline-light btnHover improved-navbar-btn">
          <i class="fa fa-heart btnHover"></i> <span class="d-none d-md-inline">Donate</span>
        </a>
        <button class="btn btn-outline-light btnHover improved-navbar-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
          <i class="fa fa-video btnHover"></i> <span class="d-none d-md-inline">Impact</span>
        </button>
      </div>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-navbar">
  <div class="container">
    <div class="collapse center navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Us
          </a>
          <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="meet.php">Meet Our Team</a>
            <a class="dropdown-item" href="vision.php">Our Vision & Our Impact</a>
            <a class="dropdown-item" href="ambassadors.php">NECRET Ambassadors</a>
            <a class="dropdown-item" href="governance.php">Governance</a>
            <a class="dropdown-item" href="stories.php">Personal Stories</a>
            <a class="dropdown-item" href="contact.php">Contact Us</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Support NECRET
          </a>
          <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="donate.php">How to Donate <i class="fa fa-heart"></i></a>
            <a class="dropdown-item" href="legacy.php">Leaving A Legacy</a>
            <a class="dropdown-item" href="cancerResearcher.php">Sponsor a Cancer Researcher</a>
            <a class="dropdown-item" href="volunteer.php">Volunteer For NECRET</a>
            <a class="dropdown-item" href="favours.php">Wedding Favours</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            News & Events
          </a>
          <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown4">
            <a class="dropdown-item" href="news.php">News</a>
            <a class="dropdown-item" href="dipintheNip.php">Dip in the Nip</a>
            <a class="dropdown-item" href="openday.php">Schools Medical Open Day</a>
            <a class="dropdown-item" href="boc.php">Blankets of Care Appeal</a>
            <a class="dropdown-item" href="tullyallen.php">Tullyallen Tractor Run</a>
            <a class="dropdown-item" href="necretTLC.php">NECRET TLC</a>
            <a class="dropdown-item" href="kilmoon.php">Kilmoon Barn Dance</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fighting Cancer
          </a>
          <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown5">
            <a class="dropdown-item" href="awareness.php">Awareness</a>
            <a class="dropdown-item" href="prevention.php">Prevention</a>
            <a class="dropdown-item" href="trials.php">Clinical Trials</a>
            <a class="dropdown-item" href="cuttingEdge.php">Cutting Edge Care</a>
            <a class="dropdown-item" href="tips.php">Coping Tips and Advice</a>
            <a class="dropdown-item" href="cancerSupport.php">Cancer Support</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fundraising
          </a>
          <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown6">
            <a class="dropdown-item" href="donate.php">Donate <i class="fa fa-heart"></i></a>
            <a class="dropdown-item" href="fundraise.php">Fundraising for NECRET</a>
            <a class="dropdown-item" href="nominate.php">Nominate NECRET Charity Of The Year</a>
            <a class="dropdown-item" href="getinvolved.php">Get Involved at School / College</a>
            <a class="dropdown-item" href="event.php">Hold an Event</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Impact Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="impactModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 id="impactModalTitle">NECRET Impact</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe
          width="100%"
          height="300"
          src="https://www.youtube.com/embed/PLqBewXZXIw"
          title="Necret Video"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">
          Close <i class="fa fa-times-circle"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End of Impact Modal -->

<style>
  @media (max-width: 768px) {
    #navbarMain {
      flex-direction: column !important;
      align-items: center !important;
      text-align: center;
    }
    .search-form {
      width: 100%;
      justify-content: center;
      margin-bottom: 0.75rem;
    }
    .search-form input {
      width: 85%;
      min-width: 120px;
      font-size: 1rem;
    }
    .social-icons {
      margin-bottom: 0.75rem;
      justify-content: center !important;
    }
    .social-icons a {
      display: inline-flex;
      font-size: 1.4rem;
      margin: 0 0.15rem;
    }
    .btnHover {
      margin-bottom: 0.25rem;
      width: 100%;
    }
  }

  @media (min-width: 992px) {
    .navbar-light.sticky-navbar {
      position: sticky;
      top: 0;
      z-index: 1050;
      box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    }
  }

  .gap-2 > * + * {
    margin-left: 0.5rem !important;
  }

  .improved-navbar {
    border-radius: 0 0 18px 18px;
    box-shadow: 0 6px 32px rgba(0,67,107,0.13);
    border-bottom: 2px solid #385898;
    background: linear-gradient(90deg, #00436b 80%, #406e99 100%);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    min-height: 80px;
  }

  .logo-hover img {
    transition: transform 0.18s, box-shadow 0.18s;
    box-shadow: 0 2px 8px rgba(0,67,107,0.10);
    border-radius: 10px;
  }
  .logo-hover:hover img {
    transform: scale(1.06) rotate(-2deg);
    box-shadow: 0 6px 24px rgba(0,67,107,0.18);
  }

  .improved-search-form {
    background: rgba(255,255,255,0.10);
    border-radius: 10px;
    padding: 4px 12px;
    box-shadow: 0 1px 4px rgba(0,67,107,0.06);
    margin-right: 1rem;
  }
  .improved-search-input {
    border-radius: 8px;
    border: none;
    background: #f3f6fa;
    color: #00436b;
    font-weight: 500;
    transition: box-shadow 0.2s, background 0.2s;
    min-width: 140px;
  }
  .improved-search-input:focus {
    box-shadow: 0 0 0 2px #ffba55;
    background: #fff;
    outline: none;
  }
  .improved-search-btn {
    border-radius: 8px;
    border: 1.5px solid #ffba55;
    color: #00436b !important;
    background: #ffba55;
    font-weight: 600;
    transition: background 0.18s, color 0.18s, border-color 0.18s;
    margin-left: 0.3rem;
    box-shadow: 0 1px 4px rgba(0,67,107,0.06);
  }
  .improved-search-btn:hover, .improved-navbar-btn:hover {
    background: #fda016 !important;
    color: #001d40 !important;
    border-color: #fda016 !important;
  }

  .improved-navbar-btn {
    border-radius: 8px;
    border: 1.5px solid #ffba55;
    color: #00436b !important;
    background: #ffba55;
    font-weight: 600;
    transition: background 0.18s, color 0.18s, border-color 0.18s;
    box-shadow: 0 1px 4px rgba(0,67,107,0.06);
  }

  .improved-social-icons .social-icon {
    font-size: 1.7rem;
    margin: 0 0.25rem;
    transition: transform 0.18s, box-shadow 0.18s, background 0.18s, color 0.18s;
    background: #385898;
    border-radius: 50%;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff !important;
    box-shadow: 0 1px 4px rgba(0,67,107,0.08);
  }
  .improved-social-icons .social-icon:hover {
    background: #ffba55 !important;
    color: #00436b !important;
    transform: scale(1.13) rotate(-4deg);
    box-shadow: 0 4px 16px rgba(0,67,107,0.18);
  }

  @media (max-width: 991px) {
    .improved-navbar {
      border-radius: 0;
      min-height: 60px;
      padding-top: 0.3rem;
      padding-bottom: 0.3rem;
    }
    .improved-social-icons .social-icon {
      font-size: 1.3rem;
      width: 32px;
      height: 32px;
    }
    .improved-search-form {
      margin-right: 0;
      padding: 2px 6px;
    }
  }
</style>