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
    else
    {
        echo '<h2>';
        echo 'Welcome!';
        echo' </h2>';
        echo '<p>';
       
        echo "Ever wondered what is tequila or gin made of? What is the difference between cider and wine? Today you'll get answers to all this questions and even more!";
        echo '</p>';
        
    }
?>