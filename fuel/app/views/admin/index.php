<?php

echo '<h2>Admin home page</h2>';

if(isset($darbiba))
{
    
    echo '<table class="table table-hover">';
    echo '<thead>';
        echo '<tr>';
        echo '<td>';
        echo 'action_id';
        echo '</td>';
        echo '<td>';        
        echo 'changed_code';        
        echo '</td>';
        echo '<td>';
        echo 'chenged_name';
        echo '</td>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($darbiba as $ad)
    {
        echo '<tr>';
        echo '<td>';
        echo $ad->action_id;
        echo '</td>';
        echo '<td>';
        echo $ad->changed_code;
        echo '</td>';
        echo '<td>';
        echo $ad->changed_name;
        echo '</td>';
        echo '</tr>';
    
    }
    echo '</tbody>';
    echo '</table>';
}


?>