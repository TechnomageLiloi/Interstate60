<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

<div id="quests-schedule">

    <style>
        tr.to-do td
        {
            background-color: #ffd3d3;
        }
        tr.in-hand td
        {
            background-color: #feffd3;
        }
        tr.complete td
        {
            background-color: #d6ffd3;
        }
    </style>

    <div style="text-align: center;">
        <h1>Quests for today</h1>
        <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.create();">Create new quest</a>
    </div>

    <table style="width: 100%;">
        <tr style="text-align: left;">
            <th>Unique ID</th>
            <th>Timestamp</th>
            <th>Mark</th>
            <th>Title</th>
            <th>Start</th>
            <th>Data</th>
            <th style="text-align: right;">Actions</th>
        </tr>
        <?php foreach($schedule as $key => $entity): ?>
        <tr class="<?php echo $entity->getClass(); ?>">
            <td>#<?php echo $entity->getUID(); ?></td>
            <td><?php echo $entity->getStart(); ?></td>
            <td><?php echo $entity->getMark(); ?></td>
            <td><?php echo $entity->getTitle(); ?></td>
            <td><?php echo $entity->getClass(); ?></td>
            <td><?php echo $entity->getData(); ?></td>
            <td style="text-align: right;">
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.inHand('<?php echo $entity->getKeyQuest(); ?>');">Set In Hand</a>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.show('<?php echo $entity->getKeyQuest(); ?>');">Show</a>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.edit('<?php echo $entity->getKeyQuest(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>