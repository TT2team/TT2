<?php
foreach ($nav as $navigation)
{
    echo '<li>';
    echo Html::anchor('admin/delete/'.$navigation->id, $navigation->name);
    //echo $navigation->name;
    echo '</li>';
}
?>
