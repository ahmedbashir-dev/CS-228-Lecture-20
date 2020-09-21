<?php
    $page_title = "Estimated Cost";
    include "includes/header.php"; 
    $e = "abc";
    
    if(isset($_POST["submit"])){
        //Form is submitted
        $errors = [];

        //Check Distance Value
        if(empty($_POST["distance"])){
            $errors[] = "Distance cannot be empty. Please enter a valid value";
        }
        else if($_POST["distance"] < 0){
            $errors[] = "Distance cannot be negative. Please enter a valid value";
        }
        else{
            $distance = $_POST["distance"];
        }

        //Check average price per gallon value 
        if(empty($_POST["avg_price"])){
            $errors[] = "Average Price per gallon must be specified. Please select a  value";
        }
        else if(!is_numeric($_POST["avg_price"])){
            $errors[] = "Average Price per gallon must be a numeric value.";
        }
        else{
            $avgPrice = $_POST["avg_price"];
        }

        //check fuel efficiency
        if(empty($_POST["fuel_efficiency"])){
            $errors[] = "Please Select a value for fuel efficiency.";
        }
        else{
            $fuelEfficiency = $_POST["fuel_efficiency"];
        }

        if(empty($errors)){
            $price = $distance * $avgPrice;
            echo "<div class = 'jumbotron text-center'> 
                    <h2>The estimated cost for tour is: {$price} </h2>
                 </div>";           
        }
        else{
            foreach($errors as $error){
                echo "<div class = 'alert alert-danger'> {$error} </div>";
            
            }
        }


    }
    else{
        //Form is not submitted
        echo "<div class = 'alert alert-danger'> You have not submitted the form </div>";
    }
?>