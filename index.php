<?php
require "header.php";
?>

<main>
    <section>
    <?php
        if(isset($_SESSION['userId'])) {
            echo '<p>You are logged in!</p>';
        } else {
            echo '<p>You are logged out!</p>';
        }
    ?>
        
    </section>
</main>

<?php
require "footer.php";
?>
