<html>

<head>
    <style>
        .error {
            color: #FFOOOO;
        }
    </style>
</head>

<body>
    <?php
    //get value of error variable
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
    } else {
        $error = "";
    }
    //define error massage
    $message = "";
    if ($error == "variable_not_set") {
        $message = "you must acces this page from form.php";
    } else if ($error == "name_empty") {
        $message = "Name must Be filled";
    } else if ($error == "email_empty") {
        $message = "Email Must Be Filled";
    } else if ($error == "name_invalid") {
        $message = "Fill name with alphabet and space only";
    } else if ($error == "email_invalid") {
        $message = "Not suitable email format";
    }
    //check the form
    if (isset($_GET["name"]) and isset($_GET["email"]) and isset($_GET["comment"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $phone = $_GET["phone"];
    } else {
        $name = "";
        $email = "";
        $phone = "";
    }
    ?>

    <span class="error"><?php echo $message; ?></span>

    <table>
        <form method="get" action="required.php">
            <tr>
                <td> Nama: </td>
                <td><input type="text" name="name" value="<?php echo $name; ?>" </td> <td></td>
                <td> Email: </td>
                <td><input type="text" name="email" value="<?php echo $email; ?>" </td> </tr> <tr>
                <td> Phone: </td>
                <td><input type="text" name="phone" value="<?php echo $phone; ?>" </td> </tr> <tr>
                <td> <input type="submit" name="send" value="Send">
                <td>
            </tr>
        </form>
    </table>
</body>

</html>