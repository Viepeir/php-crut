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
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-warning" style=" height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: x-large;"><span class="fw-bold fs-3">BelajarBS</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto" st>
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white fs-5"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a href="projects.php" class="nav-link text-white fs-5" ><i class="bi bi-journal"></i> Projects</a>
                </li>
                <li class="nav-item">
                    <a href="service.php" class="nav-link text-white fs-5"><i class="bi bi-box-seam"></i> Service</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-wrench"></i>   Admin
                  </button>
                  <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item" href="#">Hack</a></li>
                    <li><a class="dropdown-item" href="#">Spy</a></li>
                    <li><a class="dropdown-item" href="#">Bocorkan data pengguna</a></li>
                  </ul>
            </div>
        </div>
        
             <div class="col-md-10 text-dark d-flex" style="height:100vh;">
              <div class="container-fluid">
                <div class="column">
                  <div class="col-md-12 pe-3 mt-3 ps-3">
                    <!-- project -->
                   <div class="card">
                   <div class="card-header"><h1>Project Name</h1></div>
                   <div class="card-body">
                     <table class="table table-striped">
                     <thead>
                       <tr>
                         <th scope="col">No</th>
                         <th scope="col">Project Name</th>
                         <th scope="col">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td>Web Design</td>
                         <td>
                             <a href="" class="btn btn-sm btn-success">Edit</a>
                             <a href="" class="btn btn-sm btn-danger">Delete</a>
                         </td>
                       </tr>
                       <tr>
                         <th scope="row">2</th>
                         <td>Database</td>
                         <td>
                             <a href="" class="btn btn-sm btn-success">Edit</a>
                             <a href="" class="btn btn-sm btn-danger">Delete</a>
                         </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
                    <!-- service -->
                     <div class="card mt-3">
                       <div class="card-header"><h1><span>Service Review</span></h1></div>
                       <div class="card-body">
                         <table class="table table-striped">
                           <thead>
                             <tr>
                               <th scope="col">No</th>
                               <th scope="col">Service Name</th>
                               <th scope="col">Description</th>
                               <th scope="col">Action</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <th scope="row">1</th>
                               <td>Web Design</td>
                               <td>aiuhfaoisfoiahsdha oi haoihf haoihf aoihf oai haohfoiah oaih oiiha oihaohwhf</td>
                               <td>
                                <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>

                               </td>
                             </tr>
                             <tr>
                               <th scope="row">2</th>
                               <td>Database</td>
                               <td>aoiefh oaihwofihaoiwh oihaoihfa hoa hao haoih oiaih oih oihfoiah sifh sbf ian</td>
                               <td>                                              
                                  <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>

                               </td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
                     
                     
                 </div>
                </div>
              </div>
                
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>