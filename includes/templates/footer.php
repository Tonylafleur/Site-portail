<?php
require_once __DIR__ . '/../config.php';
?>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <!-- Colonne Navigation -->
            <div class="footer-col">
                <h3 class="footer-title"><?= htmlspecialchars(t('footer.navigation', 'Navigation')) ?></h3>
                <ul class="footer-links">
                    <li>
                        <a href="index.php#hero" class="footer-link">
                            <i class="bi bi-house-door"></i>
                            <?= htmlspecialchars(t('footer.home', 'Home')) ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= htmlspecialchars(SITE_URL) ?>/#about-section" class="footer-link">
                            <i class="bi bi-people"></i>
                            <?= htmlspecialchars(t('footer.about_us', 'About Us')) ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne Contact -->
            <div class="footer-col">
                <h3 class="footer-title"><?= htmlspecialchars(t('footer.contact', 'Contact')) ?></h3>
                <ul class="footer-contact">
                    <li>
                        <a href="https://maps.google.com/?q=Bonassama,Douala"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="footer-link">
                            <i class="bi bi-geo-alt"></i>
                            <?= htmlspecialchars(t('footer.address', 'Address')) ?>
                        </a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tonyetony11@gmail.com"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="footer-link">
                            <i class="bi bi-envelope"></i>
                            <?= htmlspecialchars(t('footer.email', 'Email')) ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+237672651959" class="footer-link">
                            <i class="bi bi-telephone"></i>
                            <?= htmlspecialchars(t('footer.phone', 'Phone')) ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne Réseaux sociaux -->
            <div class="footer-col">
                <h3 class="footer-title"><?= htmlspecialchars(t('footer.social_media', 'Social Media')) ?></h3>
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=100094674022030&mibextid=ZbWKwL"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="social-icon"
                       aria-label="Facebook"
                       data-tooltip="<?= htmlspecialchars(t('sidebar.facebook_tooltip', 'Suivez-nous sur Facebook')) ?>">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="https://wa.me/237672651959"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="social-icon"
                       aria-label="WhatsApp"
                       data-tooltip="<?= htmlspecialchars(t('sidebar.whatsapp_tooltip', 'Contactez-nous sur WhatsApp')) ?>">
                        <i class="bi bi-whatsapp"></i>
                    </a>

                    <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=rpkeq64"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="social-icon"
                       aria-label="Instagram"
                       data-tooltip="<?= htmlspecialchars(t('sidebar.instagram_tooltip', 'Suivez-nous sur Instagram')) ?>">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.tiktok.com/@teferet_2.0"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="social-icon"
                       aria-label="TikTok"
                       data-tooltip="<?= htmlspecialchars(t('sidebar.tiktok_tooltip', 'Suivez-nous sur TikTok')) ?>">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- Colonne Visiteurs -->
            <div class="footer-col">
                <h3 class="footer-title"><?= htmlspecialchars(t('footer.visitors', 'Visitors')) ?></h3>
                <div class="visitor-counter-card">
                    <div class="d-flex justify-content-around align-items-center">

                        <div class="text-center px-2">
                            <i class="bi bi-people-fill counter-icon"></i>
                            <div class="counter-label"><?= htmlspecialchars(t('visitors.total', 'Total')) ?></div>
                            <div class="counter-number" id="liveCounter">0</div>
                        </div>

                        <div class="vr opacity-25 mx-1"></div>

                        <div class="text-center px-2">
                            <i class="bi bi-calendar-day counter-icon"></i>
                            <div class="counter-label"><?= htmlspecialchars(t('visitors.today', 'Today')) ?></div>
                            <div class="counter-number" id="todayCounter">0</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 border-top border-light border-opacity-10">
        <div class="container">
            <p class="mb-0 small">
                <?= htmlspecialchars(t('footer.copyright', '© 2025 Tous droits réservés')) ?>
            </p>
        </div>
    </div>
</footer>

<!-- Styles du footer -->
<style>
.footer-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    padding-bottom: 30px;
}

.visitor-counter-card {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 15px;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    max-width: 220px;
    margin: 0 auto;
}

.counter-icon {
    color: #e67e22;
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.counter-label {
    font-size: 0.7rem;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    margin-bottom: 3px;
}

.counter-number {
    font-size: 1.3rem;
    font-weight: 700;
    background: linear-gradient(to right, #e67e22, #f1c40f);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.footer-copyright {
    background-color: rgba(0, 0, 0, 0.2);
    width: 100%;
}

@keyframes flipIn {
    from { transform: perspective(400px) rotateY(90deg); opacity: 0; }
    to { transform: perspective(400px) rotateY(0deg); opacity: 1; }
}

.flip-in {
    animation: flipIn 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

@media (max-width: 992px) {
    .footer-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .footer-grid {
        grid-template-columns: 1fr;
    }
    .footer-col {
        text-align: center;
    }
}
</style>

<!-- Styles icônes sociales -->
<style>
.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 15px;
}

.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.9);
    color: #2c3e50;
    font-size: 20px;
    transition: all 0.3s ease;
    position: relative;
}

.social-icon:hover {
    background-color: #e67e22;
    color: #ffffff;
    transform: translateY(-3px);
}

.social-icon::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #333;
    color: #ffffff;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 14px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.social-icon:hover::after {
    opacity: 1;
    visibility: visible;
    bottom: calc(100% + 5px);
}
</style>

<!-- Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<script src="/Teferet-Acarad/assets/js/main.js"></script>
<script src="/Teferet-Acarad/assets/js/visitors-counter.js"></script>
<script src="/assets/js/lang.js"></script>
<script src="<?= asset('js/sidebar.js') ?>"></script>
<link rel="stylesheet" href="<?= asset('css/sidebar.css') ?>">
</body>
</html>
