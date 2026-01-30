<?php
// sidebar.php
// Dépend des helpers asset() et t() définis dans config.php
require_once __DIR__ . '/config.php';
?>

<div class="sidebar" aria-label="Social media links">
    <a href="https://www.facebook.com/profile.php?id=100094674022030&mibextid=ZbWKwL"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       data-network="facebook"
       aria-label="Facebook">
        <img src="<?= asset('icons/facebook.jpeg') ?>" alt="Facebook icon">
        <span class="tooltip">
            <?= htmlspecialchars(t('sidebar.facebook_tooltip', 'Follow us')) ?>
        </span>
    </a>

    <a href="https://wa.me/237672651959"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       data-network="whatsapp"
       aria-label="WhatsApp">
        <img src="<?= asset('icons/whatsapp.png') ?>" alt="WhatsApp icon">
        <span class="tooltip">
            <?= htmlspecialchars(t('sidebar.whatsapp_tooltip', 'Contact us')) ?>
        </span>
    </a>

    <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=rpkeq64"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       data-network="instagram"
       aria-label="Instagram">
        <img src="<?= asset('icons/instagram.jpeg') ?>" alt="Instagram icon">
        <span class="tooltip">
            <?= htmlspecialchars(t('sidebar.instagram_tooltip', 'Follow us')) ?>
        </span>
    </a>

    <a href="https://www.tiktok.com/@teferet_2.0?_r=1&_d=e5eec66d15c4c5"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       data-network="tiktok"
       aria-label="TikTok">
        <img src="<?= asset('icons/tiktok.png') ?>" alt="TikTok icon">
        <span class="tooltip">
            <?= htmlspecialchars(t('sidebar.tiktok_tooltip', 'Follow us')) ?>
        </span>
    </a>
</div>

