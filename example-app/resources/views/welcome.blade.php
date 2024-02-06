<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 id = "myh1">Javascript</h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type="text" id="my_number">
    <button onclick="myFunction()">submit number</button>
    <script src=""></script>
    <script>
        $(document).ready(function(){
            console.log("Hello World - document.ready");
            console.log($('#myh1').text());
            console.log($('#my_number').val());
            $('#myh1').text("Javascript 101")
            $('#my_number').val(100)
        });

        function myFunction(){
            console.log($('#my_number').val());
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number');
        }
    </script>
</body>
</html>
