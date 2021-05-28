<?php 
    include('config.php');

 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <?php session_start()?>
    <title>ABK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial;
                padding: 10px;
                background: #D1E8E2;
            }

            /* Header/Blog Title */
            .header {
                padding: 30px;
                text-align: center;
                background: #E7717D;
                color:#D1E8E2;
            }

            .header h1 {
                font-size: 50px;
            }


            .column {
                  float: left;
                  width: 50%;
                  padding: 5px;
          }
          .columnrecent {
                  float: left;
                  width: 33.33%;
                  padding: 5px;
          }

            /* Create two unequal columns that floats next to each other */
            /* Left column */
            .leftcolumn {
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: left;
                width: 25%;
                background-color: #D1E8E2;
                padding-left: 20px;
            }

            /* Fake image changing D9B08C to 3FEEE6  */
            .fakeimg {
                background-color: #C2CAD0;

               

                padding: 25px;
            }

          

            /* Add a card effect for articles 116466*/
            .card {
                background-color: #AFD275;
                padding: 20px;
                margin-top: 20px;

            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: #E7717D;
                margin-top: 20px;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
                .leftcolumn, .rightcolumn {
                    width: 100%;
                    padding: 0;
                }
            }

            /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
            @media screen and (max-width: 400px) {
                .topnav a {
                    float: none;
                    width: 100%;
                }
            }
            /*changing D9B08C*/
            ul{
                padding: 0;
                list-style: none;
                background: #C2C9B0;
            }
            ul li{
                display: inline-block;
                position: relative;
                line-height: 21px;
                text-align: center;
            }
            ul li a{
                display: block;
                padding: 8px 25px;
                color: grey;
                text-decoration: none;
            }
            ul li a:hover{
                color: black;
                background: #FFCB9A;
            }
            ul li ul.dropdown{
                min-width: 100%; /* Set width of the dropdown */
                background: #C2C9B0;
                display: none;
                position: absolute;
                z-index: 999;
                left: 0;
            }
            ul li:hover ul.dropdown{
                display: block; /* Display the dropdown */
            }
            ul li ul.dropdown li{
                display: block;
            }
            .dropbtn {
                background-color: #C2C9B0;
                color: grey;
                padding: 10px 27px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
                background-color: #FFCB9A;
                color: black;
            }

            #myInput {
                box-sizing: border-box;
                background-image: url('searchicon.png');
                background-position: 14px 12px;
                background-repeat: no-repeat;
                font-size: 16px;
                padding: 14px 20px 12px 45px;
                border: none;
                border-bottom: 1px solid #ddd;
            }

            #myInput:focus {outline: 3px solid #ddd;}

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #C2C9B0;
                min-width: 230px;
                overflow: auto;
                border: 3px solid #D1E8E2;
                z-index: 1;
            }

            .dropdown-content a {
                color: gray;
                padding: 10px 10px;
                text-decoration: none;
                display: block;
            }

            .dropdown a:hover {
                background-color: #FFCB9A;
                color: black;
            }

            .show {display: block;}
            .btn {
                background-color: #C2C9B0;
                border: none;
                color: grey;
                padding: 12px 16px;
                font-size: 16px;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #FFCB9A;
                color:black;
            }

            .img_div {
                float: left;
                width: 25%;
            padding: 10px;

            }

            /*image */
             .fakeimg .image{
                width: 100%;

                
            }

 #gridview {
    text-align: center;
}

div.image {
    margin: 10px;
    display: inline-block;
    position: relative;
}

div.image img {
    width: 100%;
    max-width: 300px;
    height: 250px;
    border: 1px solid #ccc;
}

div.image img:hover {
    box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.32), 0 0 0 0px
        rgba(0, 0, 0, 0.16);
}

.heading {
    padding: 10px 10px;
    margin-bottom: 10px;
    font-size: 1.2em;
}

#grid {
    margin-bottom: 30px;
}

.product-info {
    position: absolute;
    bottom: 4px;
    left: 0;
    right: -1px;
    padding: 15% .75rem .75rem .75rem;
    background-color: transparent;
    background-image: -webkit-linear-gradient(transparent,rgba(0,0,0,0.8));
    background-image: linear-gradient(transparent,rgba(0,0,0,0.8));
    background-position-y: -1px;
    color: #FFF;
    text-align: left;
}

div div div.image  {
    margin: 0;
    padding: 0;

}

div.image ul {
    margin: 0;
    padding: 0;
}

div.image li {
    cursor: pointer;
    list-style-type: none;
    display: inline-block;
    color: #F0F0F0;
    text-shadow: 0 0 1px #666666;
    font-size: 10px;
}

div.image .selected {
    color: #ffdb7f;
    text-shadow: 0 0 5px #fdc42c;
}

.product-title {
    font-size: 1.1em;
}

.product-category {
    margin-top: 10px;
    font-size: 0.6em;
    text-transform: uppercase;
    color: #c4c4c5;
    border-left: #c4c4c5 3px solid;
    padding: 0px 5px 0px 5px;
}

div.image .product-info img {
    width: 30px;
    height: auto;
    border: none;
}

.add-to-cart {
    float:right;
    text-align: right;
}

/* Responsive Styles */
@media screen and (min-width: 1224px) {
    div.image {
        width: 300px;
    }
}

@media screen and (min-width: 1044px) and (max-width: 1224px) {
    div.image {
        width: 250px;
    }
}

