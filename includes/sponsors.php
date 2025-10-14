<div id="sponsors" class="section-4 container-fluid">
  <div class="container">
    <h2 class="fontGrey">Sponsors</h2>
    <p class="fontGrey" id="sponsorsPara">
      NECRET is extremely grateful for all the support received throughout the year, assisting our ongoing research, education & awareness efforts.
      Thank you!
    </p>

    <div class="customer-logos">
      <div class="slide"><a href="https://www.auraleisure.ie/" target="_blank"><img src="./img/Aura-Logo.webp" alt="Aura Leisure logo"></a></div>
      <div class="slide"><a href="https://www.citynorthhotel.com/en/" target="_blank"><img src="./img/citynorthHotel.webp" alt="City North Hotel logo"></a></div>
      <div class="slide"><a href="https://aib.ie/" target="_blank"><img src="./img/AIB_Logo.webp" alt="AIB logo"></a></div>
      <div class="slide"><a href="https://www.primark.com/en-ie" target="_blank"><img src="./img/penneys1.webp" alt="Penneys logo"></a></div>
      <div class="slide"><a href="https://www.tesco.ie/" target="_blank"><img src="./img/TescoLogo.webp" alt="Tesco logo"></a></div>
      <div class="slide"><a href="https://www.dprc.ie" target="_blank"><img src="./img/DPRC.webp" alt="DPRC logo"></a></div>
    </div>
  </div>
</div>
<style>
        /* === Sponsors Section === */
    .section-4 {
        text-align: center;
        padding: 3rem 1rem;
    }

    .section-4 h2 {
        font-size: clamp(1.8rem, 2.5vw, 2.5rem);
        margin-bottom: 1rem;
    }

    #sponsorsPara {
        font-size: clamp(1rem, 1.5vw, 1.2rem);
        max-width: 650px;
        margin: 0 auto 2.5rem;
    }

    /* === Carousel Layout === */
    .customer-logos {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 2rem;
        padding: 1rem 0;
        scrollbar-width: none; /* Hide scrollbar (Firefox) */
    }

    .customer-logos::-webkit-scrollbar {
        display: none; /* Hide scrollbar (Chrome, Safari) */
    }

    .slide {
        flex: 0 0 auto;
        scroll-snap-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slide img {
        width: 150px;
        height: auto;
        object-fit: contain;
        transition: transform 0.3s ease, opacity 0.3s ease;
        opacity: 0.9;
    }

    .slide img:hover {
        transform: scale(1.05);
        opacity: 1;
    }

    /* === Responsiveness === */
    @media (max-width: 768px) {
        .slide img {
            width: 110px;
        }
        .customer-logos {
            margin: 0 1rem;
        }
    }

</style>
<script>
  const logos = document.querySelector('.customer-logos');

  function autoScroll() {
    if (logos.scrollLeft + logos.clientWidth >= logos.scrollWidth - 1) {
      logos.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      logos.scrollBy({ left: 2, behavior: 'smooth' }); // Adjust speed here
    }
  }

  let scrollInterval = setInterval(autoScroll, 30); // Adjust speed here (lower = faster)

  // Pause on hover for user control
  logos.addEventListener('mouseenter', () => clearInterval(scrollInterval));
  logos.addEventListener('mouseleave', () => scrollInterval = setInterval(autoScroll, 30));
</script>