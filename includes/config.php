<?php
// config.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* =========================
   URLS DU SITE (OBLIGATOIRES)
   ========================= */

/**
 * URL principale du site (auto-détection)
 */
if (!defined('SITE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    define('SITE_URL', $protocol . '://' . $host . $basePath);
}

/**
 * URL du site ACARAD
 * 👉 modifie ici si l’URL change
 */
if (!defined('ACARAD_SITE_URL')) {
    define('ACARAD_SITE_URL', 'https://acarad.org');
}

/**
 * URL du site Teferet SARL
 * 👉 modifie ici si l’URL change
 */
if (!defined('TEFERET_SARL_URL')) {
    define('TEFERET_SARL_URL', 'https://teferet.com');
}

/* =========================
   CONFIGURATION LANGUE
   ========================= */

// Langue courante (cookie > défaut)
$lang = $_COOKIE['lang'] ?? 'fr';

// Langues supportées
$supportedLangs = ['fr', 'en', 'ru'];

// Sécurisation stricte
if (!in_array($lang, $supportedLangs, true)) {
    $lang = 'fr';
}

// Constante langue courante
if (!defined('CURRENT_LANG')) {
    define('CURRENT_LANG', $lang);
}

/* =========================
   CHARGEMENT DES TRADUCTIONS
   ========================= */

$langFile = __DIR__ . "/lang/{$lang}.json";

if (!file_exists($langFile)) {
    $langFile = __DIR__ . "/lang/fr.json";
}

$langData = json_decode(file_get_contents($langFile), true);
if (!is_array($langData)) {
    $langData = [];
}

/* =========================
   HELPERS GLOBAUX
   ========================= */

/**
 * Génère un chemin d’asset
 */
function asset(string $path): string {
    return '/assets/' . ltrim($path, '/');
}

/**
 * Génère un chemin d’asset optimisé
 */
function optimized_asset(string $path): string {
    return '/assets/' . ltrim($path, '/');
}

/**
 * Récupère une traduction avec fallback sécurisé
 */
function t(string $key, string $fallback = ''): string {
    global $langData;

    $keys = explode('.', $key);
    $value = $langData;

    foreach ($keys as $k) {
        if (!is_array($value) || !array_key_exists($k, $value)) {
            return $fallback;
        }
        $value = $value[$k];
    }

    return is_string($value) ? $value : $fallback;
}
