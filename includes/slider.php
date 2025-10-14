<div class="slider-wrapper">
    <picture>
        <source srcset="./img/slider3.webp" media="(min-width: 768px)">
        <source srcset="./img/slider3_02.webp" media="(max-width: 767px)">
        <img src="./img/slider3.webp" class="d-block w-100 img-fluid slider-img" alt="slider03">
    </picture>
    <div class="slider-caption">
        <h2>Welcome to NECRET</h2>
        <p>Supporting Cancer Care Every Day</p>
    </div>
</div>

<style>
    .slider-wrapper {
        position: relative;
        max-width: 96%;
        overflow: hidden;
        border-radius: 18px;
        box-shadow: 0 6px 32px rgba(0,67,107,0.18);
        margin: 0 auto 2rem auto;
    }
    .slider-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
        min-height: 320px;
        max-height: 600px;
        aspect-ratio: 16/7;
        transition: filter 0.3s;
        filter: brightness(0.92) saturate(1.1);
    }
    .slider-wrapper:hover .slider-img {
        filter: brightness(1) saturate(1.2);
    }
    .slider-caption {
        position: absolute;
        left: 0; right: 0; bottom: 0;
        background: linear-gradient(0deg, rgba(0,67,107,0.85) 0%, rgba(0,67,107,0.25) 80%, transparent 100%);
        color: #fff;
        padding: 2rem 1.5rem 1.2rem 1.5rem;
        text-align: left;
    }
    .slider-caption h2 {
        margin: 0 0 0.5rem 0;
        font-size: 2.2rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 0 2px 8px rgba(0,0,0,0.18);
    }
    .slider-caption p {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 400;
        text-shadow: 0 1px 6px rgba(0,0,0,0.12);
    }
    @media (max-width: 767px) {
        .slider-caption {
            padding: 1.2rem 0.7rem 0.7rem 0.7rem;
        }
        .slider-caption h2 {
            font-size: 1.3rem;
        }
        .slider-caption p {
            font-size: 1rem;
        }
        .slider-img {
            min-height: 180px;
            max-height: 340px;
            aspect-ratio: 16/10;
        }
    }
</style>