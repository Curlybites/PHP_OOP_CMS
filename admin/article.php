<?php
require_once '../components/header.php';
?>


<?php
require_once '../admin/components/navbar.php';
?>

<div class="container-fluid">

    <div class="d-flex align-items-end justify-content-end container my-3">
        <a href="" class="btn btn-outline-primary">Add Article</a>
    </div>

    <table class="table container table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once '../components/footer.php';
?>