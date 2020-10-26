<?php include('include/header.php');?>

<h1> 
   <table>
        <tr><th>Alcoholic Drink</th><th>Cocktail</th></tr>
<?php
        $serch = filter_input(INPUT_GET, 'drink');

        $cocktail = array("Vodka"=>"Sex on the beach", "Whiskey"=>"Old Fashioned", "GIN"=>"Bramble","Rum"=>"Daquiri", "Tia maria"=>"Expresso martini", "Tequila"=>"Margarita");

        echo isset($cocktail[$serch])? $cocktail[$serch] : 'Sorry, but this Alcoholic Drink is not listed';

        foreach($cocktail as $x => $x_value) {
                
            echo "<tr><td> $x</td><td>$x_value</td></tr>";
           
        }   
?>
        </table>
</h1> 

<?php include('include/footer.php');?>