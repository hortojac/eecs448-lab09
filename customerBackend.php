<html>
<body>
<?php
$Item1 = $_POST['Item1'];
$Item2 = $_POST['Item2'];
$QuantP3 = $_POST['Item3'];

$shippingType = $_POST['Shipping'];
$shippingPrice = 0;

if($shippingType == '7-Day')
{
	$shippingPrice = 0;
}
if($shippingType == 'Overnight')
{
	$shippingPrice = 50;
}

if($shippingType == '3-Day')
{
	$shippingPrice = 5;
}
?>

<style>
table, th, td 
{
  border: 1px solid black;
  border-collapse: collapse;
}
th, td 
{
  padding: 5px;
  text-align: center;
}
</style>
<table style="width:50%">
  <caption>Receipt</caption>
  <tr>
<th> </th>
    <th>Quantity</th>
    <th>Cost Per Item</th>
    <th>Sub Total</th>
  </tr>
  <tr>
    <th>MasterChief</th>
    <td><?php echo $Item1?></td>
<td>$30</td>
<td>$<?php 
$subtotal1 = $Item1 * 30;
echo $subtotal1?> </td>
  </tr>
  <tr>
    <th>Jun-A266</th>
    <td><?php echo $Item2?></td>
<td>$20</td>
<td>$<?php
$subtotal2 = $Item2 * 20;
 echo $subtotal2?> </td>
  </tr>
  <tr>
    <th>Spartan Mark V</th>
    <td><?php echo $QuantP3?></td>
<td>$10</td>
<td>$<?php 
$subtotal3 = $QuantP3 * 10;
echo $subtotal3?> </td>
  </tr>
  <tr>
    <th>Shipping</th>
    <td><?php echo $shippingType?></td>
    <td><?php echo '$' . $shippingPrice?></td>
<td><?php echo '$' . $shippingPrice?> </td>
  </tr>
  <tr>
    <th>Total Cost: $<?php echo $shippingPrice + $subtotal1 + $subtotal2 + $subtotal3?></th>
  </tr>
</table>
</body>
</html>