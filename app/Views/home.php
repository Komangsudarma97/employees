<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        hello world
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Terdistribusi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section class="content">
        <div class="container">
            <h1>Data Mahasiswa</h1>
            <div class="card-header">
                <div class="card-tools">
                    <a href="http://localhost/employees-frontend/index.php/Employees/new"><button type="button" class="btn btn-block btn-primary"><i class="fas fa-folder-plus"></i> Tambah Data</button></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">emp_no</th>
                            <th scope="col">birth_date</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">gender</th>
                            <th scope="col">hire_date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employeesData as $row) {
                            echo "
                        <tr>
                        <th>" . $row->emp_no . "</th>
                        <td>" . $row->birth_date . "</td>
                        <td>" . $row->first_name . "</td>
                        <td>" . $row->last_name . "</td>
                        <td>" . $row->gender . "</td>
                        <td>" . $row->hire_date . "</td>
                        </tr>
                        ";
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>