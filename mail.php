<?php
                //we need to get our variables first
                    $email_to =   'info.pandssa@gmail.com'; //the address to which the email will be sent
                    $name     =   $_POST['name']; 
                    $email  =   $_POST['email'];	
                    $mobile    =   $_POST['phone'];
                    $comment = $_POST['message'] ;
                     $subject = $_POST['subject'] ;
                    // Let's prepare the message for the e-mail 
                    $message1 = 
"
Hello Bhanu Power System, 

We have received an enquiry for the following 

Name: $name
E-mail: $email
Mobile: $mobile
Message:$comment
                    
                    ";
                     
                   $headers  = "From: $email\r\n";
                 
                 if(mail($email_to,$subject,$message1, $headers)){
					
						echo '<script>alert("Thank you for Contacting us. We will be in touch with you very soon.!");</script>';
							header('location:contact.php');
                 }
           ?>      