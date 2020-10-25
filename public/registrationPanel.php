<?php
include_once 'header.php';
include_once 'footer.php';
?>
<body>
<form action="contactDetails.php">
    <label for="customerName">Customer Name:</label>
    <input type="text" id="customerName" name="custName" required>
    <label for="Postcode">Postcode:</label>
    <input type="text" id="Postcode" name="custPost" required>
    <label for="email">email:</label>
    <input type="text" id="email" name="custEmail">
    <input type="submit">
</form>
</body>
