<?php

require_once '../components/header.php';
require_once '../function/category_add.php';
require_once '../function/add_category_session.php';

?>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="btn btn-outline-primary btn-sm" href="category">Back</a>
    </div>
</nav>
<div class="container my-4 p-5 rounded border">
    <?php
    echo $result;
    ?>

    <h3>Category</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name">
            <div id="emailHelp" class="form-text">Please input category name you like.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php

require_once '../components/footer.php'

?>