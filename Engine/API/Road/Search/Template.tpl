<link href="<?php echo ROOT_URL; ?>/Engine/API/Road/Search/Style.css" rel="stylesheet" />

<div id="application-diary-edit">
    <table>
        <tr>
            <th style="text-align: left;width: 300px;">Step</th>
            <th style="text-align: left;">Summary</th>
            <th style="text-align: right;">Data</th>
        </tr>
        <?php foreach($collection as $entity): ?>
            <tr>
                <td><?php echo $entity->getStep(); ?></td>
                <td><?php echo $entity->getSummary(); ?></td>
                <td style="text-align: right;"><?php echo $entity->getData(); ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>