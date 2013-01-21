<?php
foreach ($nav as $navigation)
{
    echo '<li>';
    echo Html::anchor('drinks/index/'.$navigation->id, $navigation->name);
    //echo $navigation->name;
    echo '</li>';
}
?>
