

 <?php include "header.php";  ?>


<link rel="stylesheet"  type="text/css" href="./../css/style.css" />










        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="./../javascript/basket.js"></script>
    </head>
    <body>
        <h1>T-Zone Online Store</h1>

        <!-- PHP loads product information -->        
        <?php

        //Connect to MongoDB and select database
        require __DIR__ . '/vendor/autoload.php';
        $mongoClient = (new MongoDB\Client);
        $db = $mongoClient->ecommerce;
        
        //Find all products
        $products = $db->products->find();

        //Output results onto page
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th><th>Description</th><th></th></tr>';
        foreach ($products as $document) {
            echo '<tr>';
            echo '<td>' . $document["_id"] . "</td>";
            echo '<td>' . $document["name"] . "</td>";
            echo '<td>' . $document["description"] . "</td>";
            echo '<td><button onclick=\'addToBasket("' . $document["_id"] . '", "' . $document["name"] . '")\'>';
            echo '<img class="addButtonImg" width=20 src="basket-add-icon.png"></button></td>';
            echo '</tr>';
        }
        echo '</table>';

        ?>
        
        <!-- Displays contents of basket -->    
        <h2>Basket</h2>
        <div id="basketDiv"></div>
    
    </body>




    <!-- This includes the footer page in our index page -->
<?php include "footer.php";  ?>
        