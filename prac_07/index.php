<?php include 'header.php'; ?>

<?php
    echo '<h2>About Child Education</h2>';
    echo '<p>Child education is a vital part of their growth and development. It lays the foundation for their future.</p>';

    $currentHour = date('H');
    if ($currentHour < 12) {
        echo '<p>Good Morning! Start the day with some fun learning activities.</p>';
    } else {
        echo '<p>Good Afternoon! Continue your learning journey.</p>';
    }
?>

<?php include 'footer.php'; ?>
