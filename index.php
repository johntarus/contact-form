<?php
                if(isset(&_POST[submit]))

                {
                    $User_name = &_POST['name']
                    $User_email = &_POST['email']
                    $User_subject = &_POST['subject']
                    $User_message = &_POST['message']

                    $email_from = 'tarusjohn@itech.com';
                    $email_subject = "New form submission";
                    $email_body = "Name: $User_name.\n"
                                    "Email Id; $user_email.\n"
                                    "User Message: $user_message.\n";

                    $to_email = "tarusjohn96@gmail.com";
                    $headers = "From: $email_from \r\n";
                    $headers = "Reply-To: $user_email \r\n";

                    $response = file_get_contents(url);
                    $response = json_decode($response);

                    if ($response->success)
                    {
                        mail($to_email,$email_subject,$email_body,$headers)
                        echo "Message sent Successfully";
                    }
                    else{
                        echo "Invaid Input try again";
                    }
                }
                ?>