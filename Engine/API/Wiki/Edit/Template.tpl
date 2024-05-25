<link href="<?php echo ROOT_URL; ?>/Engine/API/Wiki/Edit/Style.css" rel="stylesheet" />
<div id="wiki-edit">
    <table>
        <tr>
            <td>Title</td>
            <td>
                <input type="text" name="title" value="<?php echo $entity->getTitle(); ?>"/>
            </td>
        </tr>
        <tr>
            <td>Article</td>
            <td>
                <textarea name="article"><?php echo $entity->getArticle(); ?></textarea>
            </td>
        </tr>
    </table>
</div>