@media screen and (min-width: 845px) and (max-width: 1044px) {
    div.image {
        width: 200px;
    }
}
        </style>
    
</head>
    <body>
    
     <from method="post">
        <div class="header">
        <h1>Aao Becho...Kharido...!</h1>
        <p>Deals aise k aapke bache paise. </p>
        </div>

        <ul>
            <li><button class="btn"><i class="fa fa-home"></i><a href="#">HOME</a></li>
            
            
            <li>
               <a href="#">Products &#9662;</a>
                <ul class="dropdown">
                    <li><a href="http://localhost/abk/setseesion.php?type=1">Laptops</a></li>
                    <li><a href="http://localhost/abk/setseesion.php?type=2">Mobiles</a></li>
                    <li><a href="http://localhost/abk/setseesion.php?type=3">Printers</a></li>
                    <li><a href="http://localhost/abk/setseesion.php?type=4">cars</a></li>
                    <li><a href="http://localhost/abk/setseesion.php?type=5">book</a></li>
                    <li><a href="http://localhost//setseesion.php?type=0">Any</a></li>
                </ul>
            </li>
            <li>
                <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">City</button>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <a href="http://localhost/abk/setseesion.php?city=1">Bhavnagar</a>
                    <a href="http://localhost/abk/setseesion.php?city=2">Surat</a>
                    <a href="http://localhost/abk/setseesion.php?city=3">Vapi</a>
                    <a href="http://localhost/abk/setseesion.php?city=4">Junagadh</a>
                    <a href="http://localhost/abk/setseesion.php?city=5">Anand</a>
                    <a href="http://localhost/abk/setseesion.php?city=6">Ahemdabad</a>
                    <a href="http://localhost/abk/setseesion.php?city=7">Nadiad</a>
                    <a href="http://localhost/abk/setseesion.php?city=0">Any</a>
                    </div>
                </div>
            </li>
            
            <li><a href='http://localhost/abk/addproduct.php'>Sell</a></li>
        </ul>
        <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                }
                else {
                    a[i].style.display = "none";
                }
            }
        }
        </script>

        
        <div class="row">
            <div class="leftcolumn">
                <div class ="card">
                <div id="gridview">
                   <div class="header">  <h1>Products </h1> 
                      <h5><?php
                                echo "Today is " . date("d/m/Y") . "<br>". date("l")."<br>";  
                           ?>
                            
                    </h5></div>
                   
              <div class = 'row' >
                <?php
                    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=abk','root','');
                    $subcategoryid = " SELECT * FROM product ORDER BY (PROD_ID) DESC LIMIT 0,1";
                     $query=$dbhandler->query($subcategoryid);
                     $r=$query->fetch();

                     $pname = $r['PROD_NAME'];
                     $pri = $r['PRICE'];
                     $discount = $r['DISCOUNT']; 
                    $sql ="SELECT * FROM images join product using (PROD_ID) ";
                    $result =$dbhandler->query($sql);
                   while( $row = $result->fetch()){
                    

                     echo "<div class = 'column' >";

                    echo "<div class='fakeimg'  >";

                    echo "<div class = 'image'  >";

                    echo"<img src='image/".$row['image']."'>";

                    echo"<div class='product-info'>";
                       
                        echo"<div class='product-title'>".$row['PROD_NAME'];
                        echo"</div>";                        

                        echo"<div class='product-title'>".$row['PRICE']."/- Rs ";
                        echo"</div>";
                         
                        
                         echo"</div>";
                    echo "</div>";
                     echo "</div>";
                     echo "</div>";

                    }

                ?>
                           
                 </div>  
                 
                </div>
            

              
                </div>
                <div class="card">
                     <div class="header">
                <h2>RECENTLY ADDED PRODUCT</h2>
                </div>
                <h3></h3>

                <div class="row">
                <?php

                    $recent = "SELECT * from images join product using (PROD_ID)  order by image_id desc limit 3";
                 $sql ="SELECT * FROM images join product using (PROD_ID)";
                    $result =$dbhandler->query($recent);
                   while( $row = $result->fetch()){
                    

                    echo "<div class = 'columnrecent' >";
                     echo "<div class = 'row' >";

                     echo "<div class='fakeimg'  >";
                     echo"<td>";
                    echo "<div class = 'image'  >";

                    echo"<img src='image/".$row['image']."'>";

                    echo"<div class='product-info'>";
                       
                        echo"<div class='product-title'>".$row['PROD_NAME'];
                        echo"</div>";                        

                        echo"<div class='product-title'>".$row['PRICE']."/- Rs";
                        echo"</div>";
                         
                        echo"</div>";
                         echo"</div>";
                    echo "</div>";
                     echo "</div>";
                     
                   echo "</div>";


                    }

                ?>
               
            </div>
                </div>
            </div>

            <div class="rightcolumn">
                <div class="card">
                    <div class="header"><h2>SELLING PRODUCTS</h2></div>
                    <div class="fakeimg" style="height:100px">Image</div>
                    <p>.........</p>
                </div>
                <div class="row">
                <div class="card">
                <div class="header"><h3>MOST REACHED</h3></div>
                <div class="fakeimg"><p>Image</p></div>
                <div class="fakeimg"><p>Image</p></div>
                <div class="fakeimg"><p>Image</p></div>
                </div>
            </div>
                <div class="card">
                <div class="header"><h3>Follow Us</h3></div>
                <p>ABK/INSTA</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </div>   
     </from>
</body>
</html>

    
