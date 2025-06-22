<?php if(!empty($_SESSION["flash"])): ?>
    <?php if(isset($_SESSION["flash"]["variant"]) && $_SESSION["flash"]["variant"] === "success"): ?>
        <p class="bg-emerald-700/20 border border-emerald-700 p-4 rounded-md mt-4 text-emerald-700">
            <?=$_SESSION["flash"]["message"];?>
        </p>
    <?php endif; ?>
     <?php if(isset($_SESSION["flash"]["variant"]) && $_SESSION["flash"]["variant"] === "error"): ?>
        <p class="bg-rose-700/20 border border-rose-700 p-4 rounded-md mt-4 text-rose-700">
            <?=$_SESSION["flash"]["message"];?>
        </p>
    <?php endif; ?>
<?php endif; ?>