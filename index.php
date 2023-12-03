<?php
session_start();
$employees = array('John', 'Michelle');
$total = count($employees);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_login.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>

    <!-- CSS only -->

    <link
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
    />

    <!-- JavaScript Bundle with Popper -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
    ></script>

    <link
        href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css"
    />

    <link
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    />

    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"
    ></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>

<div class="mt-4 p-5 text-black header">
    <h1>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            fill="currentColor"
            class="bi bi-chat"
            viewBox="0 0 16 16"
        >
            <path
                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"
            />
        </svg>
        Poster
    </h1>
</div>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Poster</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User</a>
                </li>
                <li class="nav-item dropdown">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input
                    class="form-control me-2"
                    id="myInput"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button class="btn btn-light" type="submit">Search</button>


               <button class="btn btn-dark" href="logout.php"><a href="logout.php">Logout</a></button>


            </form>
        </div>
    </div>
</nav>





<br>

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 gedf-main">
            <!--- \\\\\\\Post-->
            <div class="card gedf-card">
                <div class="card-header">
                    <ul
                        class="nav nav-tabs card-header-tabs"
                        id="myTab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                id="posts-tab"
                                data-toggle="tab"
                                href="#posts"
                                role="tab"
                                aria-controls="posts"
                                aria-selected="true"
                            >Make a publication</a
                            >
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="posts"
                            role="tabpanel"
                            aria-labelledby="posts-tab"
                        >
                            <div class="form-group">
                                <form method="post" action="insert.php">
                                <textarea
                                    class="form-control"
                                    id="title"
                                    rows="1"
                                    placeholder="Title"
                                    name="title1"
                                    required
                                ></textarea>
                                <textarea
                                    class="form-control"
                                    id="post"
                                    rows="3"
                                    placeholder="What are you thinking?"
                                    name="post1"
                                    required
                                ></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="btn-toolbar justify-content-between">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-dark" id="post-btn">Post</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>



            <?php
//
            $mysqli = require __DIR__ . "/database.php";


            if($mysqli === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql = "SELECT id, user_name, title, text, created_time FROM post  ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img
                                        class="rounded-circle"
                                        width="45"
                                        src="https://picsum.photos/50/50"
                                        alt=""
                                />
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">@<?php echo $row["user_name"];?></div>
                                <div class="h7 text-muted"><?php echo $row["user_name"];?></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="text-muted h7 mb-2">
                        <i class="fa fa-clock-o"><?php echo $row["created_time"];?></i>
                    </div>
                    <a class="card-link" href="#">
                        <h5 class="card-title">
                            <?php echo $row["title"];?>
                        </h5>
                    </a>

                    <p class="card-text">
                            <?php echo $row["text"]; ?>


                    </p>
                </div>
                <div class="card-footer">
<!--                    <a href="#" class="card-link"><i class="fa fa-trash"></i> Delete</a>-->



                    <form action="delete.php" method="post" style="display: inline-block">
                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                        <input type="submit" name="delete" class="card-link" value="Delete" <?php if($_SESSION['user_name']!=$row["user_name"]){
                        echo "hidden";
                    }
                        ?>
                       >
                    </form>



                </div>

            </div>

                    <?php
                }
            }
//<i class="fa fa-trash" aria-hidden="true"></i>
            $mysqli->close();


            ?>

<!--do tud ide post-->


        </div>



            </div>


            <!-- tu->



