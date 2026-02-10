<link href="/Engine/API/Tickets/Edit/Style.css" rel="stylesheet" />
<div id="application-diary-edit">
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.save('<?php echo $entity->getKeyTicket(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.show('<?php echo $entity->getKeyTicket(); ?>');">Cancel</a>
    <hr/>
    <table>

        <tr>
            <td>Timestamp</td>
            <td>
                <input name="start" type="text" value="<?php echo $entity->getStart(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>
                <input name="title" type="text" value="<?php echo $entity->getTitle(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <input name="status" type="text" value="<?php echo $entity->getStatus(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Data</td>
            <td>
                <textarea name="data"><?php echo $entity->getData(); ?></textarea>
            </td>
        </tr>
    </table>
    <hr/>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.save('<?php echo $entity->getKeyTicket(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.show('<?php echo $entity->getKeyTicket(); ?>');">Cancel</a>
</div>