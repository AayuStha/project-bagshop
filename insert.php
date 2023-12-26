<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css" class="css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>BagShop Nepal</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                <a href="/index.html">
                        <img src="/images/logo.png" width="125px"alt="logo">
                    </a>
                </div>
                <nav>
                    <ul id="items">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="offers.html">Offers</a></li>
                    </ul>
                </nav>          
            </div>
        </div>
    </div>
    <br>  
     <div class="row">
     <div class="col-2">
        <h1 style="text-align: center;">
    <?php
         $name = $_POST['name'];
         $number = $_POST['number'];
         $email = $_POST['email'];
         $subject = $_POST['subject'];
         $message = $_POST['message'];    

        //database connection
        $conn = new mysqli('localhost','root','','form');
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error);
        }
        else{
            $stmt=$conn->prepare("insert into contactForm(name, number, email, subject, message)
            values(?,?,?,?,?)");
            $stmt->bind_param("sisss", $name, $number, $email, $subject, $message);
            $stmt->execute();
            echo"Thank you for your feedback!";
            $stmt->close();
            $conn->close();
            }
    ?>
    </h1>
    <a href="index.html" class="btn">Go Back &#8594;</a>
     </div>
     </div>
</body>
</html> 