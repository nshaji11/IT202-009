<?php
require_once(__DIR__ . "/../../partials/nav.php");
?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required maxlength="30" />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["username"])){
    $email = se($_POST,"email","", false);
    $password = se($_POST,"password", "", false);
    $confirm = se($_POST,"confirm", "", false);
    $username = se($_POST,"username", "", false);
     //TODO 3:
     $hasError = false;
     if (empty($email)) {
        flash("Email must not be empty");
        $hasError = true;
     }
     //sanitize
     //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
     $email = sanitize_email($email);
     //validate
     /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        flash("Invalid email address");
        $hasError = true;
     }*/
     if(!is_valid_email($email)){
        flash("Please enter a valid email address <br>");
        $hasError = true;
     }
     if(!preg_match('/^[a-z0-9_-]{3,30}$/' , $username)) {
        flash(
            "Username must be lowercase, alphanumerical, and can only contain _ or -",
            "warning"
        );
        $hasError = true;
     }
     if (empty($password)) {
        flash("Password must not be empty");
        $hasError = true;
     }
     if (empty($confirm)) {
        flash("Confirm password must not be empty");
        $hasError = true;
     }
     if (strlen($password) < 8) {
        flash("Password must be 8 characters or more");
        $hasError = true;
     }
     if (
        strlen($password) > 0 && $password !== $confirm
     ) {
        flash("Passwords must match");
        $hasError = true;
     }
     if (!$hasError) {
        //flash("Welcome, $email");
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Successfully registered!");
        } catch (Exception $e) {
            flash("There was a problem registering");
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
     }


 }
?>
<?php require_once(__DIR__ . "/../../partials/flash.php");