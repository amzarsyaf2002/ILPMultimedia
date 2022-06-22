<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mari_Daftar</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/51f2a4eb07.js" crossorigin="anonymous"></script>
</head>

<!-- Navbar Start -->

<body style="background-color: #0e2937;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Mari_Daftar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Close -->
</body>

<!-- Form Layout -->

<section class="Form1">
<div>
    <form action="proses/borang.php" method="POST">
    <div>
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Name Penuh Anda">
    </div>
    <br>
    <div>
        <label for="inputEmail" class="form-label">No NDP</label>
        <input type="number" class="form-control" name="ndp" placeholder="No NDP">
    </div>
    <br>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Program yang ditawarkan</label>
        <input type="text" class="form-control" name="program" placeholder="Program yang di tawarkan">
    </div>
    <br>
    <div class="col-12">
        <button type="submit" name="hantar" class="btn btn-primary">Hantar</button>
    </div>
    </form>
</div>
</section>