<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>W03 Team Activity</title>
</head>

<body>
    <form action="" method="POST">
        <br><br>
        <label for="input_name">Name</label>
        <input id="input_name" type="text" name="name" placeholder="Name"> <br>

        <br><br>
        <label for="input_email">Email</label>
        <input id="input_email" type="text" name="email" placeholder="Email"> <br>

        <?php if ( ! empty( $majors )) { ?>
        <br><br>
        <label for="radio_major">Major</label>
        <div id="radio_major"></div>
        <?php foreach ( $majors as $major ) { ?>
            <input type="radio" name="input_major" value="<?php echo $major; ?>"><?php echo $major; ?><br>
        <?php } ?>
        </div>
        <?php } ?>

        <br><br>
        <textarea name="comments" placeholder="Comments" id="comments" cols="30" rows="10"></textarea> <br>
        
        <br><br>
        <label for="checkbox_list">What continents have you been to?</label>
        <div id="checkbox_list"></div>
            <input type="checkbox" value="na" name="input_continent[]">North America <br>
            <input type="checkbox" value="sa" name="input_continent[]">South America <br>
            <input type="checkbox" value="eur" name="input_continent[]">Europe <br>
            <input type="checkbox" value="asia" name="input_continent[]">Asia <br>
            <input type="checkbox" value="aus" name="input_continent[]">Australia <br>
            <input type="checkbox" value="afr" name="input_continent[]">Africa <br>
            <input type="checkbox" value="ant" name="input_continent[]">Antarctica <br>
        </div> <br>

        <hr>

        <button type="submit">Submit</button>
    </form>
    
    <hr>
    <div id="form-results">
        <h2>Form Results</h2>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $major = $_POST['input_major'];
        $comments = $_POST['comments'];

        echo 'Name: ' . $name . "<br>";
        echo 'Email: ' . $email . "<br>";
        echo 'Major: ' . $major . "<br>";
        echo 'Comments: ' . $comments . "<br><br>";

        if( ! empty( $_POST['input_continent'] ) ) {
            echo 'Continents visited:<br>';
            // Loop to store and display values of individual checked checkbox.
            foreach ( $_POST['input_continent'] as $selected ) {
                echo $selected."<br>";
            }
        }

        $majors = ['Computer Science', 'Web Design and Development', 'Computer Information Technology', 'Computer Engineering'];
        ?>
    </div>
</body>

</html>