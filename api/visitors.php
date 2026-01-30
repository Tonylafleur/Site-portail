<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$dataFile = __DIR__.'/../data/visitors.json';

// Créer le répertoire data s'il n'existe pas
if (!file_exists(dirname($dataFile))) {
    mkdir(dirname($dataFile), 0755, true);
}

// Initialisation des données
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([
        'total' => 0,
        'today' => 0,
        'date' => date('Y-m-d'),
        'ips' => []
    ]));
}

$data = json_decode(file_get_contents($dataFile), true);
$isNewVisitor = false;

// Vérification par IP (plus fiable que les cookies)
$visitorIp = $_SERVER['REMOTE_ADDR'];

if (!in_array($visitorIp, $data['ips'])) {
    // Réinitialisation quotidienne
    if ($data['date'] !== date('Y-m-d')) {
        $data['today'] = 0;
        $data['date'] = date('Y-m-d');
        $data['ips'] = []; // Réinitialiser les IPs quotidiennement
    }

    $data['total']++;
    $data['today']++;
    $data['ips'][] = $visitorIp;
    $isNewVisitor = true;
    
    file_put_contents($dataFile, json_encode($data));
}

echo json_encode([
    'success' => true,
    'total' => $data['total'],
    'today' => $data['today'],
    'isNew' => $isNewVisitor,
    'timestamp' => time()
]);