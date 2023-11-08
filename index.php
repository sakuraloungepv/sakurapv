<!DOCTYPE html>
<html lang="<?= $config['website']['lang-doc'] ?>">

<head>
    <?php include TEMPLATE . LAYOUT . "head.php"; ?>
    <?php include TEMPLATE . LAYOUT . "css.php"; ?>
</head>

<body>
    <div class="body-container">
        <header class="main-header">
            <?php
            include TEMPLATE . LAYOUT . "seo.php";
            // include TEMPLATE . LAYOUT . "header.php";
            include TEMPLATE . LAYOUT . "menu.php";
            if ($config['byvmc']['responsive']) include TEMPLATE . LAYOUT . "mmenu.php";
            ?>
        </header>
        <main class="main-content">
            <?php
            include TEMPLATE . LAYOUT . "slide.php";
            if ($source != 'index') include TEMPLATE . LAYOUT . "breadcrumb.php";
            ?>
            <?php if ($source == 'index') { ?>
                <?php include TEMPLATE . $template . "_tpl.php"; ?>
            <?php } else { ?>
                <div class="<?= $source ?>-template pd-40">
                    <div class="wrapper-content">
                        <?php include TEMPLATE . $template . "_tpl.php"; ?>
                    </div>
                </div>
            <?php } ?>
        </main>
        <footer class="main-footer">
            <?php include TEMPLATE . LAYOUT . "footer.php"; ?>
        </footer>
        <?php include TEMPLATE . LAYOUT . "modal.php"; ?>
        <?php if ($deviceType == 'mobile') include TEMPLATE . LAYOUT . "phone.php"; ?>
    </div>
    <?php include TEMPLATE . LAYOUT . "js.php"; ?>
</body>

</html>