<?php
session_start();
?>
<div class="header-top box">
    <div class="col-scrl">
        <div class="head box span-12">
            <div class="box span-1-8">
                <a href="index.php"><img src="../img/SIM/Logo.png"></a>
            </div>
            <div class="head-right box span-10-3">
                <div class="box span-7">
                    &nbsp;
                </div>
                <div class="welcome box span-3">
                    <div class="box span-12">
                        <img src="../img/AdminUtama/Icon-2.png">
                        <table class="table">
                            <tr>
                                <td><?php echo $_SESSION['user'][1];?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="notif box span-1">
                    <div class="box span-12">
                        <div class="box span-6">
                            <a href="inbox.html"><img src="../img/Notification/email.png"></a>
                        </div>
                        <div class="box span-6">
                            <a href=""><img src="../img/Notification/setting.png"></a>
                        </div>
                    </div>
                </div>
                <div class="logout box span-1">
                    <div class="box span-12">
                        <a onclick="getLogout();">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
