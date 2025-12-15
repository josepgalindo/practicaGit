<?php
// Mòdul de tasques independent

function afegirTasca(&$tasques, $descripcio) {
    $id = count($tasques) + 1;
    $tasques[$id] = $descripcio;
    return $id;
}

function eliminarTasca(&$tasques, $id) {
    if (isset($tasques[$id])) {
        unset($tasques[$id]);
        return true;
    }
    return false;
}
?>
