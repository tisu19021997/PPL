<?php include_once 'database-config.php'; ?>

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
    <script src="js/modify_record.js"></script>
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
                <a herf="#" class="navbar-brand" style="font-size: 30px;padding-top: 45px;color:lightblue"><b>ADMIN
                        PAGE</b></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">

                    <li class="scroll"><a href="" data-toggle="modal" data-target="#signInModal"
                                          style="color:lightblue;">Sign in</a></li>
                    <li class="scroll"><a href="" data-toggle="modal" data-target="#signInModal"
                                          style="color:lightblue;">Sign out</a></li>

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
                            <a href="#">
                                <i class="fa fa-user-md"></i> <span>Patient</span>
                                <span class="pull-right-container">
                        
                    </span>
                        </li>
                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-user-md"></i> <span>Hospital</span>
                                <span class="pull-right-container">
                        
                    </span>
                        </li>
                        <li class="treeview ">
                            <a href="#">
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
                    <h3>Patients</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table-fit datatable table table-striped table-bordered table-hover"
                               id="user_table">
                            <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Address</th>
                                <th>Language</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php include_once 'view-app.php'; ?>
                            <tr id="new_row">
                                <div class="form-row">
                                    <div class="form-group">
                                        <td></td>
                                        <td><input required type="text" id="new_id"></td>
                                        <td><input required type="text" id="new_fname"></td>
                                        <td><input required type="text" id="new_lname"></td>
                                        <td><input required type="text" id="new_gender"></td>
                                        <td><input required type="text" id="new_email"></td>
                                        <td><input required type="text" id="new_password"></td>
                                        <td><input required type="text" id="new_address"></td>
                                        <td><input required type="text" id="new_lang"></td>
                                        <td><input required type="text" id="new_status"></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" onclick="insert_row();">
                                                    <i class="fa fa-plus"></i> Add Patient </a>
                                            </div>
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

