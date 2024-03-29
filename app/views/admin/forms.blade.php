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
    <link href="css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js">
    </script>
    <![endif]-->
  <link href="css/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="css/wysiwyg/wysiwyg-color.css" rel="stylesheet">
  <link href="css/charts-graphs.css" rel="stylesheet">
  <link href="css/clockface.css" rel="stylesheet">
  <link href="css/timepicker.css" rel="stylesheet">
  
  </head>
  <body>
    <header>
      <a href="#" class="logo">
        <img src="img/logo.png" alt="Logo"/>
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
              <a href="forms.html" class="selected">
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
              <a href="tables.html">
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
            <li><a href="" class="heading">Forms</a></li>
            <li>
              <a href="#redgForm">
                Registration Form
              </a>
            </li>
            <li>
              <a href="#datePicker">
                Date Picker
              </a>
            </li>
            <li>
              <a href="#leftTabs">
                Wizard with Left Tabs
              </a>
            </li>
            <li>
              <a href="#horizontlForm">
                Horizontal Wizard Form
              </a>
            </li>
            <li>
              <a href="#fluidContact">
                Fluid Contact Form
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
                      
                      Bootstrap-wysihtml5 
                      <span class="mini-title">
                        Simple, beautiful wysiwyg editors
                      </span>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <div class="wysiwyg-container">
                      
                      <textarea id="wysiwyg" class="input-block-level" placeholder="Enter text ..." style="height: 200px">
                      </textarea>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            <div class="row-fluid">
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Color picker
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal" action="#">
                      
                      <div class="control-group">
                        <label class="control-label" for="color-picker-1">
                          HEX Values
                        </label>
                        <div class="controls">
                          <div class="input-append color colorpicker" data-color="#74b749" data-color-format="hex">
                            <input type="text" value="#74b749" id="color-picker-1" >
                            <span class="add-on btn" >
                              <i style="background-color: #74b749">
                              </i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="color-picker-2">
                          RGB Values
                        </label>
                        <div class="controls">
                          <div class="input-append color colorpicker" data-color="rgb(255, 149, 120)" data-color-format="rgb">
                            <input type="text" value="rgb(255, 149, 120)" id="color-picker-2" readonly="readonly">
                            <span class="add-on btn" >
                              <i style="background-color: rgb(255, 149, 120)">
                              </i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="color-picker-3">
                          RGBA Values
                        </label>
                        <div class="controls">
                          <div class="input-append color colorpicker" data-color="rgb(0,194,255,0.78)" data-color-format="rgba">
                            <input type="text" value="rgb(0,194,255,0.78)" id="color-picker-3" >
                            <span class="add-on btn" >
                              <i style="background-color: #74b749">
                              </i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                      
                    </form>
                    
                  </div>
                </div>
              </div>
              
            </div>
            

            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Date picke<a id="datePicker">r</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal" action="#">
                      <div class="control-group">
                        <label class="control-label" for="date_range2">
                          Date Readonly Input
                        </label>
                        <div class="controls">
                          <div class="input-append">
                            <input type="text" name="date_range2" id="date_range2" placeholder="01/29/2014 - 01/31/2014"  readonly="readonly" />
                            <span class="add-on btn date_picker">
                              <i class="icon-calendar">
                              </i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="date_range1">
                          Date Range Input
                        </label>
                        <div class="controls">
                          <div class="input-append">
                            <input type="text" name="date_range1" id="date_range1" class="date_picker" placeholder="01/29/2014 - 01/31/2014"/>
                            <span class="add-on btn date_picker">
                              <i class="icon-calendar">
                              </i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="report_range1">
                          Report Range Input
                        </label>
                        <div class="controls">
                          
                          <div class="input-append">
                            <input type="text" name="report_range1" id="report_range1" class="report_range" placeholder="01/29/2014 - 01/31/2014"/>
                            <span class="add-on btn report_range">
                              <i class="icon-calendar">
                              </i>
                            </span>
                          </div>
                          
                        </div>
                      </div>
                      
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>            
            
            
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Create your account 
                      <span class="mini-title">
                        Simple form for new Account
                      </span>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal no-margin">
                      <div class="control-group">
                        <label class="control-label" for="name">
                          Name
                        </label>
                        <div class="controls controls-row">
                          <input class="span3" type="text" placeholder="First Name">
                          <input class="span3 input-left-top-margins" type="text" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email1">
                          Email Address
                        </label>
                        <div class="controls">
                          <input type="text" name="email1" id="email1" class="span6" placeholder="Enter your Email Address"  />
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="password1">
                          Password
                        </label>
                        <div class="controls">
                          <input type="password" name="password1" id="password1" class="span6" placeholder="6 or more characters"  />
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="repPassword">
                          Repeat Password
                        </label>
                        <div class="controls">
                          <input type="password" name="repPassword" id="repPassword" class="span6" placeholder="Retype Password"  />
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="DateOfBirthMonth">
                          Date of birth
                        </label>
                        <div class="controls controls-row">
                          <select id="DateOfBirthMonth" class="span2">
                            <option>
                              - Month -
                            </option>
                            <option value="1">
                              January
                            </option>
                            <option value="2">
                              February
                            </option>
                            <option value="3">
                              March
                            </option>
                            <option value="4">
                              April
                            </option>
                            <option value="5">
                              May
                            </option>
                            <option value="6">
                              June
                            </option>
                            <option value="7">
                              July
                            </option>
                            <option value="8">
                              August
                            </option>
                            <option value="9">
                              September
                            </option>
                            <option value="10">
                              October
                            </option>
                            <option value="11">
                              November
                            </option>
                            <option value="12">
                              December
                            </option>
                          </select>
                          <select name="DateOfBirth_Day"  class="span2 input-left-top-margins">
                            <option>
                              - Day -
                            </option>
                            <option value="1">
                              1
                            </option>
                            <option value="2">
                              2
                            </option>
                            <option value="3">
                              3
                            </option>
                            <option value="4">
                              4
                            </option>
                            <option value="5">
                              5
                            </option>
                            <option value="6">
                              6
                            </option>
                            <option value="7">
                              7
                            </option>
                            <option value="8">
                              8
                            </option>
                            <option value="9">
                              9
                            </option>
                            <option value="10">
                              10
                            </option>
                            <option value="11">
                              11
                            </option>
                            <option value="12">
                              12
                            </option>
                            <option value="13">
                              13
                            </option>
                            <option value="14">
                              14
                            </option>
                            <option value="15">
                              15
                            </option>
                            <option value="16">
                              16
                            </option>
                            <option value="17">
                              17
                            </option>
                            <option value="18">
                              18
                            </option>
                            <option value="19">
                              19
                            </option>
                            <option value="20">
                              20
                            </option>
                            <option value="21">
                              21
                            </option>
                            <option value="22">
                              22
                            </option>
                            <option value="23">
                              23
                            </option>
                            <option value="24">
                              24
                            </option>
                            <option value="25">
                              25
                            </option>
                            <option value="26">
                              26
                            </option>
                            <option value="27">
                              27
                            </option>
                            <option value="28">
                              28
                            </option>
                            <option value="29">
                              29
                            </option>
                            <option value="30">
                              30
                            </option>
                            <option value="31">
                              31
                            </option>
                          </select>
                          
                          <select name="DateOfBirth_Year" class="span2 input-left-top-margins">
                            <option>
                              - Year -
                            </option>
                            <option value="2014">
                              2011
                            </option>
                            <option value="2012">
                              2010
                            </option>
                            <option value="2011">
                              2011
                            </option>
                            <option value="2010">
                              2010
                            </option>
                            <option value="2009">
                              2009
                            </option>
                            <option value="2008">
                              2008
                            </option>
                            <option value="2007">
                              2007
                            </option>
                            <option value="2006">
                              2006
                            </option>
                            <option value="2005">
                              2005
                            </option>
                            <option value="2004">
                              2004
                            </option>
                            <option value="2003">
                              2003
                            </option>
                            <option value="2002">
                              2002
                            </option>
                            <option value="2001">
                              2001
                            </option>
                            <option value="2000">
                              2000
                            </option>
                            <option value="1999">
                              1999
                            </option>
                            <option value="1998">
                              1998
                            </option>
                            <option value="1997">
                              1997
                            </option>
                            <option value="1996">
                              1996
                            </option>
                            <option value="1995">
                              1995
                            </option>
                            <option value="1994">
                              1994
                            </option>
                            <option value="1993">
                              1993
                            </option>
                            <option value="1992">
                              1992
                            </option>
                            <option value="1991">
                              1991
                            </option>
                            <option value="1990">
                              1990
                            </option>
                            <option value="1989">
                              1989
                            </option>
                            <option value="1988">
                              1988
                            </option>
                            <option value="1987">
                              1987
                            </option>
                            <option value="1986">
                              1986
                            </option>
                            <option value="1985">
                              1985
                            </option>
                            <option value="1984">
                              1984
                            </option>
                            <option value="1983">
                              1983
                            </option>
                            <option value="1982">
                              1982
                            </option>
                            <option value="1981">
                              1981
                            </option>
                            <option value="1980">
                              1980
                            </option>
                            <option value="1979">
                              1979
                            </option>
                            <option value="1978">
                              1978
                            </option>
                          </select>
                          
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="country">
                          Country/Region
                        </label>
                        <div class="controls">
                          <select id="country" class="span6">
                            <option value="">
                              Country...
                            </option>
                            <option value="Afganistan">
                              Afghanistan
                            </option>
                            <option value="Albania">
                              Albania
                            </option>
                            <option value="Australia">
                              Australia
                            </option>
                            <option value="Austria">
                              Austria
                            </option>
                            <option value="Azerbaijan">
                              Azerbaijan
                            </option>
                            <option value="Barbados">
                              Barbados
                            </option>
                            <option value="Belarus">
                              Belarus
                            </option>
                            <option value="Belgium">
                              Belgium
                            </option>
                            <option value="Belize">
                              Belize
                            </option>
                            <option value="Chile">
                              Chile
                            </option>
                            <option value="China">
                              China
                            </option>
                            <option value="Comoros">
                              Comoros
                            </option>
                            <option value="Congo">
                              Congo
                            </option>
                            <option value="Egypt">
                              Egypt
                            </option>
                            <option value="El Salvador">
                              El Salvador
                            </option>
                            <option value="Equatorial Guinea">
                              Equatorial Guinea
                            </option>
                            <option value="Georgia">
                              Georgia
                            </option>
                            <option value="Germany">
                              Germany
                            </option>
                            <option value="Ghana">
                              Ghana
                            </option>
                            <option value="Hawaii">
                              Hawaii
                            </option>
                            <option value="Honduras">
                              Honduras
                            </option>
                            <option value="Hong Kong">
                              Hong Kong
                            </option>
                            <option value="Iceland">
                              Iceland
                            </option>
                            <option value="India">
                              India
                            </option>
                            <option value="Indonesia">
                              Indonesia
                            </option>
                            <option value="Iran">
                              Iran
                            </option>
                            <option value="Iraq">
                              Iraq
                            </option>
                            <option value="Ireland">
                              Ireland
                            </option>
                            <option value="Isle of Man">
                              Isle of Man
                            </option>
                            <option value="Israel">
                              Israel
                            </option>
                            <option value="Italy">
                              Italy
                            </option>
                            <option value="Jamaica">
                              Jamaica
                            </option>
                            <option value="Japan">
                              Japan
                            </option>
                            <option value="Korea North">
                              Korea North
                            </option>
                            <option value="Korea Sout">
                              Korea South
                            </option>
                            <option value="Kuwait">
                              Kuwait
                            </option>
                            <option value="Macau">
                              Macau
                            </option>
                            <option value="Malaysia">
                              Malaysia
                            </option>
                            <option value="Malawi">
                              Malawi
                            </option>
                            <option value="Maldives">
                              Maldives
                            </option>
                            <option value="Mali">
                              Mali
                            </option>
                            <option value="Malta">
                              Malta
                            </option>
                            <option value="Mayotte">
                              Mayotte
                            </option>
                            <option value="Zaire">
                              Zaire
                            </option>
                            <option value="Zambia">
                              Zambia
                            </option>
                            <option value="Zimbabwe">
                              Zimbabwe
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" value="a">
                            Yes! I would like to receive email relating to products and services.
                          </label>
                          <label class="checkbox">
                            <input type="checkbox" value="b">
                            Remember Me :)
                          </label>
                        </div>
                      </div>
                      <div class="form-actions no-margin">
                        <button type="submit" class="btn btn-info pull-right">
                          Create Account
                        </button>
                        <div class="clearfix">
                        </div>
                      </div>
                      
                    </form>
                    
                  </div>
                </div>
              </div>
              
            </div>

            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Event registration for<a id="redgForm">m</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal no-margin">
                      
                      <div class="control-group">
                        <label class="control-label">
                          Name
                        </label>
                        <div class="controls controls-row">
                          <input class="span6" type="text" placeholder="First Name">
                          <input class="span6 input-left-top-margins" type="text" placeholder="Last Name">
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          Address
                        </label>
                        <div class="controls">
                          <input class="span4" type="text" placeholder="Address">
                          <span class="help-inline ">
                            Enter your Address
                          </span>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="stateAndCity">
                          State and City
                        </label>
                        <div class="controls">
                          <select id="stateAndCity" class="span6">
                            
                            <option value="" selected="selected">
                              Select a State
                            </option>
                            
                            <option value="AL">
                              Alabama
                            </option>
                            
                            <option value="AK">
                              Alaska
                            </option>
                            
                            <option value="AZ">
                              Arizona
                            </option>
                            
                            <option value="AR">
                              Arkansas
                            </option>
                            
                            <option value="CA">
                              California
                            </option>
                            
                            <option value="CO">
                              Colorado
                            </option>
                            
                            <option value="CT">
                              Connecticut
                            </option>
                            
                            <option value="DE">
                              Delaware
                            </option>
                            
                            <option value="DC">
                              District Of Columbia
                            </option>
                            
                            <option value="FL">
                              Florida
                            </option>
                            
                            <option value="GA">
                              Georgia
                            </option>
                            
                            <option value="HI">
                              Hawaii
                            </option>
                            
                            <option value="ID">
                              Idaho
                            </option>
                            
                            <option value="IL">
                              Illinois
                            </option>
                            
                            <option value="IN">
                              Indiana
                            </option>
                            
                            <option value="IA">
                              Iowa
                            </option>
                            
                            <option value="KS">
                              Kansas
                            </option>
                            
                            <option value="KY">
                              Kentucky
                            </option>
                            
                            <option value="LA">
                              Louisiana
                            </option>
                            
                            <option value="ME">
                              Maine
                            </option>
                            
                            <option value="MD">
                              Maryland
                            </option>
                            
                            <option value="MA">
                              Massachusetts
                            </option>
                            
                            <option value="MI">
                              Michigan
                            </option>
                            
                            <option value="MN">
                              Minnesota
                            </option>
                            
                            <option value="MS">
                              Mississippi
                            </option>
                            
                            <option value="MO">
                              Missouri
                            </option>
                            
                            <option value="MT">
                              Montana
                            </option>
                            
                            <option value="NE">
                              Nebraska
                            </option>
                            
                            <option value="NV">
                              Nevada
                            </option>
                            
                            <option value="NH">
                              New Hampshire
                            </option>
                            
                            <option value="NJ">
                              New Jersey
                            </option>
                            
                            <option value="NM">
                              New Mexico
                            </option>
                            
                            <option value="NY">
                              New York
                            </option>
                            
                            <option value="NC">
                              North Carolina
                            </option>
                            
                            <option value="ND">
                              North Dakota
                            </option>
                            
                            <option value="OH">
                              Ohio
                            </option>
                            
                            <option value="OK">
                              Oklahoma
                            </option>
                            
                            <option value="OR">
                              Oregon
                            </option>
                            
                            <option value="PA">
                              Pennsylvania
                            </option>
                            
                            <option value="RI">
                              Rhode Island
                            </option>
                            
                            <option value="SC">
                              South Carolina
                            </option>
                            
                            <option value="SD">
                              South Dakota
                            </option>
                            
                            <option value="TN">
                              Tennessee
                            </option>
                            
                            <option value="TX">
                              Texas
                            </option>
                            
                            <option value="UT">
                              Utah
                            </option>
                            
                            <option value="VT">
                              Vermont
                            </option>
                            
                            <option value="VA">
                              Virginia
                            </option>
                            
                            <option value="WA">
                              Washington
                            </option>
                            
                            <option value="WV">
                              West Virginia
                            </option>
                            
                            <option value="WI">
                              Wisconsin
                            </option>
                            
                            <option value="WY">
                              Wyoming
                            </option>
                          </select>
                          
                          
                          <select name="City" class="span6 input-left-top-margins">
                            
                            <option value="" selected="selected">
                              Select a City
                            </option>
                            
                            <option value="AL">
                              Alabama
                            </option>
                            
                            <option value="AK">
                              Alaska
                            </option>
                            
                            <option value="AZ">
                              Arizona
                            </option>
                            
                            <option value="AR">
                              Arkansas
                            </option>
                            
                            <option value="CA">
                              California
                            </option>
                            
                            <option value="CO">
                              Colorado
                            </option>
                            
                            <option value="CT">
                              Connecticut
                            </option>
                            
                            <option value="DE">
                              Delaware
                            </option>
                            
                            <option value="DC">
                              District Of Columbia
                            </option>
                            
                            <option value="FL">
                              Florida
                            </option>
                            
                            <option value="GA">
                              Georgia
                            </option>
                            
                            <option value="HI">
                              Hawaii
                            </option>
                            
                            <option value="ID">
                              Idaho
                            </option>
                            
                            <option value="IL">
                              Illinois
                            </option>
                            
                            <option value="IN">
                              Indiana
                            </option>
                            
                            <option value="IA">
                              Iowa
                            </option>
                            
                            <option value="KS">
                              Kansas
                            </option>
                            
                            <option value="KY">
                              Kentucky
                            </option>
                            
                            <option value="LA">
                              Louisiana
                            </option>
                            
                            <option value="ME">
                              Maine
                            </option>
                            
                            <option value="MD">
                              Maryland
                            </option>
                            
                            <option value="MA">
                              Massachusetts
                            </option>
                            
                            <option value="MI">
                              Michigan
                            </option>
                            
                            <option value="MN">
                              Minnesota
                            </option>
                            
                            <option value="MS">
                              Mississippi
                            </option>
                            
                            <option value="MO">
                              Missouri
                            </option>
                            
                            <option value="MT">
                              Montana
                            </option>
                            
                            <option value="NE">
                              Nebraska
                            </option>
                            
                            <option value="NV">
                              Nevada
                            </option>
                            
                            <option value="NH">
                              New Hampshire
                            </option>
                            
                            <option value="NJ">
                              New Jersey
                            </option>
                            
                            <option value="NM">
                              New Mexico
                            </option>
                            
                            <option value="NY">
                              New York
                            </option>
                            
                            <option value="NC">
                              North Carolina
                            </option>
                            
                            <option value="ND">
                              North Dakota
                            </option>
                            
                            <option value="OH">
                              Ohio
                            </option>
                            
                            <option value="OK">
                              Oklahoma
                            </option>
                            
                            <option value="OR">
                              Oregon
                            </option>
                            
                            <option value="PA">
                              Pennsylvania
                            </option>
                            
                            <option value="RI">
                              Rhode Island
                            </option>
                            
                            <option value="SC">
                              South Carolina
                            </option>
                            
                            <option value="SD">
                              South Dakota
                            </option>
                            
                            <option value="TN">
                              Tennessee
                            </option>
                            
                            <option value="TX">
                              Texas
                            </option>
                            
                            <option value="UT">
                              Utah
                            </option>
                            
                            <option value="VT">
                              Vermont
                            </option>
                            
                            <option value="VA">
                              Virginia
                            </option>
                            
                            <option value="WA">
                              Washington
                            </option>
                            
                            <option value="WV">
                              West Virginia
                            </option>
                            
                            <option value="WI">
                              Wisconsin
                            </option>
                            
                            <option value="WY">
                              Wyoming
                            </option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          Zip Code
                        </label>
                        <div class="controls">
                          <input class="span4" type="text" placeholder="Zip Code">
                          <span class="help-inline ">
                            Enter your Zip Code
                          </span>
                        </div>
                      </div>
                      
                      <div class="control-group error">
                        <label class="control-label">
                          Phone
                        </label>
                        <div class="controls">
                          <input class="span4" type="text" placeholder="Phone">
                          <span class="help-inline ">
                            Enter your Phone Number
                          </span>
                        </div>
                      </div>
                      <div class="control-group success">
                        <label class="control-label" for="email2">
                          Email
                        </label>
                        <div class="controls">
                          <div class="input-prepend">
                            <span class="add-on">
                              @
                            </span>
                            <input class="span12" id="email2" type="text" placeholder="Email">
                          </div>
                          
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" value="d">
                            Remember Me :)
                          </label>
                        </div>
                      </div>
                      
                      <div class="form-actions no-margin">
                        <button type="submit" class="btn btn-info pull-right">
                          Registar
                        </button>
                        <div class="clearfix">
                        </div>
                      </div>
                      
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Wizard with navbar
                      <span class="mini-title">
                        Simple, beautiful wizard
                      </span>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <div id="inverse">
                      <div class="navbar">
                        <div class="navbar-inner">
                          <div class="container">
                            <ul>
                              <li>
                                <a href="#inverse-tab1" data-toggle="tab">
                                  First
                                </a>
                              </li>
                              <li>
                                <a href="#inverse-tab2" data-toggle="tab">
                                  Second
                                </a>
                              </li>
                              <li class="hidden-phone">
                                <a href="#inverse-tab3" data-toggle="tab">
                                  Third
                                </a>
                              </li>
                              <li class="hidden-phone">
                                <a href="#inverse-tab4" data-toggle="tab">
                                  Forth
                                </a>
                              </li>
                              <li class="hidden-phone">
                                <a href="#inverse-tab5" data-toggle="tab">
                                  Fifth
                                </a>
                              </li>
                              <li class="hidden-phone">
                                <a href="#inverse-tab6" data-toggle="tab">
                                  Sixth
                                </a>
                              </li>
                              <li class="hidden-phone">
                                <a href="#inverse-tab7" data-toggle="tab">
                                  Seventh
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div id="bar" class="progress progress-info progress-striped">
                        <div class="bar">
                        </div>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane" id="inverse-tab1">
                          <p>
                            Horizontal description lists will truncate terms that are too long to fit in the left column fix In narrower viewports, they will change to the default stacked layout.
                            <span class="label label-info">
                              Heads up!
                            </span>
                          </p>
                        </div>
                        <div class="tab-pane" id="inverse-tab2">
                          <p>
                            <input type='text' name='name' id='name' placeholder='Enter Your Name' class="input-block-level no-margin">
                            
                          </p>
                        </div>
                        <div class="tab-pane" id="inverse-tab3">
                          Successful 
                        </div>
                        <div class="tab-pane" id="inverse-tab4">
                          <blockquote>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                              <span class="label label-info">
                                Integer!
                              </span>
                              posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                            </p>
                          </blockquote>
                        </div>
                        <div class="tab-pane" id="inverse-tab5">
                          <p>
                            <span class="text-warning">
                              Etiam porta sem malesuada magna mollis euismod.
                            </span>
                            <span class="text-error">
                              Donec ullamcorper nulla non metus auctor fringilla.
                            </span>
                            <span class="text-info">
                              Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.
                            </span>
                            <span class="text-success">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                            </span>
                          </p>
                        </div>
                        <div class="tab-pane" id="inverse-tab6">
                          The following snippet of text is rendered as bold
                          <strong>
                            Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.
                          </strong>
                          text.
                        </div>
                        <div class="tab-pane" id="inverse-tab7">
                          The following snippet of text is rendered as italicized text. 
                          <em>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                          </em>
                        </div>
                        <ul class="pager wizard no-margin" >
                          
                          <li class="previous first" style="display:none;">
                            <a href="#">
                              First
                            </a>
                          </li>
                          <li class="previous">
                            <a href="#">
                              Previous
                            </a>
                          </li>
                          <li class="next last" style="display:none;">
                            <a href="#">
                              Last
                            </a>
                          </li>
                          <li class="next">
                            <a href="#">
                              Next
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                      
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="row-fluid hidden-phone">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      
                      Wizard with left tabs
                      <span class="mini-title">
                        Simple, beautiful wizar<a id="leftTabs">d</a>
                      </span>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <div id="tabsleft" class="tabbable tabs-left">
                      <ul>
                        <li>
                          <a href="#tabsleft-tab1" data-toggle="tab">
                            First
                          </a>
                        </li>
                        <li>
                          <a href="#tabsleft-tab2" data-toggle="tab">
                            Second
                          </a>
                        </li>
                        <li>
                          <a href="#tabsleft-tab3" data-toggle="tab">
                            Third
                          </a>
                        </li>
                      </ul>
                      <div class="progress progress-warning progress-striped">
                        <div class="bar">
                        </div>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane" id="tabsleft-tab1">
                          <p>
                            Stylized implementation of HTML's element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.
                          </p>
                          
                          <p>
                            Stylized implementation of HTML's element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.
                          </p>
                        </div>
                        <div class="tab-pane" id="tabsleft-tab2">
                          <p>
                            Stylized implementation of HTML's element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.
                          </p>
                          
                          <p>
                            Stylized implementation of HTML's element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.
                          </p>
                        </div>
                        <div class="tab-pane" id="tabsleft-tab3">
                          <p>
                            Stylized implementation of HTML's element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.
                          </p>
                          
                          <p>
                            Stylized implementation of HTML's element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a title attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.
                          </p>
                        </div>
                        <ul class="pager wizard no-margin">
                          <li class="previous first">
                            <a href="javascript:;">
                              First
                            </a>
                          </li>
                          <li class="previous">
                            <a href="javascript:;">
                              Previous
                            </a>
                          </li>
                          <li class="next last">
                            <a href="javascript:;">
                              Last
                            </a>
                          </li>
                          <li class="next">
                            <a href="javascript:;">
                              Next
                            </a>
                          </li>
                          <li class="next finish" style="display:none;">
                            <a href="javascript:;">
                              Finish
                            </a>
                          </li>
                        </ul>
                      </div>
                      
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            
            <div class="row-fluid">
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Time Picker
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal" action="#">
                      
                      <div class="control-group">
                        <label class="control-label" for="time1">
                          Time Clockface
                        </label>
                        <div class="controls">
                          <div class="input-append">
                            <input id="time1" value="10:20 AM"  type="text" readonly="readonly">
                            <span class="add-on btn" id="toggle-btn">
                              <i class="icon-time">
                              </i>
                            </span>
                            
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="control-group">
                        <label class="control-label" for="timepicker1">
                          Time 12 Hrs
                        </label>
                        <div class="controls">
                          <div class="input-append bootstrap-timepicker">
                            <input id="timepicker1" value="10:30 AM" type="text" readonly="readonly">
                            <span class="add-on btn">
                              <i class="icon-time">
                              </i>
                            </span>
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="control-group">
                        <label class="control-label" for="timepicker2">
                          Time Modal
                        </label>
                        <div class="controls">
                          <div class="bootstrap-timepicker">
                            <input id="timepicker2" type="text" value="10:40 AM" >
                          </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="timepicker3">
                          Time 24 Hrs
                        </label>
                        <div class="controls">
                          <div class="bootstrap-timepicker">
                            <input id="timepicker3" type="text" value="10:10:10" >
                          </div>
                        </div>
                      </div>
                      
                    </form>
                    
                  </div>
                </div>
              </div>
              
            </div>

            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Fluid Contact For<a id="fluidContact">m</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <form class ="no-margin">
                      <fieldset>
                        <input type="text" id="name3" name="name3" class="input-block-level" placeholder="Name">
                        <input type="text" id="email3" name="email3" class="input-block-level" placeholder="Email">
                        <textarea rows="3" id="description3" name="description3" class="input-block-level" placeholder="Description">
                        </textarea>
                        <button type="submit" class="btn btn-info pull-right">
                          Submit
                        </button>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row-fluid">
              
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Horizontal Wizard For<a id="horizontlForm">m</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <form class="form-horizontal no-margin">
                      <div class="tab-content" id="myTabContent">
                        <div id="step1" class="tab-pane fade active in">
                          
                          <div class="control-group">
                            <label class="control-label" for="inputFirstName">
                              First Name
                            </label>
                            <div class="controls">
                              <input type="text" id="inputFirstName" placeholder="First Name">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="inputLastName">
                              Last Name
                            </label>
                            <div class="controls">
                              <input type="text" id="inputLastName" placeholder="Last Name">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">
                              Gender
                            </label>
                            <div class="controls">
                              <label class="radio inline">
                                <input type="radio" name="optionsRadioG" id="inlineRadioA" value="optiona" checked>
                                Male
                              </label>
                              <label class="radio inline">
                                <input type="radio" name="optionsRadioG" id="inlineRadioB" value="optionb">
                                Female
                              </label>
                            </div>
                          </div>
                          <hr>
                        </div>
                        <div id="step2" class="tab-pane fade">
                          <div class="control-group">
                            <label class="control-label" for="accountNumber">
                              Account Number
                            </label>
                            <div class="controls">
                              <input type="text" id="accountNumber" placeholder="Account Number">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="branch">
                              Branch
                            </label>
                            <div class="controls">
                              <input type="text" id="branch" placeholder="Branch">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">
                              Options
                            </label>
                            <div class="controls">
                              <label class="radio inline">
                                <input type="radio" name="optionsRadios" id="inlineRadio1" value="option1" checked>
                                a
                              </label>
                              <label class="radio inline">
                                <input type="radio" name="optionsRadios" id="inlineRadio2" value="option2">
                                b
                              </label>
                              <label class="radio inline">
                                <input type="radio" name="optionsRadios" id="inlineRadio3" value="option3">
                                c
                              </label>
                            </div>
                          </div>
                          <hr>
                        </div>
                        <div id="step3" class="tab-pane fade">
                          <p>
                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.prehenderit butcher retro keffiyeh dreamcatcher synth. Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. 
                          </p>
                          <p>
                            Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                          </p>
                          <label class="checkbox">
                            <input type="checkbox" checked>
                            Terms &amp; Conditions
                          </label>
                        </div>
                        <div class="next-prev-btn-container pull-right" style="margin-right: 10px;">
                          <a data-toggle="tab" href="#step1" class="button prev">
                            First
                          </a>
                          <a data-toggle="tab" href="#step2" class="button">
                            Next
                          </a>
                          <a data-toggle="tab" href="#step3" class="button next">
                            Finish
                          </a>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </form>
                    
                    
                  </div>
                </div>
              </div>
              
            </div>

            <div class="row-fluid">
              <div class="span12">
                <div class="widget no-margin">
                  <div class="widget-header">
                    <div class="title">
                      Validation States
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal no-margin" action="#">
                      <div class="control-group warning">
                        <label for="inputWarning" class="control-label">
                          Input warning
                        </label>
                        <div class="controls">
                          <input type="text" id="inputWarning" class="span6">
                          <span class="help-inline ">
                            Something wrong
                          </span>
                        </div>
                      </div>
                      <div class="control-group error">
                        <label for="inputError" class="control-label">
                          Input error
                        </label>
                        <div class="controls">
                          <input type="text" id="inputError" class="span6">
                          <span class="help-inline ">
                            correct the error
                          </span>
                        </div>
                      </div>
                      <div class="control-group success">
                        <label class="control-label">
                          Input success
                        </label>
                        <div class="controls input-icon">
                          <input type="text" class="span6">
                          <span class="help-inline ">
                            Woohoo!
                          </span>
                        </div>
                      </div>
                      <hr>
                      <div class="next-prev-btn-container pull-right">
                        <a href="#" class="button">
                          Submit
                        </a>
                        <a href="#" class="button">
                          Cancel
                        </a>
                        
                      </div>
                      <div class="clearfix">
                      </div>
                    </form>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            
          </div>
          <div class="right-sidebar">
            
            <div class="wrapper">
              <button class="btn btn-block btn-info" type="button">
                Block level button
              </button>
            </div>
            <div class="wrapper">
              <button class="btn btn-block btn-success" type="button">
                Block level button
              </button>
            </div>
            <div class="wrapper">
              <button class="btn btn-block btn-warning" type="button">
                Block level button
              </button>
            </div>
            
            <hr class="hr-stylish-1">
            
            <div class="wrapper">
              <ul class="progress-statistics">
                <li>
                  <div class="details">
                    <span>
                      Windows
                    </span>
                    <span class="pull-right">
                      78%
                    </span>
                  </div>
                  <div class="progress">
                    <div class="bar" style="width: 78%;">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="details">
                    <span>
                      Windows 8
                    </span>
                    <span class="pull-right">
                      32%
                    </span>
                  </div>
                  <div class="progress progress-success">
                    <div class="bar" style="width: 32%;">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="details">
                    <span>
                      Mac
                    </span>
                    <span class="pull-right">
                      84%
                    </span>
                  </div>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 84%;">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="details">
                    <span>
                      Linux
                    </span>
                    <span class="pull-right">
                      44%
                    </span>
                  </div>
                  <div class="progress progress-danger">
                    <div class="bar" style="width: 44%;">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="details">
                    <span>
                      IPhone/IPad
                    </span>
                    <span class="pull-right">
                      67%
                    </span>
                  </div>
                  <div class="progress progress-info">
                    <div class="bar" style="width: 67%;">
                    </div>
                  </div>
                </li>
              </ul>
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
                    <i class="icon-white icon-tasks">
                    </i>
                  </a>
                  <a href="#" class="btn btn-info">
                    <i class="icon-white icon-hand-left">
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
    
    <script src="js/wysiwyg/wysihtml5-0.3.0.js">
    </script>
    <script src="js/jquery.min.js">
    </script>
    <script src="js/bootstrap.js">
    </script>
    <script src="js/jquery.scrollUp.js">
    </script>
    <script src="js/wysiwyg/bootstrap-wysihtml5.js">
    </script>
    <script src="js/bootstrap-colorpicker.js">
    </script>
    <script type="text/javascript" src="js/date-picker/date.js">
    </script>
    <script type="text/javascript" src="js/date-picker/daterangepicker.js">
    </script>
    <script type="text/javascript" src="js/clockface.js">
    </script>
    <script type="text/javascript" src="js/bootstrap-timepicker.js">
    </script>
    <script type="text/javascript" src="js/jquery.bootstrap.wizard.js">
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

      //Popover
      $('.popover-pop').popover('hide');

      //Collapse
      $('#myCollapsible').collapse({
        toggle: false
      })

      //Tabs
      $('.myTabBeauty a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      })

      //Dropdown
      $('.dropdown-toggle').dropdown();

      //wysihtml5
      $('#wysiwyg').wysihtml5();

      //Color picker
      $('.colorpicker').colorpicker();

      //Bootstrap Timepicker
      $('#timepicker1').timepicker();

      $('#timepicker2').timepicker({
        minuteStep: 1,
        secondStep: 5,
        showInputs: false,
        template: 'modal',
        modalBackdrop: true,
        showSeconds: true,
        showMeridian: false
      });

      $('#timepicker3').timepicker({
        minuteStep: 5,
        secondStep: 30,
        showInputs: false,
        showSeconds: true,
        showMeridian: false
      });


      //Time Picker Clockface Plugin
      $(function () {

        $('#time1').clockface({
          format: 'HH:mm',
          trigger: 'manual'
        });

        $('#toggle-btn').click(function (e) {
          e.stopPropagation();
          $('#time1').clockface('toggle');
        });

      });

      //Date picker
      $('.date_picker').daterangepicker({
        opens: 'right'
      });

      //Date Picker

      $('.report_range').daterangepicker({
        ranges: {
          'Today': ['today', 'today'],
          'Yesterday': ['yesterday', 'yesterday'],
          'Last 7 Days': [Date.today().add({
            days: -6
          }), 'today'],
          'Last 30 Days': [Date.today().add({
            days: -29
          }), 'today'],
          'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
          'Last Month': [Date.today().moveToFirstDayOfMonth().add({
            months: -1
          }), Date.today().moveToFirstDayOfMonth().add({
            days: -1
          })]
        },
        opens: 'right',
        format: 'MM/dd/yyyy',
        separator: ' to ',
        startDate: Date.today().add({
          days: -29
        }),
        endDate: Date.today(),
        minDate: '01/01/2012',
        maxDate: '12/31/2014',
        locale: {
          applyLabel: 'Submit',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom Range',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        },
        showWeekNumbers: true,
        buttonClasses: ['btn-danger']
      },

      function (start, end) {
        $('.report_range span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));
      });

      //Set the initial state of the picker label
      $('.report_range span').html(Date.today().add({
        days: -29
      }).toString('MMMM d, yyyy') + ' - ' + Date.today().toString('MMMM d, yyyy'));


      //Wizard Progressbar

      $('#inverse').bootstrapWizard({
        'tabClass': 'nav',
        'debug': false,
        onShow: function (tab, navigation, index) {
          console.log('onShow');
        },
        onNext: function (tab, navigation, index) {
          console.log('onNext');
          if (index == 2) {
            // Make sure we entered the name
            if (!$('#name').val()) {
              alert('You must enter your name');
              $('#name').focus();
              return false;
            }
          }

          // Set the name for the next tab
          $('#inverse-tab3').html('Hello, ' + $('#name').val());

        },
        onPrevious: function (tab, navigation, index) {
          console.log('onPrevious');
        },
        onLast: function (tab, navigation, index) {
          console.log('onLast');
        },
        onTabClick: function (tab, navigation, index) {
          console.log('onTabClick');
          alert('on tab click disabled');
          return false;
        },
        onTabShow: function (tab, navigation, index) {
          console.log('onTabShow');
          var $total = navigation.find('li').length;
          var $current = index + 1;
          var $percent = ($current / $total) * 100;
          $('#inverse').find('.bar').css({
            width: $percent + '%'
          });
        }
      });


      //Wizard Progressbar tabs left

      $('#tabsleft').bootstrapWizard({
        'tabClass': 'nav nav-tabs',
        'debug': false,
        onShow: function (tab, navigation, index) {
          console.log('onShow');
        },
        onNext: function (tab, navigation, index) {
          console.log('onNext');
        },
        onPrevious: function (tab, navigation, index) {
          console.log('onPrevious');
        },
        onLast: function (tab, navigation, index) {
          console.log('onLast');
        },
        onTabClick: function (tab, navigation, index) {
          console.log('onTabClick');

        },
        onTabShow: function (tab, navigation, index) {
          console.log('onTabShow');
          var $total = navigation.find('li').length;
          var $current = index + 1;
          var $percent = ($current / $total) * 100;
          $('#tabsleft').find('.bar').css({
            width: $percent + '%'
          });

          // If it's the last tab then hide the last button and show the finish instead
          if ($current >= $total) {
            $('#tabsleft').find('.pager .next').hide();
            $('#tabsleft').find('.pager .finish').show();
            $('#tabsleft').find('.pager .finish').removeClass('disabled');
          } else {
            $('#tabsleft').find('.pager .next').show();
            $('#tabsleft').find('.pager .finish').hide();
          }

        }
      });


      $('#tabsleft .finish').click(function () {
        alert('Finished!, Starting over!');
        $('#tabsleft').find("a[href*='tabsleft-tab1']").trigger('click');
      });
    </script>
  <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>