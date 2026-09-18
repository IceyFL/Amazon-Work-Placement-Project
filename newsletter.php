<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter</title>
    <!-- link the stylesheet -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- div for the nav bar -->
    <div class="nav">
        <!-- add logo as a redirect button to amazon -->
        <a href="https://www.amazon.co.uk"><img src="Resources/AmazonLogo.png" alt="Amazon Logo" id="logo"></a>
        <div>
            <a href="index.php"><button>Homepage</button></a>
            <a href="page1.php"><button>Page 1</button></a>
            <a href="page2.php"><button>Page 2</button></a>
            <a href="newsletter.php"><button>Newsletter</button></a>
        </div>
    </div>



    <!-- use title div class cos it works and i don't have to make another -->
    <div class="formbackground">
        <!-- div for the form -->
        <div class="form">
            <!-- make the form for inputs -->
            <form action="index.php" method="post">
                <h1>Newsletter Signup</h1>

                <!-- put all the inputs and labels in a table to allign em -->
                <label for="fname">First Name</label><br>
                <input name="fname" id="fname" placeholder="Enter First Name..." type="text" required><br>
                <label for="lname">Last Name</label><br>
                <input name="lname" id="lname" placeholder="Enter Last Name..." type="text" required><br>
                <label for="email">Email</label><br>
                <input name="email" id="email" placeholder="Enter Email..." type="email" required><br>
                <label for="schname">School Name</label><br>
                <input name="schname" id="schname" placeholder="Enter School Name..." type="text" required><br>
                <label for="schemail">School Email</label><br>
                <input name="schemail" id="schemail" placeholder="Enter School Email..." type="email" required><br>
                <label for="path">Pathway</label><br>
                <input name="path" id="path" placeholder="Enter Pathway..." type="text" required><br>
                <label for="schyr">School Year</label><br>
                <input name="schyr" id="schyr" placeholder="Enter School Year..." type="text" required><br><br>


                <button type="submit">Signup</button>
            </form>
        </div>
    </div>


    <!-- div containing the footer -->
    <div class="footer">
        <a href="https://www.amazon.co.uk"><img src="Resources/AmazonLogo.png" alt="Amazon Logo" id="footerlogo"></a><br>
        <a href="https://www.amazon.jobs/en-gb"><button>Amazon Careers</button></a>
        <a href="https://www.amazon.co.uk"><button>Amazon</button></a>
        <a href="https://www.aboutamazon.co.uk/news"><button>Amazon News</button></a>
    </div>
</body>
</html>