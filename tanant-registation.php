<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="asset/css/style.css">

    <title>Tenant Management System</title>
</head>

<body>


    <section name="navbar" id="" class="bg-secondary
">
        <div class="container">
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Tenant Management System</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <section class=" gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-10">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <form class="row g-3">
                                <div class="col-12">
                                    <h5>House/ Flat Information</h5>
                                </div>
                                <div class="col-4">
                                    <label for="inputAddress2" class="form-label">Flat/Floor: </label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-4">
                                    <label for="inputAddress2" class="form-label">House/Holding No: </label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-4">
                                    <label for="inputAddress2" class="form-label">Road: </label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Area Name: </label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Postal Code: </label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <h5>Personal Information</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">NID</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-4">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-8">
                                    <label for="inputAddress2" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Tanant Name</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Father Name</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-3">
                                    <label for="inputAddress" class="form-label">Material Status</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Single</option>
                                        <option selected>Married</option>
                                        <option selected>Divorce</option>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon06" aria-label="Upload">
                                        <button class="btn btn-outline-secondary bg-success text-white" type="button" id="inputGroupFileAddon04">Upload</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Permanent Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Division</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Dhaka</option>
                                        <option>Dhaka</option>
                                        <option>Mymnsingh</option>
                                        <option>Khulna</option>
                                        <option>Chittagong</option>
                                        <option>Barisal</option>
                                        <option>Rangpur</option>

                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Occupation</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Religious</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Educational Qualification</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">NID</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Passport Number</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Permanent Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <h5>Emergency Contact</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Relation</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <h5>Family/ Flat Member Information</h5>
                                </div>
                                <div class="col-12">
                                    <table class="table table-success table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Age</th>
                                                <th scope="col">Occupation</th>
                                                <th scope="col">Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>@fat</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <h5>Maid Information</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">NID</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-4">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-8">
                                    <label for="inputAddress2" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>

                                <div class="col-12">
                                    <h5>Driver Information</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">NID</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-4">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-8">
                                    <label for="inputAddress2" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>

                                <div class="col-12">
                                    <h5>Previous House Owner Information</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Reasons for leaving previous House</label>
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                </div>

                                <div class="col-12">
                                    <h5>Present House Owner Information</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <h5>Agreement Information</h5>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Signature Upload</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon06" aria-label="Upload">
                                        <button class="btn btn-outline-secondary bg-success text-white" type="button" id="inputGroupFileAddon04">Upload</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>