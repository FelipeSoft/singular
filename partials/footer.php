<?php
require_once __DIR__ . "/../bootstrap/load_env.php";
loadEnv(__DIR__ . "/../.env");
$BASE_URL = getenv(name: "BASE_URL");
?>
</main>
</div>
</div>
<script src="<?= $BASE_URL ?>/assets/js/flyonui.js"></script>
<script src="<?= $BASE_URL ?>/assets/js/flatpickr.js"></script>
</body>

</html>