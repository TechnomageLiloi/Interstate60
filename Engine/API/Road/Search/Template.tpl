<link href="<?php echo ROOT_URL; ?>/Engine/API/Road/Search/Style.css" rel="stylesheet" />

<div id="application-diary-edit">
    <table>
        <tr>
            <th style="text-align: left;">Summary</th>
            <th style="text-align: left;">Data</th>
        </tr>
        <?php foreach($collection as $entity): ?>
            <tr>
                <td><?php echo $entity->getSummary(); ?></td>
                <td><?php echo $entity->getData(); ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>