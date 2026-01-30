<?php
require_once __DIR__ . '/../config.php';
$currentLang = CURRENT_LANG;
?>

<nav class="navbar">
    <div class="container">
        <a href="index.php" class="logo" aria-label="Accueil"></a>

        <div class="menu-toggle" id="mobile-menu" aria-label="Menu mobile" role="button" tabindex="0">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="nav-list">
            <li class="nav-item">
                <a href="index.php#hero" class="nav-link">
                    <span class="link-text"><?= htmlspecialchars(t('navbar.home', 'Accueil')) ?></span>
                    <span class="link-hover"></span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= htmlspecialchars(SITE_URL) ?>/#about-section" class="nav-link">
                    <span class="link-text"><?= htmlspecialchars(t('navbar.about', 'Qui sommes-nous ?')) ?></span>
                    <span class="link-hover"></span>
                </a>
            </li>

            <li class="nav-item language-selector">
                <div class="current-language" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= optimized_asset('images/flags/' . $currentLang . '.png') ?>"
                         alt="<?= strtoupper($currentLang) ?> flag">
                    <span><?= strtoupper($currentLang) ?></span>
                </div>

                <ul class="language-dropdown">
                    <li>
                        <a href="?lang=fr" class="<?= $currentLang === 'fr' ? 'active' : '' ?>">
                            <img src="<?= asset('images/flags/fr.png') ?>" alt="FR flag">
                            <span><?= htmlspecialchars(t('navbar.languages.fr', 'Français')) ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="?lang=en" class="<?= $currentLang === 'en' ? 'active' : '' ?>">
                            <img src="<?= asset('images/flags/en.png') ?>" alt="EN flag">
                            <span><?= htmlspecialchars(t('navbar.languages.en', 'English')) ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="?lang=ru" class="<?= $currentLang === 'ru' ? 'active' : '' ?>">
                            <img src="<?= asset('images/flags/ru.png') ?>" alt="RU flag">
                            <span><?= htmlspecialchars(t('navbar.languages.ru', 'Русский')) ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<style>
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background: #2c3e50;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    padding: 15px 0;
    transition: all 0.3s ease;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    display: block;
    height: 40px;
    width: 120px;
}

.nav-list {
    display: flex;
    list-style: none;
    align-items: center;
    gap: 30px;
}

.nav-item {
    position: relative;
}

.nav-link {
    position: relative;
    color: #08b84bff;
    text-decoration: none;
    font-weight: 500;
    padding: 10px 0;
    overflow: hidden;
}

.link-hover {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: #e67e22;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
}

.nav-link:hover .link-hover {
    transform: translateX(0);
}

.nav-link:hover .link-text {
    color: #22e65dff;
}

/* ===== LANGUAGE SELECTOR ===== */
.language-selector {
    position: relative;
    margin-left: 20px;
}

.current-language {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    padding: 8px 12px;
    border-radius: 20px;
    background: #f5f5f5;
    transition: all 0.3s ease;
    color: #000000;
    font-weight: 600;
}

.current-language:hover {
    background: #e8e8e8;
}

.current-language img {
    width: 20px;
    height: 15px;
    object-fit: cover;
    border-radius: 2px;
    border: 1px solid #ddd;
}

.language-dropdown {
    position: absolute;
    top: 100%;
    right: 0;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 10px 0;
    min-width: 150px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease;
    z-index: 100;
}

.language-selector:hover .language-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.language-dropdown li a {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 15px;
    color: #000000;
    text-decoration: none;
    transition: all 0.2s ease;
    font-weight: 500;
}

.language-dropdown li a:hover {
    background: #f5f5f5;
}

.language-dropdown .active {
    background: #f0f0f0;
    font-weight: 600;
}

/* ===== MOBILE MENU ===== */
.menu-toggle {
    display: none;
    cursor: pointer;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.menu-toggle span {
    display: block;
    height: 3px;
    width: 100%;
    background: #333;
    border-radius: 3px;
    transition: all 0.3s ease;
}

@media (max-width: 768px) {
    .menu-toggle {
        display: flex;
    }

    .nav-list {
        position: fixed;
        top: 70px;
        left: 0;
        width: 100%;
        background: #ffffff;
        flex-direction: column;
        align-items: center;
        padding: 20px 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-150%);
        transition: transform 0.3s ease;
    }

    .nav-list.active {
        transform: translateY(0);
    }

    .nav-link {
        color: #333333;
    }

    .nav-link:hover .link-text {
        color: #e67e22;
    }

    .language-selector {
        margin-left: 0;
    }

    .language-dropdown {
        right: auto;
        left: 50%;
        transform: translate(-50%, 10px);
    }

    .language-selector:hover .language-dropdown {
        transform: translate(-50%, 0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');

    if (menuToggle && navList) {
        menuToggle.addEventListener('click', function (e) {
            e.stopPropagation();
            this.classList.toggle('active');
            navList.classList.toggle('active');
        });
    }

    document.addEventListener('click', function (e) {
        if (!e.target.closest('.navbar')) {
            if (menuToggle) menuToggle.classList.remove('active');
            if (navList) navList.classList.remove('active');
        }
    });
});
</script>
