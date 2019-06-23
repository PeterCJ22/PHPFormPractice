<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
    </head>
    <body>
    <!--Add htmlspecialchars to stop $_Server exploits-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <h1>PHP FORM VALIDATION EXAMPLE</h1>

    Name: <input type="text" name="name"><br>
    E-Mail: <input type="text" name="email"><br>
    Website: <input type="text" name="website"><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other
    <br>

    <input type="submit" name="submit" text="Submit">
    </form>
    </form>
    </body>
</html>