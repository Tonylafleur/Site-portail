<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/templates/header.php';
?>

<section id="hero" class="hero" aria-labelledby="hero-title">
    <div class="hero-content">
        <h1 id="hero-title">
            <?= htmlspecialchars(t('hero.title', 'Art, culture et cosmétique africaine.')) ?>
        </h1>

        <div class="hero-text-container">
            <div class="triangle-shape">
                <span class="line">
                    <?= htmlspecialchars(t(
                        'hero.description',
                        'L\'art et la culture sont essentiels pour comprendre le monde et notre place en lui.'
                    )) ?>
                </span>

                <span class="line">
                    <?= htmlspecialchars(t(
                        'hero.description1',
                        'Ils nous connectent à nos racines, à notre identité et à notre histoire.'
                    )) ?>
                </span>

                <span class="line">
                    <?= htmlspecialchars(t(
                        'hero.description2',
                        'La cosmétique africaine, enracinée dans des traditions ancestrales, célèbre la beauté naturelle et la diversité de notre continent.'
                    )) ?>
                </span>

                <span class="line">
                    <?= htmlspecialchars(t(
                        'hero.description3',
                        'Ensemble, ils forment un pont entre le passé et l\'avenir, enrichissant notre expérience humaine.'
                    )) ?>
                </span>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/templates/about.php';
require_once __DIR__ . '/includes/templates/footer.php';
?>
