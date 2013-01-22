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
    echo Html::anchor('drinks/like/'.$cocktail->id,'Like! ');
    echo Html::anchor('drinks/dislike/'.$cocktail->id,' Dislike!');
    
    echo '</p>';
    echo '<form method="POST">';
    echo '<legend>Add Commentary</legend>';
    echo '<fieldset>';
    echo '<label>Name:</label>';
    echo '<input type="text" name="name"><br>';
    echo '<textarea name="comment" cols="40" rows="6"></textarea>';
    echo '</fieldset>';
    echo '<button type="submit" class="btn">Add</button>';
    echo '</form>';
    if(isset($comments))
    {
        foreach ($comments as $comment)
        {
            echo '<h3>';
            echo $comment->username;
            echo '</h3>';
            echo '<p>';
            echo $comment->comment;
            echo '</p>';
        }
    }
}

?>
