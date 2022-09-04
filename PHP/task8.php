<?php
    if(isset($_GET["day"]) && isset($_GET["month"]) &&  isset($_GET["year"])): ?>
        <br/>
        Day <?php echo $_GET["day"]; ?>
        <br/>
        Month <?php echo $_GET["month"]; ?>
        <br/>
        Year <?php echo $_GET["year"]; ?>
<?php endif; ?>