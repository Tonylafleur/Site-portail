<?php
http_response_code(404);

require_once __DIR__ . '/../../includes/config.php';

// Titre de la page (multilingue)
$pageTitle = t('errors.404.title', 'Page introuvable');

require_once __DIR__ . '/../../includes/templates/header.php';
?>

<main class="error-container" role="main" aria-labelledby="error-title">
    <h1 id="error-title">404</h1>

    <p>
        <?= htmlspecialchars(t(
            'errors.404.message',
            'Oups ! Cette page s\'est volatilisée.'
        )) ?>
    </p>

    <div class="cta-buttons">
        <a href="/" class="btn">
            <?= htmlspecialchars(t('errors.404.home', 'Accueil')) ?>
        </a>

        <a href="mailto:tonyetony11@gmail.com" class="btn">
            <?= htmlspecialchars(t('errors.404.contact', 'Nous contacter')) ?>
        </a>
    </div>
</main>

<?php
require_once __DIR__ . '/../../includes/templates/footer.php';
?>
