<div style="width:80vw;height:70vh;background-color: #3b3b3b;left:50%;top:50%;transform: translate(-50%, -50%);position: absolute;">

    <form method="POST" action="create.php" style="
    width: 80%;
    height: 80%;
    padding: 6% 10%;
">
    
<div style="
    float: left;
    width: 100%;
    height: 10%;
    margin: 3% 0;
">
    <p style="
    float: left;
    margin: 0 1%;
    line-height: 40px;
    color: white;
">Lütfen Form Tipini Seçiniz :</p>
<select name="sel" style="
    float: left;
    width: 20%;
    height: 55%;
    background-color: #2a2a2a;
    color: white;
    border-radius: 5px;
    margin: 0 1%;
">

<option value="services">Servis Formu</option>
<option value="cargo">Kargo Formu</option>
<option value="scrap">Hurda Formu</option>
<option value="delivery">Malzeme Teslim Formu</option>

</select></div>
<h4 style="
    color: white;
">Cihaz Sistemde Kayıtlı İse;</h4><div style="
    float: left;
    width: 100%;
    height: 10%;
    margin: 3% 0;
">
<input name="id" style="display:none;" value="<?php echo $id;?>">
<input name="nick" style="display:none;" value="<?php echo $nick; ?>">
<input name="user" style="display:none;" value="<?php echo $name." ".$sname;?>">
    
<input name="eno" style="
    float: right;
    width: 20%;
    height: 55%;
    background-color: #2a2a2a;
    color: white;
    border-radius: 5px;
    margin: 0 1%;
    border: none;
">
<p style="
    float: right;
    margin: 0 1%;
    line-height: 40px;
    color: white;
">Lütfen Envanter Numarasını Giriniz :</p></div><h4 style="
    color: white;
">Cihaz Sistemde Kayıtlı Değil İse;</h4>
<div style="
    float: left;
    width: 100%;
    height: 10%;
    margin: 3% 0;
">
    
<input name="sno" style="
    float: right;
    width: 20%;
    height: 55%;
    background-color: #2a2a2a;
    color: white;
    border-radius: 5px;
    margin: 0 1%;
    border: none;
">
<p style="
    float: right;
    margin: 0 1%;
    line-height: 40px;
    color: white;
    margin-left: 10%;
">Lütfen Cihazın Seri Numarasını Giriniz :</p></div>
<input type="submit" style="
    display: block;
    margin: auto;
    width: 20%;
    height: 5%;
    background-color: #2a2a2a;
    border: none;
    border-radius: 5px;
    color: white;
">

    </form>

</div>