<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarUsuari($nom) {
    echo "Usuari actual: $nom\n";
}

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    // ERROR INTENCIONAT: bucle for incorrecte
    for ($i = 0; $i < count($tasques); $i++) {
        echo "[$i] ERROR\n";
    }
}


$usuariActual = "Josep Galindo Castarlenas";

$tasques = [
    1 => "Aprendre Git",
    2 => "Fer la pràctica DAW",
    3 => "Pujar projecte a GitHub"
];

echo "=== GESTOR DE TASQUES ===\n";
mostrarUsuari($usuariActual);
echo "Benvingut al sistema!\n\n";

mostrarTasques($tasques);
?>
