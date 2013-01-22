<?php
if(isset($cocktail))
{
    echo '<h2>';
    echo $cocktail->name;
    echo '</h2>';
    echo '<p>';
    echo 'Components:<br>';
    if(isset($comp))
    {
        foreach($comp as $ingr)
        {
            echo $ingr->amount;
            echo ' ';
            echo $ingr->unit;
            echo ' of ';
            echo $ingr->ingredient;
            echo '<br>';
        }
    }
    else {
        echo'empty';
    }
    
    echo '</p>';
}

?>
