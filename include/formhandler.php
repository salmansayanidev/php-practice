<?php
include "../include/head.php"
?>


<style>
    .m-0 {
        margin: 0;
    }
</style>



<?php


$inputError = $firstnameErr = $lastnameErr = $favouritecolorErr = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["first_name"]);
    $lastname = htmlspecialchars($_POST["last_name"]);
    $favouritecolor = htmlspecialchars($_POST["favourite_color"]);

    if (empty($firstname)) {
        $firstnameErr = "first name is required";
    }
    if (empty($lastname)) {
        $lastnameErr = "last name is required";
    }
    if (empty($favouritecolor)) {
        $favouritecolorErr = "color is required";
    } 


    // echo "<h2 class='fs-2 fw-bold'>These are the data , that user submitted</h2>";
    // echo "<h4 class='m-0 fs-4 fw-medium'>$firstname</h4>";
    // echo "<h4 class='m-0 fs-4 fw-medium'>$lastname</h4>";
    // echo "<h4 class='m-0 fs-4 fw-medium'>$favouritecolor</h4>";


    header("location ./index.php");
} else {
    header("location ./index.php");
}

?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="">
                    <h2 class='fs-2 fw-bold'>These are the data , that user submitted</h2>
                    <h4 class='m-0 fs-4 fw-medium'><?php echo $firstname; ?></h4>
                    <h4 class='m-0 fs-4 fw-medium'><?php echo $lastname; ?></h4>
                    <h4 class='m-0 fs-4 fw-medium'><?php echo $favouritecolor; ?></h4>
                </div>
            </div>
        </div>
    </div>
</main>