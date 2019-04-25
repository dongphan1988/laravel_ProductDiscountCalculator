
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
        <div id="data">
            <label>Product Description:</label>
            {{$description}}<br/>
            <label>List Price:</label>
            ${{$price}}<br/>
            <label>Discount Percent:</label>
            {{$discount_Percent}}% <br/>
            <label>Discount Amount:</label>
            ${{$discount_amount}}<br/>
            <label>Discount Price:</label>
            ${{$discount_price}}<br/>
        </div>
</div>
</body>
</html>