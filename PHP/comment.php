<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        

        if(!filter_var($email, filter: FILTER_VALIDATE_EMAIL)) {
            echo "Good";
        } else {
            echo "Bad";
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

            <form action="comment.php" method="POST">

                <div>
                    <label>From Who?</label>
                    <input type="text" name="name" id="name" placeholder="Insert Your name Here" required>
                </div>
                <div>
                    <label>Insert your Email: </label>
                    <input type="email" name="email" id="email" required>
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
                    <input type="text" name="comment" id="comment" placeholder="Leave a Message" required>
                </div>
                <div>
                    <input type="submit" value="submit" id="name">
                </div>

            </form>

            <div class="margin-color"></div>
        </div>
    </main>

    <footer>
        <div class="footer">
        <p>&copy; Zhi Cheng Liang</p> 
        </div>
    </footer>
        
</body>

</html>