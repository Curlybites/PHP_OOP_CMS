<?php
require_once '../components/header.php';
require_once '../admin/components/navbar.php';
require_once '../function/category_add.php';

$database = new Connection();
$list = new Category($database);
$result = $list->getCategory();

?>
<div class="container-fluid">

    <div class="d-flex align-items-end justify-content-end container my-3">
        <a href="add-category" class="btn btn-outline-primary">Add Category</a>
    </div>

    <table class="table container table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php


            while ($row = $result->fetch_assoc()) {
            ?>

                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['category_name'] ?></td>
                    <td>
                        <a href="">edit</a>
                        <a href="">delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
require_once '../components/footer.php';
?>