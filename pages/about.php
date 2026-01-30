<?php
require_once __DIR__ . '/../config.php';

define('TEMPLATES_PATH', __DIR__ . '/../templates/');

// Titre de la page (multilingue)
$title = t('about.title', 'Qui sommes-nous ?');

ob_start();

/**
 * Rendu d’un composant (fallback si non défini ailleurs)
 */
if (!function_exists('renderComponent')) {
    function renderComponent(string $component, array $params = []): void {
        $title   = htmlspecialchars($params['title'] ?? '');
        $image   = htmlspecialchars($params['image'] ?? '');
        $content = htmlspecialchars($params['content'] ?? '');
        $class   = htmlspecialchars($params['class'] ?? '');

        echo "<div class=\"card {$class}\">";
        echo "<img src=\"{$image}\" alt=\"{$title}\">";
        echo "<h2>{$title}</h2>";
        echo "<p>{$content}</p>";
        echo "</div>";
    }
}
?>

<section class="about-section">
    <div class="container">

        <?php
        // === Composant TEFERET ===
        renderComponent('card', [
            'title'   => t('about.teferet.title', 'Teferet Cosmétiques'),
            'image'   => asset('images/logos/teferet-logo.png'),
            'content' => t(
                'about.teferet.description',
                'Texte de présentation de Teferet cosmétiques...'
            ),
            'class'   => 'teferet-card'
        ]);

        // === Composant ACARAD ===
        renderComponent('card', [
            'title'   => t('about.acarad.title', 'ACARAD'),
            'image'   => asset('images/logos/acarad-logo.png'),
            'content' => t(
                'about.acarad.description',
                'Texte de présentation de l\'association ACARAD...'
            ),
            'class'   => 'acarad-card'
        ]);
        ?>

    </div>
</section>

<?php
$content = ob_get_clean();
include TEMPLATES_PATH . 'base.php';
?>
