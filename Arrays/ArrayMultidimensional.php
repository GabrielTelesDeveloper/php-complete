<?php

echo '<h3>Selecione a sua data de nascimento:</h3>';
echo '<select>';
for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
    echo "<option value={$i}>{$i}</option>";
}
echo '</select>';
?>
