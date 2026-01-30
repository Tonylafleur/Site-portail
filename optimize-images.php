<?php
require_once __DIR__ . '/includes/config.php';

function optimizeImage($sourcePath, $maxWidth = null, $quality = 80) {
    if (!file_exists($sourcePath)) {
        return false;
    }
    
    $info = pathinfo($sourcePath);
    $extension = strtolower($info['extension']);
    $filename = $info['filename'];
    $directory = $info['dirname'];
    
    // Créer le dossier webp si nécessaire
    $webpPath = $directory . '/' . $filename . '.webp';
    
    // Vérifier si l'optimisation est nécessaire
    $originalSize = filesize($sourcePath);
    $oneWeekAgo = time() - (7 * 24 * 60 * 60);
    
    if (file_exists($webpPath) && filemtime($webpPath) > $oneWeekAgo) {
        return $webpPath;
    }
    
    // Optimisation selon le format
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            $image = imagecreatefromjpeg($sourcePath);
            break;
        case 'png':
            $image = imagecreatefrompng($sourcePath);
            break;
        default:
            return $sourcePath;
    }
    
    if (!$image) return $sourcePath;
    
    // Redimensionnement si nécessaire
    if ($maxWidth) {
        $originalWidth = imagesx($image);
        $originalHeight = imagesy($image);
        
        if ($originalWidth > $maxWidth) {
            $newHeight = intval($originalHeight * $maxWidth / $originalWidth);
            $resizedImage = imagescale($image, $maxWidth, $newHeight);
            imagedestroy($image);
            $image = $resizedImage;
        }
    }
    
    // Conversion en WebP
    imagewebp($image, $webpPath, $quality);
    imagedestroy($image);
    
    return file_exists($webpPath) ? $webpPath : $sourcePath;
}

// Optimiser toutes les images
$imagesToOptimize = [
    'images/logos/teteart1.jpg' => ['width' => 1920, 'quality' => 80],
    'images/background/art5.jpg' => ['width' => 1200, 'quality' => 75],
    'images/logos/logo.png' => ['width' => 300, 'quality' => 85],
    'images/logos/logoA.png' => ['width' => 300, 'quality' => 85],
    'images/flags/fr.png' => ['width' => 40, 'quality' => 90],
    'images/flags/en.png' => ['width' => 40, 'quality' => 90],
    'images/flags/ru.png' => ['width' => 40, 'quality' => 90]
];

echo "<h2>🖼️ Optimisation des images</h2>";

foreach ($imagesToOptimize as $imagePath => $settings) {
    $fullPath = __DIR__ . '/assets/' . $imagePath;
    $optimizedPath = optimizeImage($fullPath, $settings['width'], $settings['quality']);
    
    if ($optimizedPath && $optimizedPath !== $fullPath) {
        $originalSize = filesize($fullPath);
        $optimizedSize = filesize($optimizedPath);
        $savings = round((1 - $optimizedSize / $originalSize) * 100, 2);
        
        echo "<p>✅ " . basename($imagePath) . " : {$originalSize}KB → {$optimizedSize}KB (-{$savings}%)</p>";
    } elseif (file_exists($fullPath)) {
        echo "<p>⚠️ " . basename($imagePath) . " : déjà optimisée</p>";
    } else {
        echo "<p>❌ " . basename($imagePath) . " : fichier introuvable</p>";
    }
}
?>