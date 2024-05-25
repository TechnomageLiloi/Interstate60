<link href="<?php echo ROOT_URL; ?>/Engine/API/Wiki/Show/Style.css" rel="stylesheet" />
<div id="atoms-show">
    <h1>
        <?php echo $entity->getTitle(); ?>
    </h1>
    <hr/>
    <?php echo $entity->parseArticle(); ?>
</div>