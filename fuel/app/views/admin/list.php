<?php
echo Html::anchor('drinks/add', 'Add new cocktail');
echo '<form class="form-horizontal">';
echo '<fieldset>';
echo '<legend>Search</legend>';
echo '<label>Name:</label>';
echo '<input type="text" name="name">';
echo '<label>Ingridients:</label>';
echo '<input type="text" name="ingr">';
echo '<button type="submit" class="btn">Search</button>';
echo '</fieldset>';
echo '</form>';

if(isset($data))
{
    
    echo '<table class="table table-hover">';
    echo '<thead>';
        echo '<tr>';
        echo '<td>';
        echo 'Name';
        echo '</td>';
        echo '<td>';        
        echo 'Rating';        
        echo '</td>';
        echo '<td>';
        echo 'Delete';
        echo '</td>';
        
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($data as $record)
    {
        echo '<tr>';
        echo '<td>';
        echo Html::anchor('drinks/view/'.$record->id, $record->name);
        echo '</td>';
        echo '<td>';
        echo $record->likes;
        echo '/';
        echo $record->unlikes;
        echo '</td>';
        echo '<td>';
        echo Html::anchor('admin/delkokteil/'.$record->id,'Delete');
        echo '</td>';
       
        echo '</tr>';
    
    }
    echo '</tbody>';
    echo '</table>';
}

?>
