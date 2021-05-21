<!DOCTYPE html>
<html>
    <head>
        <title>Send an Email</title>
    </head>
    <body>
        <center>
        <h4 class="sent-notification"></h4>
        <form id="myForms">
            <h2>Send an Email</h2>

            <label>Name</label>
            <input id="name" type="text" placeholder="Enter  Name">
            <label>Email</label>
            <input id="email" type="text" placeholder="Enter Email">
            <lable>Subject</lable>
            <input id="subject" type="text" placeholder="Enter a Subject">
            <p>Message</p>
            <textarea id="Body" rows="5" placeholder="Type Message"></textarea>
            <br><br>
            <button type="button" onclick="sendEmail()" value="Send an Email">Submit</button>
        </form>
        </center>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
        function sendEmail(){
            var name=$("#name");
            var email=$("#email");
            var subject=$("#subject");
            var body=$("#body");

            if(isNotEmpty(name)&& isNotEmpty(email)&& isNotEmpty(subject)&&isNotEmpty(body)){
                $.ajax({
                    url:'sendEmail.php',
                    method:'POST',
                    dataType:'json',
                    data:{
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, success:function(response)
                    {
                        $('myForm')[0].reset();
                        $('.sent-notification').text("message sent succesfully.");
                        
                    }
            });
        }
    }
    function isNotEmpty(caller)
    {
        if(caller.val()==""){
            caller.css('border','1px solid red');
            return false;
        }
        else
        {
            caller.css('border',' ');
            return true;
        }
    }
    
        </script>
    
    
    </body>
</html>