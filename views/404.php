<?php
require_once '../views/header.php';
echo <<<HTML
<div class='alert alert-danger'>Page non trouvée</div>
  <h1>$title</h1>
  <p>Page non trouvée...</p>
HTML;
require_once '../views/footer.php';