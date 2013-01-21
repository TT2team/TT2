<?php
    if(isset($data))
    {
        echo '<h2>';
        echo $data->name;
        echo' </h2>';
        echo '<p>';
        echo '<img alt="posterWithBeer" src="';
        echo $data->picture_url;
        echo '"/>';
        echo $data->text;
        echo '</p>';
        
    }
?>