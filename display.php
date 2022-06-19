<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="display.css" rel="stylesheet">
    <title>Table Format</title>
    
</head>
<body>
    <div id="result"></div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
        fetchUser(); 
        function fetchUser()
        {
            var action = "Load";
            $.ajax({
                url: "action.php", 
                method: "POST", 
                data: {
                    action: action
                }, 
                success: function(data) {
                    $('#result').html(data); 
                }
            });
        }
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to remove this data?")) 
            {
                var action = "Delete"; 
                $.ajax({
                    url: "action.php", 
                    method: "POST", 
                    data: {
                        id: id,
                        action: action
                    }, 
                    success: function(data) {
                        fetchUser(); 
                        alert(data); 
                    }
                })
            } else 
            {
                return false;
            }
        });
    });
  </script>
</body>
</html>




