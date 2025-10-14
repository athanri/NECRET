<div id="news" class="section-5 container-fluid">
    <h2 class="fontNavy mb-4">Upcoming Events</h2>
    <div class="row justify-content-center g-4 upcoming-events-row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="card navyCard flex-fill h-100 shadow event-card">
                <img class="card-img-top event-img" src="./img/dip2025.jpg" alt="Dip 2025">
                <div class="card-body navyCardBody d-flex flex-column">
                    <h5 class="card-title navyCardTitle">Northeast Dip in the Nip 2025</h5>
                    <p class="card-text navyCardText">The North-East’s biggest and best “DIP” for women is back on Sunday 7th of September and we’d love YOU to be part of it!!</p>
                    <p class="card-text navyCardText">We again hope to have hundreds of amazing women join for this year’s Dip in the Nip which is amazingly our 14th!! whilst helping Necret in its everyday fight against cancer.</p>
                    <p class="card-text navyCardText">We will have a new registration process this year. To register your interest please complete the contact form @ <a class="dipEmail" href="./dipintheNip.php">https://www.necret.ie/dipintheNip</a> or email <a href="mailto:dipnortheast@gmail.com">dipnortheast@gmail.com</a> with your full name, postal address, and contact number and a member of our volunteer team will get back in touch.</p>
                    <p class="card-text navyCardText"><a class="dipEmail" href="./dipintheNip.php">More Info</a></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="card navyCard flex-fill h-100 shadow event-card">
                <img class="card-img-top event-img" src="./img/Newsletter_2025.png" alt="Newsletter 2025">
                <div class="card-body navyCardBody d-flex flex-column">
                    <h5 class="card-title navyCardTitle">Necret Newsletter Summer 2025</h5>
                    <p class="card-text navyCardText">The Summer Newsletter of NECRET is now available, where you can read all the latest
                    charity news and developments. It also captures some of the ways NECRET is contributing to improving cancer 
                    treatment and cares for those impacted by cancer.</p>
                    <a class="btn btn-outline-light btn-sm mt-auto" href="./docs/NECRET_Newsletter_Summer_2025.pdf" target="_blank">
                        <i class="fa fa-file-pdf-o"></i> Read Here
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="card navyCard flex-fill h-100 shadow event-card">
                <img class="card-img-top event-img" src="./img/TLC.jpg" alt="TLC Cancer Conference 2025">
                <div class="card-body navyCardBody d-flex flex-column">
                    <h5 class="card-title navyCardTitle">TLC Cancer Conference 2025</h5>
                    <p class="card-text navyCardText">We are looking forward to our annual TLC Cancer Conference taking place on the afternoon of September 20th in the CityNorth Hotel & Conference Centre.</p>
                    <p class="card-text navyCardText">This Free Public Cancer Information Support Day is FOR YOU, YOUR FAMILY AND YOUR FRIENDS.</p>
                    <p class="card-text navyCardText">The afternoon will include workshops, refreshments, complimentary therapies, a free prize draw and of course our Fab Goody Bags.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex">
            <div class="card navyCard flex-fill h-100 shadow event-card">
                <img class="card-img-top event-img" src="./img/SeanBoylan.webp" alt="Sean Boylan">
                <div class="card-body navyCardBody d-flex flex-column">
                    <h5 class="card-title navyCardTitle">Exciting Announcement</h5>
                    <p class="card-text navyCardText">NECRET are delighted to have GAA Meath Legend Sean Boylan become our ambassador. We are deeply appreciative for his support and contribution to our cause. More details to follow in weeks ahead and into new year. #TeamNECRET</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .event-card {
        border-radius: 18px;
        overflow: hidden;
        transition: box-shadow 0.2s, transform 0.2s;
        background: #001d40;
        color: #cccccc;
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }
    .event-card:hover {
        box-shadow: 0 8px 32px rgba(0,67,107,0.18);
        transform: translateY(-4px) scale(1.03);
    }
    .event-img {
        object-fit: cover;
        width: 100%;
        height: 220px;
        border-top-left-radius: 18px;
        border-top-right-radius: 18px;
        background: #f8f9fa;
    }
    @media (max-width: 991px) {
        .event-img {
            height: 140px;
        }
    }
    @media (max-width: 767px) {
        .event-img {
            height: 110px;
        }
        .event-card {
            border-radius: 12px;
        }
    }
    .navyCardBody {
        background: #001d40;
        color: #cccccc;
        border-bottom-left-radius: 18px;
        border-bottom-right-radius: 18px;
        padding: 1.2rem 1rem 1rem 1rem;
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
    }
    .navyCardTitle {
        color: #ffba55;
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 0.7rem;
    }
    .card-text.navyCardText {
        color: #cccccc;
        font-size: 1rem;
        margin-bottom: 0.7rem;
        text-align: left;
    }
    .dipEmail {
        color: #ffba55;
        text-decoration: underline;
        word-break: break-all;
    }
    .dipEmail:hover {
        color: #fff;
        text-decoration: underline;
    }
</style>