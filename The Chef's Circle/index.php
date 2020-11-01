<!DOCTYPE HTML>
<html>

<head>
    <title>The Chef's</title>
    <link rel="icon" href="davidhotel.png"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="jQuery.js"></script>
    <script src="JavaScript.js"></script>

    <script>
            $(document).ready(function(){
                $('select').formSelect();
            });
    </script>
             

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="header">
        <h1 style="text-align:center; color: rgb(32, 218, 187); font-family:Montserrat; font-size:350%; margin-top: 20px;"> </a>
        The Chef's Circle</h1>
        <a href="Home.html"><img class="img1" ; src="chefhome.png"></a>
    </div>

    <div class="topnavbtn ">
        <a class="active" href="index.html">Home</a>
        <a href="https://www.google.com/maps/place/The+Royal+Multicuisine+Restaurant/@18.5995939,73.9126592,15z/data=!4m5!3m4!1s0x0:0x504f9323ffde80d2!8m2!3d18.599596!4d73.9084464">Locate Us</a>
        <a href="#foot" >About</a>
    </div>
    <br>
    <br>





<div class="gridlay">
    

    <div class="container">
        <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="resto">
        <h3 style="text-align: center; color:  rgb(215, 232, 236); font-family: Montserrat; font-size: 150%; padding-top: 15px;">Please select a Dish of your Choice: </h3>
          <option disabled>Select Item</option>
        </select>
                            
        <br>

        <div id="ch"></div>
  </div>
</div>


    <footer id="foot">
        <p>2020 | © TheChef's </p>
    </footer>


</body>
</html>