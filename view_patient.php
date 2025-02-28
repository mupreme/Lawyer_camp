<?php

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['last_name']) && !isset($_SESSION['contact'])) {
    header('location:login_index.php');
}
?>
<?php
 $ch = curl_init();
                           $url = "http://localhost/patient/api/patient/read.php";

                          curl_setopt($ch, CURLOPT_URL, $url);
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                          $resp = curl_exec($ch);
                          $decoded = json_decode($resp, true);
                          
                       /* if($e= curl_error($ch)){
                          echo $e;
                        }else{
                            $decoded = json_decode($resp, true);
                        print_r($decoded);
                           }*/

                         curl_close($ch);

                         ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="signin.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <title>HOSPITAL</title>
    <style>
        @media (min-width:756px) {
            .navtoggle {
                display: none;
            }

            .logoutbtn {
                display: block;
            }
        }

        @media (max-width:756px) {
            .navtoggle {
                display: block;
            }

            .logoutbtn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <h1 style="font-size:1.5rem;color:white;">WORK PORTAL</h1>
                <button class="navbar-toggler navtoggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link px-3 logoutbtn" href="logout.php" style="color:white;">Log out</a>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">WORK PORTAL</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="web_index.php">
                                    <i class="bi bi-house"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view_patient.php">
                                    <i class="bi bi-people-fill"></i>
                                    VIEW PATIENT STATS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="creat_patient.php">
                                    <i class="bi bi-bar-chart-fill"></i>
                                    TREATMENT
                                </a>
                            </li>
                            <li class="nav-item mt-5">
                                <a class="nav-link px-3" href="logout.php" style="color: black;font-weight:bold;">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <br>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="work_index.php">
                                <i class="bi bi-house"></i>
                                DASHBOARD 
                            </a>
                        </li>
                        <br>
                        <li class="nav-item">
                                <a class="nav-link" href="view_patient.php">
                                    <i class="bi bi-people-fill"></i>
                                    VIEW PATIENT STATS
                                </a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <a class="nav-link" href="create_patient.php">
                                    <i class="bi bi-bar-chart-fill"></i>
                                    ADD A USER
                                </a>
                            </li>
                        
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
                <h4 class="text-center alert alert-info">PATIENT INFORMATION</h4>
               
                <br>
                <table class="table my-3" width="100%" id="student_table">
                    <thead>
                        <tr>
                            <th scope="col">Patient_ID</th>
                            <th scope="col">Frist Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of brith</th>
                            <th scope="col">Province</th>
                            <th scope="col">District</th>
                            <th scope="col">Sector</th>
                            <th scope="col">Cell</th>
                            <th scope="col">Village</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                         <?php foreach($decoded as $pat): ?>
                            <tr>
                                <td><?= @$pat["patient_id"] ?></td>
                                <td><?= @$pat["first_name"] ?></td>
                                <td><?= @$pat["last_name"] ?></td>
                                <td><?= @$pat["date of birth"] ?></td>
                                <td><?= @$pat["province"] ?></td>
                                <td><?= @$pat["district"] ?></td>
                                <td><?= @$pat["sector"] ?></td>
                                <td><?= @$pat["cell"] ?></td>
                                <td><?= @$pat["village"] ?></td>
                            </tr>
                         <?php endforeach; ?>
                    </tbody>
                </table>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </main>
            </main>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#student_table').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "all"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Patient",
                }
            });
        });
    </script>

</body>

</html>