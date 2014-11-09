<!DOCTYPE html>
<!--[if lt IE 7]>

<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">

<![endif]-->
<!--[if IE 7]>

<html class="lt-ie9 lt-ie8" lang="en">

<![endif]-->
<!--[if IE 8]>

<html class="lt-ie9" lang="en">

<![endif]-->
<!--[if gt IE 8]>
  <!-->

  <html lang="en">
  
  <!--
  <![endif]-->
  <head>
    <meta charset="utf-8">
    <title>
      Blue Moon - Responsive Admin Dashboard
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js">
    </script>
    <![endif]-->
    <link href="css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
    
  </head>
  <body>
    <header>
      <a href="#" class="logo">
        <img src="img/logo.png" alt="Logo" />
      </a>
      <div class="btn-group">
        <button class="btn btn-primary">
          Srinu Baswa
        </button>
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
          <span class="caret">
          </span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li>
            <a href="#">
              Edit Profile
            </a>
          </li>
          <li>
            <a href="#">
              Account Settings
            </a>
          </li>
          <li>
            <a href="#">
              Logout
            </a>
          </li>
        </ul>
      </div>
      <ul class="mini-nav">
        <li>
          <a href="#">
            <div class="fs1" aria-hidden="true" data-icon="&#xe040;"></div>
            <span class="info-label badge badge-warning">
              3
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="fs1" aria-hidden="true" data-icon="&#xe04c;"></div>
            <span class="info-label badge badge-info">
              5
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="fs1" aria-hidden="true" data-icon="&#xe037;"></div>
            <span class="info-label badge badge-success">
              9
            </span>
          </a>
        </li>
      </ul>
    </header>
    <div class="container-fluid">
      <div class="dashboard-container">
        <div class="top-nav">
          <ul>
            <li>
              <a href="index.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></div>
                Dashboard
              </a>
            </li>
            <li>
              <a href="forms.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></div>
                Forms
              </a>
            </li>
            <li>
              <a href="graphs.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe096;"></div>
                Graphs
              </a>
            </li>
            <li>
              <a href="ui-elements.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></div>
                UI Elements
              </a>
            </li>
            <li>
              <a href="icons.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0a9;"></div>
                Icons
              </a>
            </li>
            <li>
              <a href="tables.html" class="selected">
                <div class="fs1" aria-hidden="true" data-icon="&#xe14a;"></div>
                Tables
              </a>
            </li>
            <li>
              <a href="media.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe00d;"></div>
                Media
              </a>
            </li>
            <li>
              <a href="calendar.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe052;"></div>
                Calendar
              </a>
            </li>
            <li>
              <a href="typography.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe100;"></div>
                Typography
              </a>
            </li>
            <li>
              <a href="edit-profile.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0aa;"></div>
                Extras
              </a>
            </li>
          </ul>
          <div class="clearfix">
          </div>
        </div>
        <div class="sub-nav">
          <ul>
            <li><a href="" class="heading">Tables</a></li>
            <li>
              <a href="#dynamicTable">
                Dynamic Table
              </a>
            </li>
            <li>
              <a href="#deletableTableRow">
                Deletable Table Row
              </a>
            </li>
            <li>
              <a href="#tableColored">
                Table Colored
              </a>
            </li>
          </ul>
          <div class="btn-group pull-right">
            <button class="btn btn-primary">
              Main Menu
            </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
              <span class="caret">
              </span>
            </button>
            <ul class="dropdown-menu pull-right">
              <li>
                <a href="index.html" data-original-title="">
                  Dashboard
                </a>
              </li>
              <li>
                <a href="forms.html" data-original-title="">
                  Forms
                </a>
              </li>
              <li>
                <a href="graphs.html" data-original-title="">
                  Graphs
                </a>
              </li>
              <li>
                <a href="ui-elements.html" data-original-title="">
                  UI Elements
                </a>
              </li>
              <li>
                <a href="icons.html" data-original-title="">
                  Icons
                </a>
              </li>
              <li>
                <a href="tables.html" data-original-title="">
                  Tables
                </a>
              </li>
              <li>
                <a href="media.html" data-original-title="">
                  Media
                </a>
              </li>
              <li>
                <a href="calendar.html" data-original-title="">
                  Calendar
                </a>
              </li>
              <li>
                <a href="typography.html" data-original-title="">
                  Typography
                </a>
              </li>
              <li>
                <a href="edit-profile.html" data-original-title="">
                  Edit Profile
                </a>
              </li>
              <li>
                <a href="invoice.html" data-original-title="">
                  Invoice
                </a>
              </li>
              <li>
                <a href="login.html" data-original-title="">
                  Login
                </a>
              </li>
              <li>
                <a href="404.html" data-original-title="">
                  404 Page
                </a>
              </li>
              <li>
                <a href="500.html" data-original-title="">
                  500 Page
                </a>
              </li>
              <li>
                <a href="help.html" data-original-title="">
                  Help
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="dashboard-wrapper">
          <div class="left-sidebar">
            
            
            <div class="row-fluid">
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Table
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                      <thead>
                        <tr>
                          <th style="width:5%">
                            <input type="checkbox" class="no-margin" />
                          </th>
                          <th style="width:40%">
                            Name
                          </th>
                          <th style="width:20%" class="hidden-phone">
                            Product
                          </th>
                          <th style="width:10%" class="hidden-phone">
                            Status
                          </th>
                          <th style="width:15%" class="hidden-phone">
                            Date
                          </th>
                          <th style="width:10%" class="hidden-phone">
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input type="checkbox" class="no-margin" />
                          </td>
                          <td>
                            <span class="name">
                              Mahendra Singh Dhoni
                            </span>
                          </td>
                          <td class="hidden-phone">
                            Baswa #567
                          </td>
                          <td class="hidden-phone">
                            <span class="label label label-info">
                              New
                            </span>
                          </td>
                          <td class="hidden-phone">
                            15 - 02 - 2014
                          </td>
                          <td class="hidden-phone">
                            
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
                                Action 
                                <span class="caret">
                                </span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#">
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="no-margin" />
                          </td>
                          <td>
                            <span class="name">
                              Michel Clark
                            </span>
                          </td>
                          <td class="hidden-phone">
                            Baswa #224
                          </td>
                          <td class="hidden-phone">
                            <span class="label label label-success">
                              New
                            </span>
                          </td>
                          <td class="hidden-phone">
                            10 - 02 - 2014
                          </td>
                          <td class="hidden-phone">
                            
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
                                Action 
                                <span class="caret">
                                </span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#">
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="no-margin" />
                          </td>
                          <td>
                            <span class="name">
                              Rahul Dravid
                            </span>
                          </td>
                          <td class="hidden-phone">
                            Baswa #342
                          </td>
                          <td class="hidden-phone">
                            <span class="label label label-important">
                              New
                            </span>
                          </td>
                          <td class="hidden-phone">
                            14 - 02 - 2014
                          </td>
                          <td class="hidden-phone">
                            
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
                                Action 
                                <span class="caret">
                                </span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#">
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="no-margin" />
                          </td>
                          <td>
                            <span class="name">
                              Anthony Michell
                            </span>
                          </td>
                          <td class="hidden-phone">
                            Baswa #3021
                          </td>
                          <td class="hidden-phone">
                            <span class="label label label-info">
                              New
                            </span>
                          </td>
                          <td class="hidden-phone">
                            19 - 02 - 2014
                          </td>
                          <td class="hidden-phone">
                            
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
                                Action 
                                <span class="caret">
                                </span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#">
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" class="no-margin" />
                          </td>
                          <td>
                            <span class="name">
                              Srinu Baswa
                            </span>
                          </td>
                          <td class="hidden-phone">
                            Baswa #771
                          </td>
                          <td class="hidden-phone">
                            <span class="label label label-success">
                              New
                            </span>
                          </td>
                          <td class="hidden-phone">
                            12 - 02 - 2014
                          </td>
                          <td class="hidden-phone">
                            
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
                                Action 
                                <span class="caret">
                                </span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#">
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
            
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Dynamic Tabl<a id="dynamicTable">e</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div id="dt_example" class="example_alt_pagination">
                      <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                        
                        <thead>
                          <tr>
                            <th style="width:17%">
                              Month
                            </th>
                            <th style="width:20%">
                              Internet Explorer
                            </th>
                            <th style="width:16%">
                              Firefox
                            </th>
                            <th style="width:16%" class="hidden-phone">
                              Chrome
                            </th>
                            <th style="width:16%" class="hidden-phone">
                              Safari
                            </th>
                            <th style="width:16%" class="hidden-phone">
                              Opera
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="gradeX warning">
                            <td>
                              December
                            </td>
                            <td>
                              14.7 %
                            </td>
                            <td>
                              31.1 %
                            </td>
                            <td class="hidden-phone">
                              46.9 %
                            </td>
                            <td class="hidden-phone">
                              4.2 %
                            </td>
                            <td class="hidden-phone">
                              2.1 %
                            </td>
                          </tr>
                          <tr class="gradeC">
                            <td>
                              November
                            </td>
                            <td>
                              15.1 %
                            </td>
                            <td>
                              31.2 %
                            </td>
                            <td class="hidden-phone">
                              46.3 %
                            </td>
                            <td class="hidden-phone">
                              4.4 %
                            </td>
                            <td class="hidden-phone">
                              2.0 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              October
                            </td>
                            <td>
                              16.1 %
                            </td>
                            <td>
                              31.8 %
                            </td>
                            <td class="hidden-phone">
                              44.9 %
                            </td>
                            <td class="hidden-phone">
                              4.3 %
                            </td>
                            <td class="hidden-phone">
                              2.0 %
                            </td>
                          </tr>
                          <tr class="gradeA error">
                            <td>
                              September
                            </td>
                            <td>
                              16.4 %
                            </td>
                            <td>
                              32.2 %
                            </td>
                            <td class="hidden-phone">
                              44.1 %
                            </td>
                            <td class="hidden-phone">
                              4.2 %
                            </td>
                            <td class="hidden-phone">
                              2.1 %
                            </td>
                          </tr>
                          <tr class="gradeA warning">
                            <td>
                              August
                            </td>
                            <td>
                              16.2 %
                            </td>
                            <td>
                              32.8 %
                            </td>
                            <td class="hidden-phone">
                              43.7 %
                            </td>
                            <td class="hidden-phone">
                              4.0 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              July
                            </td>
                            <td>
                              16.3 %
                            </td>
                            <td>
                              33.7 %
                            </td>
                            <td class="hidden-phone">
                              42.9 %
                            </td>
                            <td class="hidden-phone">
                              3.9 %
                            </td>
                            <td class="hidden-phone">
                              2.1 %
                            </td>
                          </tr>
                          <tr class="gradeA info">
                            <td>
                              June
                            </td>
                            <td>
                              16.7 %
                            </td>
                            <td>
                              34.4 %
                            </td>
                            <td class="hidden-phone">
                              41.7 %
                            </td>
                            <td class="hidden-phone">
                              4.1 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              May
                            </td>
                            <td>
                              18.1 %
                            </td>
                            <td>
                              35.2 %
                            </td>
                            <td class="hidden-phone">
                              39.3 %
                            </td>
                            <td class="hidden-phone">
                              4.3 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA error">
                            <td>
                              April
                            </td>
                            <td>
                              18.3 %
                            </td>
                            <td>
                              35.8 %
                            </td>
                            <td class="hidden-phone">
                              38.3 %
                            </td>
                            <td class="hidden-phone">
                              4.5 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              March
                            </td>
                            <td>
                              18.9 %
                            </td>
                            <td>
                              36.3 %
                            </td>
                            <td class="hidden-phone">
                              37.3 %
                            </td>
                            <td class="hidden-phone">
                              4.4 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeA error">
                            <td>
                              February
                            </td>
                            <td>
                              19.5 %
                            </td>
                            <td>
                              36.6 %
                            </td>
                            <td class="hidden-phone">
                              36.3 %
                            </td>
                            <td class="hidden-phone">
                              4.5 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeA info">
                            <td>
                              January
                            </td>
                            <td>
                              20.1 %
                            </td>
                            <td>
                              37.1 %
                            </td>
                            <td class="hidden-phone">
                              35.3 %
                            </td>
                            <td class="hidden-phone">
                              4.3 %
                            </td>
                            <td class="hidden-phone">
                              2.4 %
                            </td>
                          </tr>
                          <tr class="gradeA info">
                            <td>
                              December
                            </td>
                            <td>
                              20.2 %
                            </td>
                            <td>
                              37.7 %
                            </td>
                            <td class="hidden-phone">
                              34.6 %
                            </td>
                            <td class="hidden-phone">
                              4.2 %
                            </td>
                            <td class="hidden-phone">
                              2.5 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              November
                            </td>
                            <td>
                              21.2 %
                            </td>
                            <td>
                              38.1 %
                            </td>
                            <td class="hidden-phone">
                              33.4 %
                            </td>
                            <td class="hidden-phone">
                              4.2 %
                            </td>
                            <td class="hidden-phone">
                              2.4 %
                            </td>
                          </tr>
                          <tr class="gradeA warning">
                            <td>
                              October
                            </td>
                            <td>
                              21.7 %
                            </td>
                            <td>
                              38.7 %
                            </td>
                            <td class="hidden-phone">
                              32.3 %
                            </td>
                            <td class="hidden-phone">
                              4.2 %
                            </td>
                            <td class="hidden-phone">
                              2.4 %
                            </td>
                          </tr>
                          <tr class="gradeA info">
                            <td>
                              September
                            </td>
                            <td>
                              22.9 %
                            </td>
                            <td>
                              39.7 %
                            </td>
                            <td class="hidden-phone">
                              30.5 %
                            </td>
                            <td class="hidden-phone">
                              4.0 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA error">
                            <td>
                              August
                            </td>
                            <td>
                              22.4 %
                            </td>
                            <td>
                              40.6 %
                            </td>
                            <td class="hidden-phone">
                              30.3 %
                            </td>
                            <td class="hidden-phone">
                              3.8 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              July
                            </td>
                            <td>
                              22.0 %
                            </td>
                            <td>
                              42.0 %
                            </td>
                            <td class="hidden-phone">
                              29.4 %
                            </td>
                            <td class="hidden-phone">
                              3.6 %
                            </td>
                            <td class="hidden-phone">
                              2.4 %
                            </td>
                          </tr>
                          <tr class="gradeAerror">
                            <td>
                              June
                            </td>
                            <td>
                              23.2 %
                            </td>
                            <td>
                              42.2 %
                            </td>
                            <td class="hidden-phone">
                              27.9 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.4 %
                            </td>
                          </tr>
                          <tr class="gradeA info">
                            <td>
                              May
                            </td>
                            <td>
                              24.9 %
                            </td>
                            <td>
                              42.4 %
                            </td>
                            <td class="hidden-phone">
                              25.9 %
                            </td>
                            <td class="hidden-phone">
                              4.0 %
                            </td>
                            <td class="hidden-phone">
                              2.4 %
                            </td>
                          </tr>
                          <tr class="gradeA">
                            <td>
                              April
                            </td>
                            <td>
                              24.3 %
                            </td>
                            <td>
                              42.9 %
                            </td>
                            <td class="hidden-phone">
                              25.6 %
                            </td>
                            <td class="hidden-phone">
                              4.1 %
                            </td>
                            <td class="hidden-phone">
                              2.6 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              March
                            </td>
                            <td>
                              25.8 %
                            </td>
                            <td>
                              42.2 %
                            </td>
                            <td class="hidden-phone">
                              25.0 %
                            </td>
                            <td class="hidden-phone">
                              4.0 %
                            </td>
                            <td class="hidden-phone">
                              2.5 %
                            </td>
                          </tr>
                          <tr class="gradeA warning">
                            <td>
                              February
                            </td>
                            <td>
                              26.5 %
                            </td>
                            <td>
                              42.4 %
                            </td>
                            <td class="hidden-phone">
                              24.1 %
                            </td>
                            <td class="hidden-phone">
                              4.1 %
                            </td>
                            <td class="hidden-phone">
                              2.5 %
                            </td>
                          </tr>
                          <tr class="gradeA info">
                            <td>
                              January
                            </td>
                            <td>
                              26.6 %
                            </td>
                            <td>
                              42.8 %
                            </td>
                            <td class="hidden-phone">
                              23.8 %
                            </td>
                            <td class="hidden-phone">
                              4.0 %
                            </td>
                            <td class="hidden-phone">
                              2.5 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              December
                            </td>
                            <td>
                              27.5 %
                            </td>
                            <td>
                              43.5 %
                            </td>
                            <td class="hidden-phone">
                              22.4 %
                            </td>
                            <td class="hidden-phone">
                              3.8 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeU info">
                            <td>
                              November
                            </td>
                            <td>
                              28.6 %
                            </td>
                            <td>
                              44.0 %
                            </td>
                            <td class="hidden-phone">
                              20.5 %
                            </td>
                            <td class="hidden-phone">
                              4.0 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              October
                            </td>
                            <td>
                              29.7 %
                            </td>
                            <td>
                              44.1 %
                            </td>
                            <td class="hidden-phone">
                              19.2 %
                            </td>
                            <td class="hidden-phone">
                              3.9 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeX warning">
                            <td>
                              September
                            </td>
                            <td>
                              31.1 %
                            </td>
                            <td>
                              45.1 %
                            </td>
                            <td class="hidden-phone">
                              17.3 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeU info">
                            <td>
                              August
                            </td>
                            <td>
                              30.7 %
                            </td>
                            <td>
                              45.8 %
                            </td>
                            <td class="hidden-phone">
                              17.0 %
                            </td>
                            <td class="hidden-phone">
                              3.5 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeU info">
                            <td>
                              July
                            </td>
                            <td>
                              30.4 %
                            </td>
                            <td>
                              46.4 %
                            </td>
                            <td class="hidden-phone">
                              16.7 %
                            </td>
                            <td class="hidden-phone">
                              3.4 %
                            </td>
                            <td class="hidden-phone">
                              2.3 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              June
                            </td>
                            <td>
                              31.0 %
                            </td>
                            <td>
                              46.6 %
                            </td>
                            <td class="hidden-phone">
                              15.9 %
                            </td>
                            <td class="hidden-phone">
                              3.6 %
                            </td>
                            <td class="hidden-phone">
                              2.1 %
                            </td>
                          </tr>
                          <tr class="gradeU info">
                            <td>
                              May
                            </td>
                            <td>
                              32.2 %
                            </td>
                            <td>
                              46.9 %
                            </td>
                            <td class="hidden-phone">
                              14.5 %
                            </td>
                            <td class="hidden-phone">
                              3.5 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              April
                            </td>
                            <td>
                              33.4 %
                            </td>
                            <td>
                              46.4 %
                            </td>
                            <td class="hidden-phone">
                              13.6 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeX warning">
                            <td>
                              March
                            </td>
                            <td>
                              34.9 %
                            </td>
                            <td>
                              46.2 %
                            </td>
                            <td class="hidden-phone">
                              12.3 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA">
                            <td>
                              April
                            </td>
                            <td>
                              33.4 %
                            </td>
                            <td>
                              46.4 %
                            </td>
                            <td class="hidden-phone">
                              13.6 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeX warning">
                            <td>
                              March
                            </td>
                            <td>
                              34.9 %
                            </td>
                            <td>
                              46.2 %
                            </td>
                            <td class="hidden-phone">
                              12.3 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeA success">
                            <td>
                              April
                            </td>
                            <td>
                              33.4 %
                            </td>
                            <td>
                              46.4 %
                            </td>
                            <td class="hidden-phone">
                              13.6 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeX warning">
                            <td>
                              March
                            </td>
                            <td>
                              34.9 %
                            </td>
                            <td>
                              46.2 %
                            </td>
                            <td class="hidden-phone">
                              12.3 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          <tr class="gradeU info">
                            <td>
                              February
                            </td>
                            <td>
                              35.3 %
                            </td>
                            <td>
                              46.5 %
                            </td>
                            <td class="hidden-phone">
                              11.6 %
                            </td>
                            <td class="hidden-phone">
                              3.8 %
                            </td>
                            <td class="hidden-phone">
                              2.1 %
                            </td>
                          </tr>
                          <tr class="gradeX warning">
                            <td>
                              January
                            </td>
                            <td>
                              36.2 %
                            </td>
                            <td>
                              46.3 %
                            </td>
                            <td class="hidden-phone">
                              10.8 %
                            </td>
                            <td class="hidden-phone">
                              3.7 %
                            </td>
                            <td class="hidden-phone">
                              2.2 %
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
            <div class="row-fluid">
              <div class="span5">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Deletable Table Ro<a id="deletableTableRow">w</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <table class="table table-striped table-bordered no-margin">
                      <thead>
                        <tr>
                          
                          <th style="width:20%">
                            No.
                          </th>
                          <th style="width:40%">
                            Name
                          </th>
                          <th style="width:20%" class="hidden-phone">
                            Status
                          </th>
                          <th style="width:20%" class="hidden-phone">
                            Actions
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td >
                            1
                          </td>
                          <td>
                            Srinu
                          </td>
                          <td class="hidden-phone">
                            Active
                          </td>
                          <td class="hidden-phone">
                            <a class="delete-row" data-original-title="Delete" href="#">
                              <i class="icon-trash">
                              </i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Baswa
                          </td>
                          <td class="hidden-phone">
                            Active
                          </td>
                          <td class="hidden-phone">
                            <a class="delete-row" data-original-title="Delete" href="#">
                              <i class="icon-trash">
                              </i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Prem
                          </td>
                          <td class="hidden-phone">
                            Inactive
                          </td>
                          <td class="hidden-phone">
                            <a class="delete-row" data-original-title="Delete" href="#">
                              <i class="icon-trash">
                              </i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Arjun
                          </td>
                          <td class="hidden-phone">
                            Active
                          </td>
                          <td class="hidden-phone">
                            <a class="delete-row" data-original-title="Delete" href="#">
                              <i class="icon-trash">
                              </i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Gajju
                          </td>
                          <td class="hidden-phone">
                            Inactive
                          </td>
                          <td class="hidden-phone">
                            <a class="delete-row" data-original-title="Delete" href="#">
                              <i class="icon-trash">
                              </i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              
              <div class="span7">
                <div class="widget no-margin">
                  <div class="widget-header">
                    <div class="title">
                      Table Colore<a id="tableColored">d</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <table class="table table-bordered no-margin">
                      <thead>
                        <tr>
                          <th>
                            2012
                          </th>
                          <th>
                            Explorer
                          </th>
                          <th class="hidden-phone">
                            Firefox
                          </th>
                          <th class="hidden-phone">
                            Chrome
                          </th>
                          <th class="hidden-phone">
                            Safari
                          </th>
                          <th class="hidden-phone">
                            Opera
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="success">
                          <td>
                            Dec
                          </td>
                          <td>
                            15.4%
                          </td>
                          <td class="hidden-phone">
                            34.4%
                          </td>
                          <td class="hidden-phone">
                            41.7%
                          </td>
                          <td class="hidden-phone">
                            4.1%
                          </td>
                          <td class="hidden-phone">
                            2.0%
                          </td>
                        </tr>
                        <tr class="error">
                          <td>
                            Nov
                          </td>
                          <td>
                            16.7%
                          </td>
                          <td class="hidden-phone">
                            34.4%
                          </td>
                          <td class="hidden-phone">
                            42.7%
                          </td>
                          <td class="hidden-phone">
                            4.1%
                          </td>
                          <td class="hidden-phone">
                            2.2%
                          </td>
                        </tr>
                        <tr class="info">
                          <td>
                            Oct
                          </td>
                          <td>
                            18.9%
                          </td>
                          <td class="hidden-phone">
                            35.2%
                          </td>
                          <td class="hidden-phone">
                            36.3%
                          </td>
                          <td class="hidden-phone">
                            4.3%
                          </td>
                          <td class="hidden-phone">
                            2.2%
                          </td>
                        </tr>
                        <tr class="warning">
                          <td>
                            Sep
                          </td>
                          <td>
                            18.7%
                          </td>
                          <td class="hidden-phone">
                            36.8%
                          </td>
                          <td class="hidden-phone">
                            38.3%
                          </td>
                          <td class="hidden-phone">
                            4.5%
                          </td>
                          <td class="hidden-phone">
                            2.3%
                          </td>
                        </tr>
                        <tr class="success">
                          <td>
                            Aug
                          </td>
                          <td>
                            16.2%
                          </td>
                          <td class="hidden-phone">
                            32.8%
                          </td>
                          <td class="hidden-phone">
                            43.7%
                          </td>
                          <td class="hidden-phone">
                            4.0%
                          </td>
                          <td class="hidden-phone">
                            2.3%
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          
          <div class="right-sidebar">
            
            
            <div class="wrapper">
              <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                <thead>
                  <tr>
                    <th style="width:10%">
                      <input type="checkbox" class="no-margin" />
                    </th>
                    <th style="width:70%">
                      Name
                    </th>
                    <th style="width:20%">
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Mahendra Singh Dhoni
                      </span>
                    </td>
                    <td>
                      <span class="label label label-info">
                        New
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Michel Clark
                      </span>
                    </td>
                    <td>
                      <span class="label label label-success">
                        New
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Rahul Dravid
                      </span>
                    </td>
                    <td>
                      <span class="label label label-important">
                        New
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Anthony Michell
                      </span>
                    </td>
                    <td>
                      <span class="label label label-info">
                        New
                      </span>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Srinu Baswa
                      </span>
                    </td>
                    <td>
                      <span class="label label label-success">
                        New
                      </span>
                    </td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
            
            <hr class="hr-stylish-1">
            
            <div class="wrapper">
              <div class="btn-toolbar no-margin">
                <div class="btn-group">
                  <a href="#" class="btn btn-success">
                    <i class="icon-white icon-headphones">
                    </i>
                  </a>
                  <a href="#" class="btn btn-warning">
                    <i class="icon-white icon-thumbs-down">
                    </i>
                  </a>
                  <a href="#" class="btn btn-warning2">
                    <i class="icon-white icon-signal">
                    </i>
                  </a>
                  <a href="#" class="btn btn-info">
                    <i class="icon-white icon-share-alt">
                    </i>
                  </a>
                </div>
                <div class="btn-group">
                  <a href="#" class="btn btn-inverse">
                    <i class="icon-white icon-trash">
                    </i>
                  </a>
                </div>
              </div>
            </div>
            
            <hr class="hr-stylish-1">
            
            <div class="wrapper">
              <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                <thead>
                  <tr>
                    <th style="width:10%">
                      <input type="checkbox" class="no-margin" />
                    </th>
                    <th style="width:70%">
                      Name
                    </th>
                    <th style="width:20%">
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="success">
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Mahendra Singh Dhoni
                      </span>
                    </td>
                    <td>
                      <span class="label label label-info">
                        New
                      </span>
                    </td>
                  </tr>
                  <tr class="error">
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Michel Clark
                      </span>
                    </td>
                    <td>
                      <span class="label label label-success">
                        New
                      </span>
                    </td>
                  </tr>
                  <tr class="success">
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Rahul Dravid
                      </span>
                    </td>
                    <td>
                      <span class="label label label-important">
                        New
                      </span>
                    </td>
                  </tr>
                  <tr class="warning">
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Anthony Michell
                      </span>
                    </td>
                    <td>
                      <span class="label label label-info">
                        New
                      </span>
                    </td>
                    
                  </tr>
                  <tr class="info">
                    <td>
                      <input type="checkbox" class="no-margin" />
                    </td>
                    <td>
                      <span class="name">
                        Srinu Baswa
                      </span>
                    </td>
                    <td>
                      <span class="label label label-success">
                        New
                      </span>
                    </td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
            
            
          </div>
        </div>
      </div>
      <!--/.fluid-container-->
    </div>
    <footer>
      <p>
        &copy; baswaAdmin 2014
      </p>
    </footer>
    <script src="js/jquery.min.js">
    </script>
    <script src="js/bootstrap.js">
    </script>
    <script src="js/jquery.scrollUp.js">
    </script>
    <script src="js/jquery.dataTables.js">
    </script>
    
    <script type="text/javascript">
      //ScrollUp
      $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Scroll to top', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

      //Tooltip
      $('a').tooltip('hide');

      //Data Tables
      $(document).ready(function () {
        $('#data-table').dataTable({
          "sPaginationType": "full_numbers"
        });
      });

      jQuery('.delete-row').click(function () {
        var conf = confirm('Continue delete?');
        if (conf) jQuery(this).parents('tr').fadeOut(function () {
          jQuery(this).remove();
        });
          return false;
        });
      </script>
      
    </body>
    </html>