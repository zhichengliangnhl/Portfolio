<?php 

    $name = null;
    $name_error = null;
    $email = null;
    $email_error = null;
    $comment = null;
    $comment_error = null;
    $success = null;

    if(isset($_POST["submit"])) {

    $name = filter_input(INPUT_POST, "name");
    $email = filter_inpput(INPUT_POST, "email");
    $comment = filter_input(INPUT_POST, "comment");

    if(empty(trim($name))) {
        echo $name_error = "Please fill in your name";
    }
    else {
        if(empty(trim($email))) {
            echo $email_error = "Insert and Email";
        } 
        else {
            if(empty(trim($comment))) {
                echo $comment_error = "Please leave a comment";
            }
        else {
            echo $success = "Thank you for leaving a comment";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/portfolio.css" type="text/css">

    <?php 
    
    if($name_error != null){
        ?> <style>.name-error{display:block}</style> <?php
    }
    if($email_error != null){
        ?> <style>.email-error{display:block}</style> <?php
    }
    if($comment_error != null){
        ?> <style>.comment-error{display:block}</style> <?php
    }
    if($success != null){
        ?> <style>.success{display:block}</style> <?php
    }

    ?>

    <title>Comment</title>
</head>

<body>        

    <header>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <ul>
                    <li><a href="../HTML/portfolio.html">Home</a></li>
                    <li><a href="">About</a> </li>
                    <li><a href="../../week-5/Assignments/assignment-1.html">Contact</a></li>
                    <li><a href="../../week-4/class-testing/socials-array.html">Socials</a></li>
                    <li><a href="../php-week3/assignment-1.php">PHP</a></li>
                </ul>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Feed Back</button>
            <div class="dropdown-content">
                <ul>
                    <li><a href="comment.php">Comment</a></li>
                    <li><a href="">Upload Files</a></li>
                </ul>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Settings</button>
            <div class="dropdown-content">
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="grid-container">
            
            <div id="comment-form">
                <form action="comment.php" method="POST" autocomplete="off" id="form1-move">

                    <div>
                        <label>From Who?</label>
                        <input type="text" name="name" id="name" placeholder="Insert Your name Here" value="<?php echo $name; ?>">
                        <p class="error name-error">
                            <?php echo $name_error; ?>
                        </p>
                    </div>
                    <div>
                        <label>Insert your Email: </label>
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                        <p class="error email-error">
                            <?php echo $email_error; ?>
                        </p>
                    </div>
                    <div>
                        <label>Select Which Applies to you: </label>
                        <select required>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    <div>
                        <label>Please leave a Comment</label>
                        <input type="text" name="comment" id="comment" placeholder="Leave a Message" value="<?php echo $comment; ?>">
                        <p class="error comment-error">
                            <?php echo $comment_error; ?>
                        </p>
                    </div>
                    <div>
                        <input type="submit" value="submit" id="name">
                        <p class="success">
                            <?php echo $success; ?>
                        </p>
                    </div>

                </form>
           </div>

        </div>
    </main>

    <footer>
        <div class="footer">
        <p>&copy; Zhi Cheng Liang</p> 
        </div>
    </footer>
        
</body>

</html>