<?php
include "./include/head.php"
?>

<body>

    <main>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="./include/formhandler.php" method="post">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-7">
                                <label for="firstname" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-color mb-3 w-100" name="first_name" id="firstname">
                            </div>
                            <div class="col-12 col-lg-7">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control form-control-color mb-3 w-100" id="lastname" name="last_name">
                            </div>


                            <div class="col-12 col-lg-7">
                                <label for="lastname" class="form-label">Last Name</label>
                                <select class="form-select" aria-label="Default select example" name="favourite_color">
                                    <option selected>Select Color</option>
                                    <option value="red">red</option>
                                    <option value="green">green</option>
                                    <option value="blue">blue</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary">Button</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </main>

</body>

</html>