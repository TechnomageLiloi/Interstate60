<link href="<?php echo ROOT_URL; ?>/Engine/API/Road/Show/Style.css" rel="stylesheet" />

<div id="application-diary-show" class="stylo">

    <div class="controls">
        <a href="javascript:void(0)" onclick="I60.Road.show();">Show</a> &diams;
        <a href="javascript:void(0)" onclick="I60.Road.edit();">Edit</a>
    </div>

    <div class="data">
        <?php echo $entity->getTypeTitle(); ?> &diams;
        <?php echo $entity->getData(); ?><br/>
    </div>

    <hr/>

    <?php echo $entity->parse(); ?>

    <hr/>
</div>