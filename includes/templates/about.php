<?php
require_once __DIR__ . '/../config.php';
?>
<section id="about-section" class="about-section">
    <div class="about-fixed-bg"
         style="background-image: url('<?= optimized_asset('images/logos/teteart1.jpg') ?>')"
         aria-hidden="true"></div>

    <div class="about-content">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-white">
                    <?= htmlspecialchars(t('about.title', 'Qui sommes-nous ?')) ?>
                </h2>
                <!-- <p class="section-subtitle">Découvrez nos marques partenaires</p> -->
            </div>

            <div class="about-grid">

                <!-- Carte TEFERET -->
                <div class="about-card">
                    <div class="card-bg"
                         style="background-image: url('<?= optimized_asset('images/background/art5.jpg') ?>')"
                         aria-hidden="true"></div>
                    <div class="card-overlay"></div>

                    <div class="card-content">
                        <a href="<?= htmlspecialchars(TEFERET_SARL_URL) ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="logo-link"
                           aria-label="Teferet website">
                            <img src="<?= optimized_asset('images/logos/logo.png') ?>"
                                 alt="Logo Teferet">
                        </a>

                        <h3 class="about-card-title teferet-title">
                            <?= htmlspecialchars(t('about.teferet.title', 'Teferet')) ?>
                        </h3>

                        <p class="about-card-text teferet-text">
                            <?= htmlspecialchars(t(
                                'about.teferet.description',
                                'Description de Teferet à compléter'
                            )) ?>
                        </p>

                        <div class="about-card-footer">
                            <a href="<?= htmlspecialchars(TEFERET_SARL_URL) ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="cta-button">
                                <?= htmlspecialchars(t('about.visit_website', 'Visiter le site')) ?>
                                <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Carte ACARAD -->
                <div class="about-card">
                    <div class="card-bg"
                         style="background-image: url('<?= optimized_asset('images/background/art5.jpg') ?>')"
                         aria-hidden="true"></div>
                    <div class="card-overlay"></div>

                    <div class="card-content">
                        <a href="<?= htmlspecialchars(ACARAD_SITE_URL) ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="logo-link"
                           aria-label="ACARAD website">
                            <img src="<?= optimized_asset('images/logos/logoA.png') ?>"
                                 alt="Logo ACARAD">
                        </a>

                        <h3 class="about-card-title acarad-title">
                            <?= htmlspecialchars(t('about.acarad.title', 'ACARAD')) ?>
                        </h3>

                        <p class="about-card-text acarad-text">
                            <?= htmlspecialchars(t(
                                'about.acarad.description',
                                'Description de ACARAD à compléter'
                            )) ?>
                        </p>

                        <div class="about-card-footer">
                            <a href="<?= htmlspecialchars(ACARAD_SITE_URL) ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="cta-button">
                                <?= htmlspecialchars(t('about.visit_website', 'Visiter le site')) ?>
                                <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
/* ===== ABOUT SECTION ===== */
.about-section {
    position: relative;
    min-height: 100vh;
    padding: 100px 0;
    overflow: hidden;
}

.about-fixed-bg {
    position: fixed;
    inset: 0;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    filter: brightness(0.7);
    z-index: -1;
}

.about-content {
    position: relative;
    z-index: 1;
    padding: 80px 0;
}

.about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

/* ===== CARDS ===== */
.about-card {
    position: relative;
    border-radius: 20px;
    min-height: 450px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    animation: fadeInUp 0.8s ease forwards;
    opacity: 0;
}

.about-card:nth-child(1) { animation-delay: 0.2s; }
.about-card:nth-child(2) { animation-delay: 0.4s; }

.card-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.5s ease;
    z-index: 1;
}

.card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(255,255,255,0.95) 0%,
        rgba(255,255,255,0.88) 50%,
        rgba(255,255,255,0.92) 100%
    );
    z-index: 2;
}

.card-content {
    position: relative;
    z-index: 3;
    padding: 40px 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.about-card:hover .card-bg { transform: scale(1.05); }
.about-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.4);
}

/* ===== TEXT ===== */
.teferet-title,
.acarad-title {
    font-family: 'Tommy Hilfiger', 'Arial Black', sans-serif;
    color: #000000;
    font-size: 2.2rem;
    margin: 20px 0 15px;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
}

.teferet-title::after,
.acarad-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #e67e22, #f1c40f, #e67e22);
}

.teferet-text,
.acarad-text {
    font-family: 'Champagne & Limousines', 'Georgia', serif;
    color: #000000;
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
    flex-grow: 1;
    font-weight: 500;
}

/* ===== LOGOS ===== */
.logo-link img {
    max-height: 100px;
    transition: transform 0.3s ease;
    filter: drop-shadow(0 5px 15px rgba(0,0,0,0.3));
}

.logo-link:hover img {
    transform: scale(1.1);
}

/* ===== CTA ===== */
.cta-button {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 14px 30px;
    background: linear-gradient(135deg, #2c3e50, #34495e);
    color: #ffffff;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background: linear-gradient(135deg, #e67e22, #f39c12);
    transform: translateY(-3px);
}

/* ===== HEADER ===== */
.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-title {
    font-size: 3rem;
    color: #ffffff;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    font-weight: 700;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #e67e22, #f1c40f, #e67e22);
}

/* ===== ANIMATION ===== */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .about-grid { grid-template-columns: 1fr; padding: 0 20px; }
    .section-title { font-size: 2.2rem; }
    .about-fixed-bg { background-attachment: scroll; }
}

@media (max-width: 480px) {
    .section-title { font-size: 1.8rem; }
}
</style>
