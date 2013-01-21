<?php
foreach ($nav as $navigation)
{
    echo '<li>';
    echo Html::anchor('blog/index/'.$navigation->id, $navigation->name);
    //echo $navigation->name;
    echo '</li>';
}
?>
