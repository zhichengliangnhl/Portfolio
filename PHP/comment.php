<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email");
        $comment = filter_input(INPUT_POST, "comment");
        
        $errorflag = false;
        $errors = array();  

        if(empty($name)) {
            $errorflag = true;
            array_push($errors, "Please fill in your name");
        } 
        elseif(empty($email)) {
            $errorflag = true;
            array_push($errors, "Please fill in your email");
        } 
        elseif(empty($comment)) {
            $errorflag = true;
            array_push($errors, "Please leave a comment");
        }
        else {
            foreach($errors as $errors) {
                echo "<p>" . $errors . "</p>";
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
                <form action="comment.php" method="POST" id="form1-move">

                    <label>From Who?</label>
                    <input type="text" name="name" id="name" placeholder="Insert Your name Here">
                
                    <label>Insert your Email: </label>
                    <input type="email" name="email" id="email">
                    
                
                    <label>Select Which Applies to you: </label>
                    <select required>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                    
                
                    <label>Please leave a Comment</label>
                    <input type="text" name="comment" id="comment" placeholder="Leave a Message">
                    
                    <input type="submit" value="submit" id="name">
                </form>
`           </div>

        </div>
    </main>

    <footer>
        <div class="footer">
        <p>&copy; Zhi Cheng Liang</p> 
        </div>
    </footer>
        
</body>

</html>