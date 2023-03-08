<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// Load Composer's autoloader
require 'PHPMailerAutoload.php';
$mail=new PHPMailer(true);
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
$mail->isSMTP();                                          //Send using SMTP
$mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'Dimple.Kumari@metayb.ai';                     //SMTP username
$mail->Password   = 'bdfvkspscgdvrrdl';                               //SMTP password
$mail->SMTPSecure = 'tls';        //Enable implicit TLS encryption
$mail->Port       = 587; 
//Recipients
$mail->setFrom('Dimple.Kumari@metayb.ai', 'Metayb');
$mail->isHTML(true);       //Set email format to HTML

if (isset($_POST["submit"])){
    $username=$_POST["username"];
    $email = $_POST ["email"];
    $phone=$_POST["phone"];
    $country=$_POST["country"];
    $request=date("Y-m-d");
    $dateofbirth=$_POST["dob"];
    $dateofleavingindia=$_POST["dol"];
    $dateofReachingindia=$_POST["dor"];
    $passport=$_POST["passport"];
    $ifyes=$_POST["radio"];
    $Diease=$_POST["Details"];
    $NomineeName=$_POST["NomineeName"];
    $reNomineeName=$_POST["RelationNominee"];
    $EmergencyCon=$_POST["contact"];
    $Emergencydet=$_POST["Edetails"];
    $userid=$_POST["userid"];

    if(!empty($username) && !empty($email)&&!empty($phone) && !empty($country) && !empty($dateofbirth) && !empty($dateofleavingindia) && !empty($dateofReachingindia) && !empty($passport) && !empty($ifyes)||empty($Diease) && !empty($NomineeName) && !empty($reNomineeName) && !empty
    ($EmergencyCon) && !empty($Emergencydet)){
        $link=mysqli_connect('localhost','root','@Dimple123','login');
        if($link==false){
            die(mysqli_connect_error());
        }
        
        $db=mysqli_connect('localhost','root','@Dimple123','login');
        $today=microtime();
        $usersql="INSERT INTO  users(Username,Password,Role,userid)VALUE('$email','pass','user','$today')";
        $user=mysqli_query($db,$usersql);
        
        $sql="INSERT INTO  travel_data(Name_as_per_Passport,Email,Contact_No,Destination_Country,Date_of_requesting,Date_of_Birth,Date_of_leaving_india,Date_of_Reaching_india,Passport_No,Any_preexisting_Diease,Diease_if_you_have,Nominee_Name,Relationship_with_Nominee_Name,Emergency_Contact_No,Emergency_Contact_Details,userid) VALUES ('$username','$email','$phone','$country','$request','$dateofbirth','$dateofleavingindia','$dateofReachingindia','$passport','$ifyes','$Diease','$NomineeName','$reNomineeName','$EmergencyCon','$Emergencydet','$today')";
            if(mysqli_query($link,$sql)){
                // Mail Code Here
                $mail->addAddress($email);
                $mail->Subject =  'Travel_Form';
                $mail->Body    ='!!! Congrats your travel form submitted successfully !!!';// '!!! Congrats your travel form submitted successfully !!!';
                if($mail->send()){
                    // Redirect Location code here
                    echo "Record inserted successfully";
                    // header('Location:http://localhost/phpmailer/admin.php');
                }
                else{
                    echo "Message could not be sent.";
                    echo "Mailer Error: .$mail->ErrorInfo";  
                }
    
            } 
            else{
                echo "Something went wrong";
            }
    }else{
            echo "Please prove the user details!!!";
    }
}

?>