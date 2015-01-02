 <?php
 $content = 
                '<div class="content row">
                    <div class="login box">
                        <div class="col">
                            <div class="masjid box span-12">
                                <div class="box span-3">
                                    &nbsp;
                                </div>
                                <div class="box span-6">
                                    <div class="box span-12">
                                        <div class="kiri box span-12">
                                        <form method="POST" action="../../function/function.php" name="login_form" onsubmit="return getLogin();">
                                            <div class="keterangan box span-2-5">
                                                Username
                                            </div>
                                            <div class="keterangan box span-0-5 center">
                                                :
                                            </div>
                                            <div class="input box span-9">
                                                <input class="form-control login-field" type="text" placeholder="Masukan username admin" value="" name="username" id="login-username">
                                            </div>
                                        </div>
                                        <div class="kiri box span-12">
                                            <div class="keterangan box span-2-5">
                                                Password
                                            </div>
                                            <div class="keterangan box span-0-5 center">
                                                :
                                            </div>
                                            <div class="input box span-9">
                                                <input class="form-control login-field" type="password" placeholder="Masukan password" value="" name="password" id="login-password">
                                            </div>
                                        </div>
                                        <div class="kiri box span-12">
                                            <input class="btn btn-block btn-lg btn-inverse" type="submit" value="Login" name="login_submit" />
                                          <!--  <a class="btn btn-block btn-lg btn-inverse" onClick="getLogin(document.forms.login_form)">Login</a> -->
                                        </div>
                                        </form>
                                        <div class="lupa box span-12 center">
                                            <a class="href-white" href="register.html">Buat akun</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box span-3">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
 
 // Pop-up Input username atau password kosong
 $content .= '
            <div id="login_popup1" style="display:none;">
            <div class="layer box span-12"></div>
            <div class="pop-up box span-3">Username atau password yang dimasukan salah, silahkan untuk mencoba kembali.</div>
            <div class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok" onclick="getLogin_confirm(1);">Ya</div>
            </div>
            ';
 
 // Pop-up username atau password salah
 if(isset($_GET['e'])){
    $content .= '
            <div id="login_popup2">
            <div class="layer box span-12"></div>
            <div class="pop-up box span-3">Username atau password salah.</div>
            <div class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok" onclick="getLogin_confirm(2);">Ok</div>
            </div>
            ';
 }

include ('../template/template.php');
?>                    