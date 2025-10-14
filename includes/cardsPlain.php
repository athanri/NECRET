<div id="fundraise" class="section-3 container-fluid">
  <div class="row justify-content-center text-center">
    <div class="col-12 mb-4">
      <h2 class="fontGrey">YOUR GENEROUS SUPPORT</h2>
      <h3 class="fontGrey">Keeps Us Going</h3>
      <p class="fontGrey">
        NECRET is fighting cancer everyday in various ways.<br>
        Here are some of the ways in which your donations are INVESTED.
      </p>
    </div>
    <!-- Equipment Card -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
      <div class="card greyCard improved-card flex-fill m-2">
        <a href="#" class="greyCardTitle improved-card-title" data-bs-toggle="modal" data-bs-target="#eqModalCenter">
          <div class="icon-circle mb-3 bg-warning text-white mt-5">
            <i class="fa fa-cogs fa-2x"></i>
          </div>
          <h5 class="card-header border-0 bg-transparent">Equipment</h5>
        </a>
        <div class="card-body greyCardBody">
          <a href="#" class="btn btn-warning card-button first-btn w-100 text-white" data-bs-toggle="modal" data-bs-target="#eqModalCenter">
            Latest Technologies & Unit Equipment
          </a>
        </div>
      </div>
    </div>
    <!-- Research Projects Card -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
      <div class="card greyCard improved-card flex-fill m-2">
        <a href="#" class="greyCardTitle improved-card-title" data-bs-toggle="modal" data-bs-target="#prModalCenter">
          <div class="icon-circle mb-3 bg-warning text-white mt-5">
            <i class="fa fa-flask fa-2x"></i>
          </div>
          <h5 class="card-header border-0 bg-transparent">Research Projects</h5>
        </a>
        <div class="card-body greyCardBody">
          <a href="#" class="btn btn-warning card-button second-btn w-100 text-white" data-bs-toggle="modal" data-bs-target="#prModalCenter">
            Clinical Cancer Research
          </a>
        </div>
      </div>
    </div>
    <!-- Trained Staff Card -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
      <div class="card greyCard improved-card flex-fill m-2">
        <a href="#" class="greyCardTitle improved-card-title" data-bs-toggle="modal" data-bs-target="#stModalCenter">
          <div class="icon-circle mb-3 bg-warning text-white mt-5">
            <i class="fa fa-user-md fa-2x"></i>
          </div>
          <h5 class="card-header border-0 bg-transparent">Trained Staff</h5>
        </a>
        <div class="card-body greyCardBody">
          <a href="#" class="btn btn-warning card-button third-btn w-100 text-white" data-bs-toggle="modal" data-bs-target="#stModalCenter">
            Medical Staff Training & Education
          </a>
        </div>
      </div>
    </div>
    <!-- People Reached Card -->
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
      <div class="card greyCard improved-card flex-fill m-2">
        <a href="#" class="greyCardTitle improved-card-title" data-bs-toggle="modal" data-bs-target="#reModalCenter">
          <div class="icon-circle mb-3 bg-warning text-white mt-5">
            <i class="fa fa-users fa-2x"></i>
          </div>
          <h5 class="card-header border-0 bg-transparent">People Reached</h5>
        </a>
        <div class="card-body greyCardBody">
          <a href="#" class="btn btn-warning card-button fourth-btn w-100 text-white" data-bs-toggle="modal" data-bs-target="#reModalCenter">
            Cancer Education & Awareness
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .improved-card {
    border-radius: 18px;
    transition: box-shadow 0.2s, transform 0.2s;
    min-height: 240px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: #e9ecef;
    border: 1.5px solid #cfd8dc;
    }
    .improved-card:hover,
    .improved-card:focus {
    box-shadow: 0 8px 32px #406e99 !important;
    transform: translateY(-4px) scale(1.03);
    }
    .improved-card-title {
    text-decoration: none;
    color: #00436b;
    font-weight: 700;
    font-size: 1.15rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    }
    .improved-card:hover .card-header,
    .improved-card:focus .card-header,
    .improved-card:hover .improved-card-title,
    .improved-card:focus .improved-card-title,
    .improved-card:hover .card-button,
    .improved-card:focus .card-button,
    .improved-card:hover .fa-2x,
    .improved-card:focus .fa-2x {
    color: #fff !important;
    }
    .icon-circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.2rem;
    margin: 0 auto 0.5rem auto;
    background: #fff;
    border: 2px solid #00436b;
    }
    .bg-warning.icon-circle {
    background: #fda016 !important;
    border-color: #fda016;
    color: #00436b !important;
    }
    .card-header {
    font-size: 1.2rem;
    font-weight: 700;
    background: transparent;
    border: none;
    margin-bottom: 0;
    text-align: center;
    color: #00436b;
    }
    .card-button {
    font-weight: 600;
    border-radius: 8px;
    margin-top: 1rem;
    font-size: 1rem;
    padding: 0.7rem 1rem;
    box-shadow: 0 1px 4px rgba(0,67,107,0.06);
    transition: background 0.18s, color 0.18s;
    border: none;
    }
    .btn-warning.card-button {
    background: #fda016;
    color: #00436b;
    }
    .btn-warning.card-button:hover {
    background: #ffba55;
    color: #00436b;
    }
    .greyCardBody {
    background: transparent;
    border: none;
    padding: 1rem 0.5rem 1.2rem 0.5rem;
    }
    @media (max-width: 991.98px) {
    .improved-card {
        min-height: 180px;
        margin-bottom: 1.5rem;
    }
    .icon-circle {
        width: 56px;
        height: 56px;
        font-size: 1.5rem;
    }
    }
    @media (max-width: 575.98px) {
    .improved-card {
        min-height: 120px;
        padding: 0.5rem;
    }
    .icon-circle {
        width: 44px;
        height: 44px;
        font-size: 1.1rem;
    }
    .card-header {
        font-size: 1rem;
    }
    }
</style>