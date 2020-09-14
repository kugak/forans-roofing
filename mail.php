<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  $admin= 'mannatstudio.themes@gmail.com';
  $form1 = $_POST['form1'];
  $form2 = $_POST['form2'];
  $form3 = $_POST['form3'];
  $form4 = $_POST['form4'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];
  $service = $_POST['service'];
  $form5 = $_POST['form5'];
  $name5 = $_POST['name5'];
  $companyName = $_POST['companyName'];
  $email5 = $_POST['email5'];
  $phone5 = $_POST['phone5'];
  $product5 = $_POST['product'];
  $product = implode(",",$product5);
  $bestTime = $_POST['bestTime'];
  $hearAbout = $_POST['hearAbout'];
  $cment5 = $_POST['cment5'];

if($form1 == '1'){

              $email_to = $admin; 
              $email_from = $email; 
              $email_subject = $subject;
              $error_message = "";    
              // $email_message = "Name: ".$name."\n";
              // $email_message = "Phone No.: ".$phone."\n";
              $email_message = "Name: ".$name."\n"."Phone No.: ".$phone."\n"."Email Id: ".$email."\n"."Subject: ".$subject."\n"."Message: ".$msg."\n";
              $headers = 'From: '.$email_from."\r\n".
              'Reply-To: '.$email."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              if (mail($email_to, $email_subject, $email_message, $headers))
              { 
                // $_SESSION['success'] = 'Email has been sent successfully.';
                 header('Location: contact-us.html');
              }
              else 
              {
              
                //$_SESSION['error'] = 'An Error Occured!!! Please try again.';
               header('Location: contact-us.html');
              }
            }

if($form2=='2'){

              $email_to = $admin; 
              $email_from = $email; 
              $email_subject = $subject;
              $error_message = "";    
              // $email_message = "Name: ".$name."\n";
              // $email_message = "Phone No.: ".$phone."\n";
              $email_message = "Name: ".$name."\n"."Phone No.: ".$phone."\n"."Email Id: ".$email."\n"."Subject: ".$subject."\n"."Message: ".$msg."\n";
              $headers = 'From: '.$email_from."\r\n".
              'Reply-To: '.$email."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              if (mail($email_to, $email_subject, $email_message, $headers))
              { 
                 //$_SESSION['success'] = 'Email has been sent successfully.';
                 header('Location: contact-alt.html');
              }
              else 
              {
               //$_SESSION['error'] = 'An Error Occured!!! Please try again.';
               header('Location: contact-alt.html');
              }
            }

    if($form3=='3'){

              $email_to = $admin; 
              $email_from = $email; 
              $email_subject = $subject;
              $error_message = "";    
              // $email_message = "Name: ".$name."\n";
              // $email_message = "Phone No.: ".$phone."\n";
              $email_message = "Name: ".$name."\n"."Phone No.: ".$phone."\n"."Email Id: ".$email."\n"."Subject: ".$subject."\n"."Message: ".$msg."\n";
              $headers = 'From: '.$email_from."\r\n".
              'Reply-To: '.$email."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              if (mail($email_to, $email_subject, $email_message, $headers))
              { 
                  //$_SESSION['success'] = 'Email has been sent successfully.';
                 header('Location: contact-classic.html');
              }
              else 
              {
                //$_SESSION['error'] = 'An Error Occured!!! Please try again.';
               header('Location: contact-classic.html');
              }
            }

  if($form4=='4'){

              $email_to = $admin; 
              $email_from = $email; 
              $email_subject = 'Interest of Service';
              $error_message = "";    
              // $email_message = "Name: ".$name."\n";
              // $email_message = "Phone No.: ".$phone."\n";
              $email_message = "Name: ".$name."\n"."Phone No.: ".$phone."\n"."Email Id: ".$email."\n"."Interest of service*: ".$service."\n"."Message: ".$msg."\n";
              $headers = 'From: '.$email_from."\r\n".
              'Reply-To: '.$email."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              if (mail($email_to, $email_subject, $email_message, $headers))
              { 
                  //$_SESSION['success'] = 'Email has been sent successfully.';
                 header('Location: index.html');
              }
              else 
              {
                //$_SESSION['error'] = 'An Error Occured!!! Please try again.';
               header('Location: index.html');
              }
            }


  if($form5=='5'){

              $email_to = $admin; 
              $email_from = $email5; 
              $email_subject = 'Request Service';
              $error_message = "";    
              $email_message = "Name: ".$name5."\n"."Company Name: ".$companyName."\n"."Phone No.: ".$phone5."\n"."Email Id: ".$email5."\n"."Interested Product Type: ".$product."\n"."Best Time: ".$bestTime."\n"."Hear About: ".$hearAbout."\n"."Message: ".$cment5."\n";
              $headers = 'From: '.$email_from."\r\n".
              'Reply-To: '.$email5."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              if (mail($email_to, $email_subject, $email_message, $headers))
              { 
                  //$_SESSION['success'] = 'Email has been sent successfully.';
                 header('Location: request-service.html');
              }
              else 
              {
                //$_SESSION['error'] = 'An Error Occured!!! Please try again.';
               header('Location: request-service.html');
              }
            }
   }     
  ?>