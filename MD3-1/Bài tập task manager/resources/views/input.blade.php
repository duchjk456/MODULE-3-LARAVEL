<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="output" method="post">
    @csrf
    <table>
        <tr>
            <td>Product Description:</td>
            <td style="text-align: right"><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td style="text-align: right"><input type="number" name="listprice"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td style="text-align: right"><input type="number" name="discount"></td>
        </tr>
        <tr>
            <td></td>
            <td ><button style="border-radius: 15px">Check</button></td>
        </tr>
    </table>

</form>
</body>
</html>
