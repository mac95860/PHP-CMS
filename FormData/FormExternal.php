
    <?php 
    if(isset($_POST['submit'])) {
        $name = ["Mike", "Gabby", "Louie", "Chris", "Louie Sr.", "Judy"];
        $minimum = 5;
        $maximum = 10;

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($username) < $minimum) {
            echo "Username must be longer than 5 characters";
        }

        if(strlen($username) > $maximum) {
            echo "Username must be less than 5 characters";
        }

        if(!in_array($username, $name)) {
            echo "Sorry you cannot login";
        } else {
            echo "Welcome, " . $username;
        }

        // echo "Hello " . $username . "<br>";

        // echo "your password is " . $password;
    }
?>