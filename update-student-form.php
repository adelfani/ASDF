<?php include "templates/header.php" ?>
<body>
    <?php include "read-student.php";?>

    <form action="update-student.php" method="post">
        <input type="hidden" name="id" value="<?php echo $student["id"]; ?>">
    <?php include "inputs-student.php"; ?>
</body>
<?php include "templates/footer.php" ?>