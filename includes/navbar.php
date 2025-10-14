<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="./img/logo.webp" alt="Logo" width="185" height="75">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarMain">

      <!-- Search -->
      <form action="search.php" method="GET" class="d-flex search-form mb-0">
        <input type="text" class="form-control me-2" name="q" placeholder="Search Term..." required>
        <button type="submit" class="btn btn-outline-light btnHover">
          Search <i class="fa fa-search btnHover"></i>
        </button>
      </form>

      <!-- Social Icons -->
      <div class="d-flex social-icons ms-3">
        <a class="social-icon mx-1" id="facebookSI" target="_blank" href="https://www.facebook.com/NECRET/"><i class="fa fa-facebook"></i></a>
        <a class="social-icon mx-1" id="linkedinSI" target="_blank" href="https://www.linkedin.com/in/necret/"><i class="fa fa-linkedin"></i></a>
        <a class="social-icon mx-1" id="youtubeSI" target="_blank" href="https://www.youtube.com/channel/UC-b5wfquKcAwz81uZGvd4NQ"><i class="fa fa-youtube"></i></a>
        <a class="social-icon mx-1" id="twitterSI" target="_blank" href="https://twitter.com/Drogheda_Oncol"><i class="fa fa-twitter"></i></a>
      </div>

      <!-- Buttons -->
      <div class="d-flex ms-3">
        <a href="donate.php" class="btn btn-outline-light me-2 btnHover">
          Donate <i class="fa fa-heart btnHover"></i>
        </a>
        <button class="btn btn-outline-light btnHover" data-bs-toggle="modal" data-bs-target="#videoModal">
          Impact <i class="fa fa-video btnHover"></i>
        </button>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">      
    <div class="collapse center navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">
            Home
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Us
            </a>
            <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="meet.php">Meet Our Team</a>
            <a class="dropdown-item" href="vision.php">Our Vision & Our Impact</a>
            <a class="dropdown-item" href="ambassadors.php">NECRET Ambassadors</a>
            <a class="dropdown-item" href="governance.php">Governance</a>
            <a class="dropdown-item" href="stories.php">Personal Stories</a>
            <a class="dropdown-item" href="contact.php">Contact Us</a>

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Support NECRET
            </a>
            <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="donate.php">How to Donate <i class="fa fa-heart"></i></a>
            <a class="dropdown-item" href="legacy.php">Leaving A Legacy</a>
            <a class="dropdown-item" href="cancerResearcher.php">Sponsor a Cancer Researcher</a>
            <a class="dropdown-item" href="volunteer.php">Volunteer For NECRET</a>
            <a class="dropdown-item" href="favours.php">Wedding Favours</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            News & Events
            </a>
            <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="news.php">News</a>
            <!-- <a class="dropdown-item" href="annsoh.php">Annual Service of Hope</a> -->
            <a class="dropdown-item" href="dipintheNip.php">Dip in the Nip</a>
            <a class="dropdown-item" href="openday.php">Schools Medical Open Day</a>
            <a class="dropdown-item" href="boc.php">Blankets of Care Appeal</a>
            <!-- <a class="dropdown-item" href="crfwalk.php">Celine Reilly Flynn Walk</a> -->
            <!-- <a class="dropdown-item" href="wmenmini.php">Womens Mini Marathon</a> -->
            <!-- <a class="dropdown-item" href="christmas.php">Annual Christmas Raffle</a> -->
            <a class="dropdown-item" href="tullyallen.php">Tullyallen Tractor Run</a>
            <!-- <a class="dropdown-item" href="dubmarathon.php">Dublin Marathon</a> -->
            <a class="dropdown-item" href="necretTLC.php">NECRET TLC</a>
            <a class="dropdown-item" href="kilmoon.php">Kilmoon Barn Dance</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fighting Cancer
            </a>
            <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="awareness.php">Awareness</a>
            <a class="dropdown-item" href="prevention.php">Prevention</a>
            <a class="dropdown-item" href="trials.php">Clinical Trials</a>
            <a class="dropdown-item" href="cuttingEdge.php">Cutting Edge Care</a>
            <a class="dropdown-item" href="tips.php">Coping Tips and Advice</a>
            <a class="dropdown-item" href="cancerSupport.php">Cancer Support</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fundraising
            </a>
            <div class="dropdown-menu marginNav" aria-labelledby="navbarDropdown">
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
<div class="modal fade" id="videoModal" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h1>NECRET Impact</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <iframe
                width="100%"
                height="300vh"
                src="https://www.youtube.com/embed/PLqBewXZXIw"
                title="Necret Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Close <i class="fa fa-times-circle"></i></button>
        </div>
        </div>
    </div>
</div>
<!-- End of Impact Modal -->

<style>
    /* Default: all in one row (desktop/tablet) */

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
    width: 70%;
  }

  .social-icons {
    margin-bottom: 0.75rem;
  }

  .social-icons a {
    display: inline-block;
    font-size: 1.5rem;
  }

  .btnHover {
    margin-bottom: 0.25rem;
  }
}
</style>