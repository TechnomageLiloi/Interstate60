<link href="/Engine/API/Tickets/Edit/Style.css" rel="stylesheet" />
<div id="application-diary-edit">
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.save('<?php echo $entity->getKeyDate(); ?>', '<?php echo $entity->getKeyPeriod(); ?>', '<?php echo $entity->getKeyTime(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.show('<?php echo $entity->getKeyDate(); ?>', '<?php echo $entity->getKeyPeriod(); ?>', '<?php echo $entity->getKeyTime(); ?>');">Cancel</a>
    <hr/>
    <table>

        <tr>
            <td>Comment</td>
            <td>
                <input name="comment" type="text" value="<?php echo $entity->getComment(); ?>" />
            </td>
        </tr>
    </table>
    <hr/>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.save('<?php echo $entity->getKeyDate(); ?>', '<?php echo $entity->getKeyPeriod(); ?>', '<?php echo $entity->getKeyTime(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.show('<?php echo $entity->getKeyDate(); ?>', '<?php echo $entity->getKeyPeriod(); ?>', '<?php echo $entity->getKeyTime(); ?>');">Cancel</a>
</div>