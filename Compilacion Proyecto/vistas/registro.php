<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHYLINE </title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-tour.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/main.css" rel="stylesheet">
    <script src="../js/bootstrap-tour.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="../img/icono.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<body>


  <!-- Static navbar -->
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">PhyLine</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Iniciar Sesion</a></li>
                    <li><a href="about.php">Acerca de</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
            <!-- Static navbar -->
    



            <hr class="featurette-divider">

      <div class="container" id="wrap">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form name='form1' action="../controladores/cor_Registro.php" method="post" accept-charset="utf-8" class="form" role="form">   
              <legend>Registrate</legend>
              <h4>It's free and always will be.</h4>
              <div class="row">
                <div class="col-xs-6 col-md-6">
                  <input required type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />
                </div>
                <div class="col-xs-6 col-md-6">
                  <input required type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />
                </div>
              </div>
              <input required type="text" name="user" value="" class="form-control input-lg" placeholder="User"  />
              <input required type="email" name="email" value="" class="form-control input-lg" placeholder="Email"  />
              <input required type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
              <label>Fecha de nacimiento</label>
              <div class="row">
                <div class="col-xs-4 col-md-4">
                  <select name="month" class = "form-control input-lg">
                      <option value="01">Ene</option>
                      <option value="02">Feb</option>
                      <option value="03">Mar</option>
                      <option value="04">Abr</option>
                      <option value="05">May</option>
                      <option value="06">Jun</option>
                      <option value="07">Jul</option>
                      <option value="08">Ago</option>
                      <option value="09">Sep</option>
                      <option value="10">Oct</option>
                      <option value="11">Nov</option>
                      <option value="12">Dic</option>
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <select name="day" class = "form-control input-lg">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      </select>             
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <select name="year" class = "form-control input-lg">
                      <option value="1935">1935</option>
                      <option value="1936">1936</option>
                      <option value="1937">1937</option>
                      <option value="1938">1938</option>
                      <option value="1939">1939</option>
                      <option value="1940">1940</option>
                      <option value="1941">1941</option>
                      <option value="1942">1942</option>
                      <option value="1943">1943</option>
                      <option value="1944">1944</option>
                      <option value="1945">1945</option>
                      <option value="1946">1946</option>
                      <option value="1947">1947</option>
                      <option value="1948">1948</option>
                      <option value="1949">1949</option>
                      <option value="1950">1950</option>
                      <option value="1951">1951</option>
                      <option value="1952">1952</option>
                      <option value="1953">1953</option>
                      <option value="1954">1954</option>
                      <option value="1955">1955</option>
                      <option value="1956">1956</option>
                      <option value="1957">1957</option>
                      <option value="1958">1958</option>
                      <option value="1959">1959</option>
                      <option value="1960">1960</option>
                      <option value="1961">1961</option>
                      <option value="1962">1962</option>
                      <option value="1963">1963</option>
                      <option value="1964">1964</option>
                      <option value="1965">1965</option>
                      <option value="1966">1966</option>
                      <option value="1967">1967</option>
                      <option value="1968">1968</option>
                      <option value="1969">1969</option>
                      <option value="1970">1970</option>
                      <option value="1971">1971</option>
                      <option value="1972">1972</option>
                      <option value="1973">1973</option>
                      <option value="1974">1974</option>
                      <option value="1975">1975</option>
                      <option value="1976">1976</option>
                      <option value="1977">1977</option>
                      <option value="1978">1978</option>
                      <option value="1979">1979</option>
                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      </select>
                    </div>
                  </div>
                  <label>Genero : </label>                    
                  <label class="radio-inline">
                    <input required type="radio" name="gender" value="M" id=male /> 
                        Masculino 
                  </label>

                  <label class="radio-inline">
                    <input required type="radio" name="gender" value="F" id=female />                        
                      Femenino
                  </label>  <br />
                  <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                  <button name='btnguardar' class="btn btn-lg btn-primary btn-block signup-btn" type="submit">  Crear mi cuenta </button>
                  </form>          
                </div>
              </div>            
            </div>
        </div>



        <hr class="featurette-divider">





         <!-- +++++ Footer Section +++++ -->

            <div id="footer">
                    <div class="container">
                        

                            <div class="row">
                                    <div class="col-lg-4">
                                            <h4>Elaborado por FastSoft</h4>
                                            <p>
                                                   &copy; CopyRight UniSimon,<br/>
                                                    +57 3218461698, <br/>
                                                    Malambo, Colombia.
                                            </p>
                                    </div><!-- /col-lg-4 -->

                                    <div class="col-lg-4">
                                            <h4>Paginas</h4>
                                            <p>
                                                    <a href="https://www.facebook.com/jcabarcasguti">Facebook</a><br/>
                                                    <a href="https://twitter.com/joseomar94">Twitter</a>
                                            </p>
                                    </div><!-- /col-lg-4 -->

                                    <div class="col-lg-4">
                                            <h4>Acerca de PhyLine</h4>
                                            <p>Sistema encargado de la evaluación de test psicológicos.</p>
                                    </div><!-- /col-lg-4 -->

                            </div>

                    </div>
            </div>

            <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>