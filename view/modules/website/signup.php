   <body class="signup-page access-page has-full-screen-bg">
    <div class="upper-wrapper">
        <!-- ******HEADER****** -->
        <header class="header">
            <div class="container">
                <h1 class="logo">
                    <a href="inicio"><span class="logo-icon"></span><span class="text">Beatus</span></a>
                </h1><!--//logo-->

            </div><!--//container-->
        </header><!--//header-->

        <!-- ******Signup Section****** -->
        <section class="signup-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-offset-2 col-sm-offset-0 xs-offset-0 col-xs-12 col-md-8">
                        <div class="form-box-inner">
                            <h2 class="title text-center">Registrase</h2>
                          <!--   <p class="intro text-center">It only takes 3 minutes!</p>                -->
                            <div class="row">
                                <div class="form-container col-xs-12 col-md-5">
                <form class="signup-form" data-parsley-validate method="post" action="crear-usuario">
                                <div class="form-group email">
                                    <label class="sr-only" for="signup-email">Ingresa Nombre Completo</label>
                                       <input id="signup-email" name="data[]" type="text" class="form-control login-email" placeholder=" Nombre " required
                                       data-parsley-pattern="^[a-zA-Z ]+$">
                                 </div><!--//form-group-->

                                 <div class="form-group email">
                                     <label class="sr-only" for="signup-email">Ingresa Apellido</label>
                                        <input id="signup-email" name="data[]" type="text" class="form-control login-email" placeholder="Apellido" required
                                        data-parsley-pattern="^[a-zA-Z ]+$">
                                  </div><!--//form-group-->


                                <!-- <div class="form-group email">
                                    <label class="sr-only" for="signup-email">Ingresa Nombre Completo</label>
                                      <input id="signup-email" idea type="text" name="" value="" class="form-control login-email" placeholder="">
                                 </div> -->
                                 <!--//form-group-->


                                        <div class="form-group email">
                                            <label class="sr-only" for="signup-email">Tu Correo</label>
                                            <input id="signup-email" name="data[]" type="email" class="form-control login-email" placeholder="Tu Correo" required>
                                        </div><!--//form-group-->

                                        <div class="form-group password">
                                            <label class="sr-only" for="signup-password">Tu Contraseña</label>
                                            <input id="signup-password" name="data[]" type="password" class="form-control login-password" placeholder="Contraseña" required
                                              data-parsley-equalto="#signup-password" data-parsley-minlength="8" data-parsley-type="alphanum"
                                            >

                                        </div><!--//form-group-->
                                            <div class="form-group password">
                                            <input id="signup-password"  data-parsley-equalto="#signup-password" type="password" class="form-control login-password" placeholder="Verificar Contraseña">
                                            <label class="sr-only" for="signup-password"  >Verificar  Contraseña</label>
                                        </div><!--//form-group-->

                                        <button type="submit" class="btn btn-block btn-cta-primary">Registrarse</button>
                                        <p class="note"> al registrarse, usted acepta nuestras condiciones de servicio y política de privacidad..</p>
                                        <p class="lead">¿Ya tienes una cuenta? <a class="login-link" id="login-link" href="iniciar-sesion">iniciar-sesion</a></p>
                                    </form>
                                </div><!--//form-container-->

                                <div class="social-btns col-md-offset-1 col-sm-offset-0 col-sm-offset-0 col-xs-12 col-md-5">
                                    <div class="divider"><span>O</span></div>
                                    <ul class="list-unstyled social-login">
                                        <li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Registrase con Twitter</button></li>
                                        <li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Registrase con Facebook</button></li>

                                        <li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Registrase con Google</button></li>
                                    </ul>
                                    <p class="note">Al registrarse, usted acepta nuestras condiciones de servicio y política de privacidad</p>
                                </div><!--//social-login-->
                            </div><!--//row-->
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//signup-section-->
    </div><!--//upper-wrapper-->
