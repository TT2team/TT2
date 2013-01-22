<?php

echo '<h2>Admin home page</h2>';
//echo $_POST['id'];

if(isset($darbiba))
{
    
    echo '<table class="table table-hover">';
    echo '<thead>';
        echo '<tr>';
        echo '<td>';
        echo 'action';
        echo '</td>';
        echo '<td>';        
        echo 'changed_id';        
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
        if($ad->action_code==0){
            echo 'Login';
        }else if($ad->action_code==10){
            echo 'Added page';
        }else if($ad->action_code==11){
            echo 'Edited page';
        }else if($ad->action_code==12){
            echo 'Deleted page';
        }else if($ad->action_code==20){
            echo 'Edited coctail';
        }else if($ad->action_code==21){
            echo 'Deleted coctail';
        }else if($ad->action_code==30){
            echo 'Edited comment';
        }else if($ad->action_code==31){
            echo 'Deleted comment';
        }else
        //echo $ad->action_code;
        echo '</td>';
        echo '<td>';
        echo $ad->changed_id;
        echo '</td>';
        echo '<td>';
        echo $ad->changed_name;
        echo '</td>';
        echo '</tr>';
    
    }
    echo '</tbody>';
    echo '</table>';
}

echo '<a href="newpage">Add new page</a>';
echo ' &nbsp &nbsp &nbsp &nbsp &nbsp';
echo '<a href="editpage">Edit existing page</a>';
echo ' &nbsp &nbsp &nbsp &nbsp &nbsp';
echo '<a href="deletepage">Delete existing page</a>';
echo '<br>';
echo '<a href="list">View Cocktails</a>';

?>