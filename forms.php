 <?php 
if(isset($_POST['submit'])){
    $to = "techinnova@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Request of Service from ".$_POST["name"];
    $subject2 = "Response Recieved by Tech Innova";
    $message = "Bookings sent from ".$name.",<br> ".$_POST["message"]."<br>Contact: ".$_POST["subject"];
    $message2 = "Hello ".$name." . <br>Thank you for contacting Tech-Innova Company Limited.<hr><br>You inputs has been received and we will contact you shortly.";

    // $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // echo "<scrip>window.replace('index.php')</script>";
    // // You can also use header('Location: thank_you.php'); to redirect to another page.
    // }

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Tech-Innova Company>' . "\r\n";
$headers .= 'Cc: info@techinnova.net' . "\r\n";

mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>window.location.replace('index.php')</script>";
  }

if(isset($_POST['contact'])){
    $to = "techinnova@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST["subject"];
    $subject2 = "Response Recieved by Tech Innova";
    $message = "Message sent from ".$name." ".$_POST["message"];
    $message2 = "Hello ".$name." . <br>Thank you for contacting Tech-Innova Company Limited.<hr><br>You inputs has been received.";

    // $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // echo "<scrip>window.replace('index.php')</script>";
    // // You can also use header('Location: thank_you.php'); to redirect to another page.
    // }

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Tech-Innova Company>' . "\r\n";
$headers .= 'Cc: info@techinnova.net' . "\r\n";

mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>window.location.replace('index.php')</script>";
  }
?>