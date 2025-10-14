<div class="section-2 container-fluid">
    <div class="row text-center flex-column flex-md-row align-items-stretch banners-row">
        <div class="col-md-3 mb-4 mb-md-0 d-flex">
            <a href="volunteer.php" class="banner-link w-100 d-flex align-items-center justify-content-center">
                <div class="banner-card">
                    <img class="banners img-fluid" src="./img/join.webp" alt="Join Now">
                    <div class="banner-label">Join Now</div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 d-flex">
            <a href="fundraise.php" class="banner-link w-100 d-flex align-items-center justify-content-center">
                <div class="banner-card">
                    <img class="banners img-fluid" src="./img/fund.webp" alt="Fundraise">
                    <div class="banner-label">Fundraise</div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 d-flex">
            <a href="donate.php" class="banner-link w-100 d-flex align-items-center justify-content-center">
                <div class="banner-card">
                    <img class="banners img-fluid" src="./img/donate.webp" alt="Donate Now">
                    <div class="banner-label">Donate Now</div>
                </div>
            </a>
        </div>
        <div class="col-md-3 d-flex">
            <div class="banner-card connect-card w-100 d-flex align-items-center justify-content-center">
                <?php include 'includes/connect.php'; ?>
            </div>
        </div>
    </div>
</div>

<style>
.banner-link {
    text-decoration: none;
    height: 100%;
}
.banner-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 4px 18px rgba(0,67,107,0.10);
    padding: 1.5rem 1rem 1rem 1rem;
    transition: box-shadow 0.2s, transform 0.2s;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 220px;
    position: relative;
}
.banner-card:hover {
    box-shadow: 0 8px 32px rgba(0,67,107,0.18);
    transform: translateY(-4px) scale(1.03);
}
.banner-card img {
    max-height: 120px;
    margin-bottom: 1.2rem;
    border-radius: 12px;
    object-fit: contain;
    background: #f8f9fa;
    padding: 0.5rem;
    width: auto;
}
.banner-label {
    font-size: 1.2rem;
    font-weight: 600;
    color: #00436b;
    letter-spacing: 0.5px;
    margin-top: auto;
    margin-bottom: 0.2rem;
    text-shadow: 0 1px 6px rgba(0,0,0,0.04);
}
.connect-card {
    background: #003e6a;
    color: #fff;
    min-height: 220px;
    border-radius: 18px;
    box-shadow: 0 4px 18px rgba(0,67,107,0.10);
    padding: 1.5rem 1rem 1rem 1rem;
}
@media (max-width: 767px) {
    .banners-row {
        flex-direction: column !important;
        gap: 1rem;
    }
    .banner-card, .connect-card {
        min-height: 140px;
        padding: 1rem 0.5rem;
    }
    .banner-card img {
        max-height: 80px;
        margin-bottom: 0.7rem;
    }
    .banner-label {
        font-size: 1rem;
    }
}
</style>