<?php include_once 'database-config.php'; ?>
<?php include_once 'session.php';

if (! isset( $_SESSION['login_hos'] ) && ! isset( $_SESSION['login_admin'] ) ) {
	echo 'Shit happens'; ?>
    <html lang="en">
    <head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=opensans:500);
        body{
            background: #33cc99;
            color:#fff;
            font-family: 'Open Sans', sans-serif;
            max-height:700px;
            overflow: hidden;
        }
        .c{
            text-align: center;
            display: block;
            position: relative;
            width:80%;
            margin:100px auto;
        }
        ._404{
            font-size: 220px;
            position: relative;
            display: inline-block;
            z-index: 2;
            height: 250px;
            letter-spacing: 15px;
        }
        ._1{
            text-align:center;
            display:block;
            position:relative;
            letter-spacing: 12px;
            font-size: 4em;
            line-height: 80%;
        }
        ._2{
            text-align:center;
            display:block;
            position: relative;
            font-size: 20px;
        }
        .text{
            font-size: 70px;
            text-align: center;
            position: relative;
            display: inline-block;
            margin: 19px 0px 0px 0px;
            /* top: 256.301px; */
            z-index: 3;
            width: 100%;
            line-height: 1.2em;
            display: inline-block;
        }


        .btn{
            background-color: rgb( 255, 255, 255 );
            position: relative;
            display: inline-block;
            width: 358px;
            padding: 5px;
            z-index: 5;
            font-size: 25px;
            margin:0 auto;
            color:#33cc99;
            text-decoration: none;
            margin-right: 10px
        }
        .right{
            float:right;
            width:60%;
        }

        hr{
            padding: 0;
            border: none;
            border-top: 5px solid #fff;
            color: #fff;
            text-align: center;
            margin: 0px auto;
            width: 420px;
            height:10px;
            z-index: -10;
        }

        hr:after {
            content: "\2022";
            display: inline-block;
            position: relative;
            top: -0.75em;
            font-size: 2em;
            padding: 0 0.2em;
            background: #33cc99;
        }

        .cloud {
            width: 350px; height: 120px;

            background: #FFF;
            background: linear-gradient(top, #FFF 100%);
            background: -webkit-linear-gradient(top, #FFF 100%);
            background: -moz-linear-gradient(top, #FFF 100%);
            background: -ms-linear-gradient(top, #FFF 100%);
            background: -o-linear-gradient(top, #FFF 100%);

            border-radius: 100px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;

            position: absolute;
            margin: 120px auto 20px;
            z-index:-1;
            transition: ease 1s;
        }

        .cloud:after, .cloud:before {
            content: '';
            position: absolute;
            background: #FFF;
            z-index: -1
        }

        .cloud:after {
            width: 100px; height: 100px;
            top: -50px; left: 50px;

            border-radius: 100px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
        }

        .cloud:before {
            width: 180px; height: 180px;
            top: -90px; right: 50px;

            border-radius: 200px;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
        }

        .x1 {
            top:-50px;
            left:100px;
            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            transform: scale(0.3);
            opacity: 0.9;
            -webkit-animation: moveclouds 15s linear infinite;
            -moz-animation: moveclouds 15s linear infinite;
            -o-animation: moveclouds 15s linear infinite;
        }

        .x1_5{
            top:-80px;
            left:250px;
            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            transform: scale(0.3);
            -webkit-animation: moveclouds 17s linear infinite;
            -moz-animation: moveclouds 17s linear infinite;
            -o-animation: moveclouds 17s linear infinite;
        }

        .x2 {
            left: 250px;
            top:30px;
            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 0.6;
            -webkit-animation: moveclouds 25s linear infinite;
            -moz-animation: moveclouds 25s linear infinite;
            -o-animation: moveclouds 25s linear infinite;
        }

        .x3 {
            left: 250px; bottom: -70px;

            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 0.8;

            -webkit-animation: moveclouds 25s linear infinite;
            -moz-animation: moveclouds 25s linear infinite;
            -o-animation: moveclouds 25s linear infinite;
        }

        .x4 {
            left: 470px; botttom: 20px;

            -webkit-transform: scale(0.75);
            -moz-transform: scale(0.75);
            transform: scale(0.75);
            opacity: 0.75;

            -webkit-animation: moveclouds 18s linear infinite;
            -moz-animation: moveclouds 18s linear infinite;
            -o-animation: moveclouds 18s linear infinite;
        }

        .x5 {
            left: 200px; top: 300px;

            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0.8;

            -webkit-animation: moveclouds 20s linear infinite;
            -moz-animation: moveclouds 20s linear infinite;
            -o-animation: moveclouds 20s linear infinite;
        }

        @-webkit-keyframes moveclouds {
            0% {margin-left: 1000px;}
            100% {margin-left: -1000px;}
        }
        @-moz-keyframes moveclouds {
            0% {margin-left: 1000px;}
            100% {margin-left: -1000px;}
        }
        @-o-keyframes moveclouds {
            0% {margin-left: 1000px;}
            100% {margin-left: -1000px;}
        }
    </style>

    </head>
    <body>
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
        <div class='_404'>404</div>
        <hr>
        <div class='_1'>THE PAGE</div>
        <div class='_2'>WAS NOT FOUND</div>
        <a class='btn' href='index.php'>BACK TO MARS</a>
    </div>

    </body>
    </html>


	<?php
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Hospital and Doctor list</title>
        <!-- [core CSS] -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.transitions.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <!--    //Modify record-->
        <script src="js/modify_record_doctor.js"></script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <style>


            .links {
                float: left;
            }

            .links ul {
                list-style: none;
                margin: 0;
                padding: 0;
                float: left;
            }

            li {
                list-style-type: none;
            }

            .links li {
                float: left;
                margin: 0 3px 0 0;
                position: relative;
            }

            .links a {
                float: left;
                border: 1px solid #dde2e8;
                background: #fff;
                -webkit-border-radius: 1px 1px 0 0;
                -moz-border-radius: 1px 1px 0 0;
                border-radius: 1px 1px 0 0;
                color: #1f252a;
                font-size: 15px;
                line-height: 15px;
                height: 28px;
                text-decoration: none;
                padding: 9px 10px 0 10px;
            }

            .links a:hover {
                text-decoration: underline;
            }

            .links .num {
                position: absolute;
                right: -3px;
                top: -8px;
                color: #fff;
                font: bold 10px/18px Arial, Helvetica, sans-serif;
                width: 20px;
                height: 20px;
                background: #4c95cd;
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzRjOTVjZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzYzc4YmEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
                background: -moz-linear-gradient(top, #4c95cd 0%, #3c78ba 100%);
                background: -webkit-linear-gradient(top, #4c95cd 0%, #3c78ba 100%);
                background: -o-linear-gradient(top, #4c95cd 0%, #3c78ba 100%);
                background: -ms-linear-gradient(top, #4c95cd 0%, #3c78ba 100%);
                background: linear-gradient(to bottom, #4c95cd 0%, #3c78ba 100%);
                text-align: center;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
            }
        </style>
    </head>

    <header>
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                    <a herf="#" class="navbar-brand" style="font-size: 30px;padding-top: 45px;color:#43b8e6"><b>ADMIN
                            PAGE</b></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li class="scroll"><a href="index.php"
                                              style="color:#43b8e6;">Home</a></li>
                        <li class="scroll"><a href="logout.php" data-toggle="modal"
                                              style="color:#43b8e6;">Sign out</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <body>
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <div class="sidebar" style="height: auto;">
                        <ul class="sidebar-menu">
                            <li class="treeview ">
                                <a href="view-patient.php">
                                    <i class="fa fa-user-md"></i> <span>Patient</span>
                                    <span class="pull-right-container">

                    </span>
                            </li>
                            <li class="treeview ">
                                <a href="view-hospital.php">
                                    <i class="fa fa-user-md"></i> <span>Hospital</span>
                                    <span class="pull-right-container">

                    </span>

                            </li>

                            <li class="treeview ">
                                <a href="#">
                                    <i class="fa fa-user-md"></i> <span>Doctor</span>
                                    <span class="pull-right-container">

                    </span>
                                </a>
                            </li>
                            <li class="treeview ">
                                <a href="view-specific.php">
                                    <i class="fa fa-sitemap"></i> <span>Specialty category</span>
                                    <span class="pull-right-container">

                    </span>
                                </a>
                            </li>


                            <li class="treeview ">
                                <a href="#">
                                    <i class="fa fa-sitemap"></i> <span>Rating and comment</span>
                                    <span class="pull-right-container">

                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default thumbnail">
                    <div class="panel-heading no-print">
                        <h3>Hospitals</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table width="100%"
                                   class="table-fit datatable table table-striped table-bordered table-hover"
                                   id="user_table">
                                <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Gender</th>
                                    <th>Degree</th>
                                    <th>Accepted Insurance</th>
                                    <th>Specific Specialty</th>
                                    <th>Office hours</th>
                                    <th>Language</th>
                                    <th>Work at</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php include_once 'view-doctor-app.php'; ?>
                                <tr id="new_row">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <td></td>
                                            <td><input required type="text" id="new_id"></td>
                                            <td><input required type="text" id="new_lname"></td>
                                            <td><input required type="text" id="new_fname"></td>
                                            <td><input required type="text" id="new_gender"></td>
                                            <td><input required type="text" id="new_degree"></td>
                                            <td><input required type="text" id="new_ins"></td>
                                            <td>
                                                <select name="new_specific" id="new_specific">
													<?php
													$sql_test       = 'SELECT DISTINCT name FROM `specialty`';
													$resultset_test = $conn->query( $sql_test );
													while ( $test = mysqli_fetch_assoc( $resultset_test ) ) {
														?>
                                                        <option value="<?php echo $test['name'] ?>"><?php echo $test['name'] ?></option>
														<?php
													} ?>
                                                </select>
                                            </td>
                                            <td><input required type="text" id="new_office"></td>
                                            <td><input required type="text" id="new_lang"></td>
                                            <td>
                                                <select name="new_hos" id="new_hos">
													<?php
													$sql_hos       = 'SELECT DISTINCT name FROM `hospital`';
													$resultset_hos = $conn->query( $sql_hos );
													while ( $hos = mysqli_fetch_assoc( $resultset_hos ) ) {
														?>
                                                        <option value="<?php echo $hos['name'] ?>"><?php echo $hos['name'] ?></option>
														<?php
													} ?>
                                                </select>
                                            </td>

                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-success" onclick="insert_row_doc();">
                                                        <i class="fa fa-plus"></i> Add Doctor </a>
                                                </div>
                                            </td>
                                            <!--<input type="button" value="Insert Row" onclick="insert_row();"></td>-->
                                        </div>
                                    </div>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
    </body>
    </html>
<?php }
