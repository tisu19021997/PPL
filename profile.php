<?php include_once 'database-config.php' ?>
<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PPL Hospital</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <title>
        Metronic | My Profile
    </title>
    <meta name="description" content="User profile example page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="css/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
</head>
<body>

<div class="m-content">
    <li class="scroll"><a href="" data-toggle="modal" data-target="#signInModal">Sign in</a>
        <div id="signInModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registration</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                                                role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab"
                                                       href="#m_user_profile_tab_1"
                                                       role="tab">
                                                        <i class="flaticon-share m--hide"></i>
                                                        Update Profile
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab"
                                                       href="#m_user_profile_tab_2"
                                                       role="tab">
                                                        Messages
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab"
                                                       href="#m_user_profile_tab_3"
                                                       role="tab">
                                                        Settings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item m-portlet__nav-item--last">
                                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                         m-dropdown-toggle="hover" aria-expanded="true">
                                                        <a href="#"
                                                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                            <i class="la la-gear"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_user_profile_tab_1">
                                            <div class="m-portlet__body">
                                                <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                    <div class="alert m-alert m-alert--default" role="alert">
                                                        The example form below demonstrates common HTML form
                                                        elements
                                                        that receive
                                                        updated
                                                        styles from Bootstrap with additional classes.
                                                    </div>
                                                </div>

                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Full Name
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input" value="Mark Andre">Mark
                                                            Andre</p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Gender
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input" value="CTO">Male</p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Hospital Name
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input" type="text"
                                                           value="Keenthemes"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Degree
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input" type="text"
                                                           value="Keenthemes"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Accepted Insurance
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input" type="text"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Office Hours
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">
                                                        Language
                                                    </label>
                                                    <div class="col-7">
                                                        <p class="form-control m-input"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="m_user_profile_tab_2"></div>
                                        <div class="tab-pane " id="m_user_profile_tab_3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions">
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-7">
                                        &nbsp;&nbsp;
                                        <button type="button" class="btn btn-default" data-dismiss="modal"
                                                class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript" src="js/form-validate.js"></script>
</body>
</html>
