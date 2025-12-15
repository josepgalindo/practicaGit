<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    foreach ($tasques as $id => $desc) {
        echo "[$id] $desc\n";
    }
}

$tasques = [
    1 => "Aprendre Git",
    2 => "Fer la pràctica DAW",
    3 => "Pujar projecte a GitHub"
];

echo "=== GESTOR DE TASQUES ===\n";
echo "Benvingut al sistema!\n\n";

mostrarTasques($tasques);
?>
