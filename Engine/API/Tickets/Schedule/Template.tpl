<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="tickets-schedule">

    <h1>Tickets for today</h1>

    <table style="width: 100%;">
        <tr style="text-align: left;">
            <th>Unique ID</th>
            <th>Timestamp</th>
            <th>Title</th>
            <th>Start</th>
            <th>Data</th>
            <th>Actions</th>
        </tr>
        <?php foreach($schedule as $key => $entity): ?>
        <tr>
            <td>#<?php echo $entity->getKeyTicket(); ?></td>
            <td><?php echo $entity->getStart(); ?></td>
            <td><?php echo $entity->getTitle(); ?></td>
            <td><?php echo $entity->getStatus(); ?></td>
            <td><?php echo $entity->getData(); ?></td>
            <td>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Tickets.show('<?php echo $entity->getKeyTicket(); ?>');">Show</a>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Tickets.edit('<?php echo $entity->getKeyTicket(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>