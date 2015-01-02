/* START Login Page */
function getLogin(){
    //checking input parameter
    var username = document.getElementById('login-username').value;
    var password = document.getElementById('login-password').value;
    
    if(username == "" || username == null || password == "" || password == null){
        document.getElementById('login_popup1').style.display = "";
        return false;
    }else{
        return true;
    }
}

function getLogin_confirm(x){
    document.getElementById('login_popup'+x).style.display = 'none';
}

function getLogout(){
    window.location = "../../function/function.php?logout=true";
}

/* END Login Page */

/* START Tambah Berita Masjid */
function getMasjidByWilayah(str){
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tambahBeritaMasjid_selectMasjid").innerHTML = xmlhttp.responseText;
                
                if(xmlhttp.responseText == ''){
                    document.getElementById("tambahBeritaMasjid_selectMasjid").innerHTML = '<option>Pilih Masjid</option>';
                }
            }else{
                document.getElementById("tambahBeritaMasjid_selectMasjid").innerHTML = '<option>Pilih Masjid</option>';
            }
        }
        xmlhttp.open("GET","../../function/script/select/masjidByWilayah.php?idWilayah="+str,true);
        xmlhttp.send();
    }
}
/* END Tambah Berita Masjid */

/* START Function Ubah Admin Masjid */
function ubahAdminMasjidAU(str){
    var temp = '<div class="baris box span-12"><div class="nomer center box span-2">-</div><div class="isi center box span-2">-</div><div class="masjid inherit center box span-6">-</div><div class="aksi box span-2"><div class="ubah box span-12"><a class="btn btn-block btn-lg btn-ubah-inverse" href=""><img src="../img/Notification/edit.png"></a></div></div></div>';
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ubahAdminMasjidAU").innerHTML += xmlhttp.responseText;
                if(xmlhttp.responseText )
            }
        }
        xmlhttp.open("GET","../../function/script/select/ubahAdminMasjid.php?idWilayah="+str,true);
        xmlhttp.send();
    }
}
/* END Function Ubah Admin Masjid */