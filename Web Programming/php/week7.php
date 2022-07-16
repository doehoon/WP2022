<!doctype html>
<html>
    <head>
        <script src="./jquery/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        User Names<p>
         
        <form onsubmit="return(insertFirstName())">
        FirstName: <input type=text id=FirstName></br>
		LastName:  <input type=text id=LastName></br>
		Telephone: <input type=text id=Telephone></br>
            <input type=submit value=submit>

        </form>
         
        <div id=insertNames></div>
        <script>
            function insertPerson() {
            val1 = $("#FirstName").val();
			val2 = $("#LastName").val();
			val3 = $("#Telephone").val();
                $.get("./week7ajax.php",{"cmd": "create", "FirstName" : val1, "LastName" : val2,"Telephone" : val3}, function(data) {
                    $("#showNames").html(data);
                });
                return(false);
            }
            function deleteNames(id) {
                $.get("./week7ajax.php",{"cmd": "delete", "id" : id}, function(data) {
                    $("#showNames").html(data);
                });
                return(false);
            }
            function showNames() {
                $.get("./week7ajax.php",{"cmd": ""}, function(data) {
                    $("#showNames").html(data);
                });
                return(false);
            }
            showNames();
         
        </script>
    <body>
</html>