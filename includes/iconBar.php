<div class="icon-bar">
    <a href="#" class="search" title="Search" id="openSearchModal">
        <i class="fa fa-search"></i>
    </a>
    <a href="https://www.facebook.com/NECRET/" target="_blank" class="facebook">
        <i class="fa fa-facebook"></i>
    </a>
    <a href="https://twitter.com/Drogheda_Oncol" target="_blank" class="twitter">
        <i class="fa fa-twitter"></i>
    </a>
    <a href="https://www.linkedin.com/in/necret/" target="_blank" class="linkedin">
        <i class="fa fa-linkedin"></i>
    </a>
    <a href="https://www.youtube.com/channel/UC-b5wfquKcAwz81uZGvd4NQ" target="_blank" class="youtube">
        <i class="fa fa-youtube"></i>
    </a>
</div>

<!-- Search Fullscreen Modal -->
<div id="searchModal" class="search-modal">
    <span class="search-close" id="closeSearchModal">&times;</span>
    <div class="search-modal-content">
        <form action="./search.php" method="get" class="search-form-modal">
            <input type="text" name="q" placeholder="Type to search..." autofocus required>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<style>
    /* Fullscreen Search Modal Styles */
    .search-modal {
        display: none;
        position: fixed;
        z-index: 99999;
        left: 0; top: 0;
        width: 100vw; height: 100vh;
        background: rgba(0,0,0,0.95);
        justify-content: center;
        align-items: center;
        opacity: 0.90;
    }
    .search-modal-content {
        width: 100%;
        max-width: 500px;
        margin: auto;
        text-align: center;
    }
    .search-form-modal {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .search-form-modal input[type="text"] {
        width: 70%;
        padding: 16px;
        font-size: 1.5rem;
        border: none;
        border-radius: 8px;
    }
    .search-form-modal button {
        padding: 16px 24px;
        font-size: 1.5rem;
        background: #00436b;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
    .search-close {
        position: absolute;
        top: 30px;
        right: 50px;
        color: #fff;
        font-size: 3rem;
        font-weight: bold;
        cursor: pointer;
        z-index: 100000;
    }
    @media (max-width: 600px) {
        .search-modal-content { max-width: 90vw; }
        .search-close { right: 20px; top: 20px; font-size: 2.2rem; }
        .search-form-modal input[type="text"] { font-size: 1.1rem; }
        .search-form-modal button { font-size: 1.1rem; }
    }
</style>

<script>
    document.getElementById('openSearchModal').onclick = function(e) {
        e.preventDefault();
        document.getElementById('searchModal').style.display = 'flex';
        document.querySelector('#searchModal input[type="text"]').focus();
    };
    document.getElementById('closeSearchModal').onclick = function() {
        document.getElementById('searchModal').style.display = 'none';
    };
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") {
            document.getElementById('searchModal').style.display = 'none';
        }
    });
</script>