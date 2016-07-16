# email-validate
realtime email existence check

How to check : <path_of_file>emailvaliditycheck.php?email=saumen.d@example.com

Response :  true [if exist]
            false [if not exist]
            
multiple email can be check at once,

steps : use some specific seperator for emails in the url
        get the list of email from $_REQUEST['email']
        explode/split the email list using the seperator
        create loop for each email while calling the function verifyEmail($email, 'saumendas.kol@gmail.com', true);
        store the response as per your requirement in a array or display
        
        
        ...coming soon with the multiple email validation code with some optimization
