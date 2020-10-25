<?php

include_once 'header.php';
 include_once 'footer.php';
?>

<body class="bginfo">
<div class="controller-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationery Application</h1>
            <p>Welcome to this fictional stationery application page created for ISAD251 example. To continue please accept our terms and conditions</p>
            <form action="agreement.php">
                <div>
                    <input type="radio" id="yes" name="q" value="true">
                    <label for="yes">I agree</label>
                    <input type="radio" id="no" name="q" value="false">
                    <label for="no">I disagree</label>
                    <input type="submit" value="Submit">
                </div>

            </form>
        </div>
    </div>
</div>

</body>
