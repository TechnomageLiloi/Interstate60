<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="tickets-schedule">

<table>
    <?php foreach($schedule as $key => $hour): ?>
    <tr>
        <?php foreach($hour as $entity): ?>
            <th><?php echo $entity->getKeyTime(); ?></th>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>

</div>