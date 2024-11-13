<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-secondary" style="min-height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: x-large;"><span class="fw-bold fs-3">BelajarBS</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto" st>
                <li class="nav-item">
                    <a href="index.html" class="nav-link text-white fs-5"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a href="Projects.html" class="nav-link text-white fs-5" ><i class="bi bi-journal"></i> Projects</a>
                </li>
                <li class="nav-item">
                    <a href="Service.html" class="nav-link text-white fs-5"><i class="bi bi-box-seam"></i> Service</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-wrench"> </i>   Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item" href="#">Hack</a></li>
                    <li><a class="dropdown-item" href="#">Spy</a></li>
                    <li><a class="dropdown-item" href="#">Bocorkan data pengguna</a></li>
                </ul>
            </div>
        </div>
        
            <div class="col-md-10 text-dark d-flex overflow-auto" style="height:100vh;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 mt-3 ps-5">
                            <div class="card">
                                <div class="card-header"><h1>Project</h1></div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Project Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = mysqli_query($connect, "SELECT * FROM belajarbs");
                                            while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                            <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['projectname']; ?></td>
                                                <td><?php echo $data['tanggal']; ?></td>
                                                <td><?php echo $data['deskripsi']; ?></td>
                                                <td>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject">
                                                        <i class="bi bi-info-circle"></i>
                                                    </button>
                                                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="detailproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              ...
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-success">Understood</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                        <div class="mt-3 me-4">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="fw-bold text-center pb-3">
                                    Add Project
                                </h1>
                                </div>
                                <div class="card-body">
                                    <form class=""Action="tambah.php" method="POST">
                                        <label class="form-label" for="">Project Name</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input" required id="projectname" name="projectname">
                                        <label for="" class="form-label">Category</label>
                                        <select name="" id="" class="form-select" required>
                                            <option value="">Choose</option>
                                            <option value="">Web Design</option>
                                            <option value="">Database</option>
                                            <option value="">UI/UX</option>
                                        </select>
                                        <label class="form-label" for="">Date</label>
                                        <input type="date" class="form-control" required id="tanggal" name="tanggal">
                                        <label for="" class="form-label">Add Picture</label>
                                        <input class="form-control" type="file" required>
                                        <label class="form-label" for="">Description</label>
                                        <textarea class="form-control" minlength="8" id="deskripsi" name="deskripsi"></textarea>
                                        <label class="form-label" for="">Project Status</label>
                                        <div class="form-check" required>
                                            <label class="form-label" for="">Ongoing</label>
                                            <input name="status" class="form-check-input" type="radio">
                                            
                                        </div>
                                        <div class="form-check" required>
                                            <label class="form-check-label" for="">Finished</label>
                                            <input name="status" class="form-check-input" type="radio">
                                        </div>
                                        <button type="submit" class="btn btn-primary text-white mt-3" >Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div id="modal fade" aria-hidden="true"></div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>