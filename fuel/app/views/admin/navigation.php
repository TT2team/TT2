<?php
foreach ($nav as $navigation)
{
    echo '<li>';
    echo Html::anchor('admin/editpage/'.$navigation->id, $navigation->name);
    //echo $navigation->name;
    echo '</li>';
}
?>
