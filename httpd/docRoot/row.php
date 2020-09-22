 
 <head>

<title>Cart Samle</title>
<link rel = "stylesheet" type = "text/css"  href = "rowstyle.css" />
</head>
<div id="row">
    <div id="picture" style="background-image: url('Images/<?php echo $row['prodImageLink']?>')"></div>
    <div id="prodInfo">
        <div id="top">
            <h4 id="title"><?php echo $row['prodName'] ?></h4>
            <div id="price"><?php echo $row['price'] .'€'?></div>
        </div>
        <p id="desc"><?php echo $row['prodDesc'] ?></p>
        </div>
</div>

