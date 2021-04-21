<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Grocery System Store</title>

        <!-- description -->
        <meta name="author" content="Ricky Felix">
        <meta name="description" content="Grocery System Store">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <main>
            <img src="../images/top.png" usemap="#category-map" alt="categories"> <!-- Main image Maps -->
                <map name="category-map">
                    <area alt="Frozen Food" title="Frozen Food" coords="5,138,89,177" shape="rect" onmouseover="showOtherColumns('frozen-map')">
                    <area alt="Fresh Food" title="Fresh Food" coords="182,177,99,138" shape="rect" onmouseover="showOtherColumns('fresh-map')">
                    <area alt="Beverages" title="Beverages" coords="275,178,196,139" shape="rect" onmouseover="showOtherColumns('beverages-map')">
                    <area alt="Home Health" title="Home Health" coords="291,139,370,178" shape="rect" onmouseover="showOtherColumns('health-map')">
                    <area alt="Pet Food" title="Pet Food" coords="385,139,463,177" shape="rect" onmouseover="showOtherColumns('pet-map')">
                </map>

                <img src="../images/frozen-food.png" alt="frozen food" usemap=#frozen-map>
                <map name="frozen-map"> 
                    <area alt="Hamburger Patties" title="Hamburger Patties"  coords="5,132,87,168" shape="rect" href= "" > </area>
                    <area alt="500 gram - Fish Fingers" title="500 gram - Fish Fingers"  coords="60,249,140,289" shape="rect" href= "" > </area>
                    <area alt="1000 gram - Fish Fingers" title="1000 gram - Fish Fingers"  coords="152,247,235,285" shape="rect" href= "" > </area>
                    <area alt="Shelled Prawns" title="Shelled Prawns"  coords="194,129,274,172" shape="rect" href= "" > </area>
                    <area alt="1 Litre - Tub Ice Cream" title="1 Litre - Tub Ice Cream"  coords="252,246,332,287" shape="rect" href= "" > </area>
                    <area alt="2 Litre - Tub Ice Cream" title="2 Litre - Tub Ice Cream"  coords="344,247,427,287" shape="rect" href= "" > </area>
                </map>

                <img src="../images/fresh-food.png" alt="fresh food" usemap=#fresh-map>
                <map name="fresh-map"> 
                    <area alt="T'bone Steak" title="T'bone Steak"  coords="5,130,68,169" shape="rect" href= "" > </area>
                    <area alt="500 gram - Cheddar Cheese" title="500 gram - Cheddar Cheese"  coords="35,247,113,286" shape="rect" href= "" > </area>
                    <area alt="1000 gram - Cheddar Cheese" title="1000 gram - Cheddar Cheese"  coords="127,249,206,285" shape="rect" href= "" > </area>
                    <area alt="Navel Oranges" title="Navel Oranges"  coords="141,129,203,170" shape="rect" href= "" > </area>
                    <area alt="Bananas" title="Bananas"  coords="210,129,274,168" shape="rect" href= "" > </area>
                    <area alt="Grapes" title="Grapes"  coords="278,128,343,168" shape="rect" href= "" > </area>
                    <area alt="Apples" title="Apples"  coords="348,128,412,168" shape="rect" href= "" > </area>
                    <area alt="Peaches" title="Peaches"  coords="417,131,479,168" shape="rect" href= "" > </area>
                </map>

                <img src="../images/beverages.png" alt="beverages" usemap=#beverages-map>
                <map name="beverages-map">
                    <area alt="Chocolate Bar" title="Chocolate Bar"  coords="390,135,471,173" shape="rect" href= "" > </area>
                    <area alt="200 gram - Coffee" title="200 gram - Coffee"  coords="21,243,82,279" shape="rect" href= "" > </area>
                    <area alt="500 gram - Coffee" title="500 gram - Coffee"  coords="90,243,152,279" shape="rect" href= "" > </area>
                    <area area alt="Pack 25 - Earl Grey" title="Pack 25 - Earl Grey"  coords="160,242,221,280" shape="rect" href= "" > </area>
                    <area area alt="Pack 200 Earl Grey" title="Pack 200 Earl Grey"  coords="298,243,360,280" shape="rect" href= "" > </area>
                    <area alt="Pack 100 - Earl Grey" title="Pack 100 - Earl Grey"  coords="227,242,291,281" shape="rect" href= "" > </area>
                </map>
                
                <img src="../images/home-health.png" alt="home health" usemap=#health-map>
                <map name="health-map">
                    <area alt="Pack 24 - Panadol" title="Pack 24 - Panadol"  coords="61,247,141,285" shape="rect" href= "" > </area>
                    <area alt="Bottle 50 - Panadol" title="Bottle 50 - Panadol"  coords="156,248,234,285" shape="rect" href= "" > </area>
                    <area alt="Washing Powder" title="Washing Powder"  coords="195,131,275,167" shape="rect" href= "" > </area>
                    <area alt="Small (Pack 10) - Garbage Bags" title="Small (Pack 10) - Garbage Bags"  coords="253,244,333,288" shape="rect" href= "" > </area>
                    <area alt="Large (Pack 50) - Garbage Bags" title="Large (Pack 50) - Garbage Bags"  coords="345,246,428,287" shape="rect" href= "" > </area>
                    <area alt="Laundry Bleach" title="Laundry Bleach"  coords="383,130,464,168" shape="rect" >
                    <area alt="Bath Soap" title="Bath Soap"  coords="7,130,89,168" shape="rect" href= "" > </area>
                </map>

                <img src="../images/pet-food.png" alt="pet food" usemap=#pet-map>
                <map name="pet-map"> 
                    <area alt="Bird Food" title="Bird Food"  coords="182,170,101,130" shape="rect" href= "" > </area>
                    <area alt="Cat Food" title="Cat Food"  coords="195,130,276,17" shape="rect" href= "" > </area>
                    <area alt="Fish Food" title="Fish Food"  coords="387,131,467,170" shape="rect" href= "" > </area>
                    <area alt="1 kg. Pack" title="1 kg. Pack"  coords="252,247,332,285" shape="rect" href= "" > </area>
                    <area alt="5 kg. Pack" title="5 kg. Pack"  coords="345,246,429,285" shape="rect" href= "" > </area>
                </map>
            </div>
        </main>
        <script src="../js/catalogue.js"></script>
    </body>
</html>