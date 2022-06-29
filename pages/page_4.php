<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post">
  <label for="firstname">Imię:</label><br>
  <input type="text" id="fname" name="fname" ><br><br>
  <label for="lastname">Nazwisko:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <label for="number">Numer kontaktowy:</label><br>
  <input type="number" id="number" name="number" ><br><br>
    <label for="message">Wiadomość:</label><br>
  <textarea id="message" name="message" class="fcf-form-control" rows="6" maxlength="1000" required></textarea><br><br>
  <input type="submit">
</form> 
<script>
        $(document).ready(function() {
 
            $("#submit").click(function() {
 
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                var number = $("#number").val();
                var message = $("#message").val();
 
                if(firstname==''||lastname==''||number==''||message=='') {
                    alert("Please fill all fields.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "send.php",
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        number: number,
                        message: message
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
                 
            });
 
        });
    </script>
</body>
</html>