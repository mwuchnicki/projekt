
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <title>GENERATOR GEOANKIETY</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    

<script type="text/javascript">
window.onload = Laduj;
var active_id = "";

function Laduj()
{
    document.forms['sampleForm'].ilosc.onchange = Zmien;
}

function Zmien()
{
    if (active_id != "")
    {
        var blok2 = document.getElementById(active_id); //schowaj akapit o id, jakim jest wartość tej zmiennej
        blok2.style.display = "none";
    }
    var blok = document.getElementById(this.value);
    blok.style.display = "block";
    active_id = this.value; //aktualizjuje wartość
}
</script>
</head>
<body>


<div class="container">

<h2>GENERATOR GEOANKIETY</h2>
<p style="text-align: center; font-size: 20px;"> Aby wygererować Geoankietę prosze przejść przez 6 etapów. </p>
<p style="text-align: center; color:red; font-size: 20px;">Pola zaznaczone * są obowiązkowe.</p>

<form id="sampleForm" name="sampleForm" action="save_generator.php" method="post"> 
</br>
</br>


<p style="font-size:20px;">Krok 1. &nbsp;Wprowadź tytuł badania: <b style="color:red; font-size: 25px;">*</b></p>
<textarea name="tytul" rows="2" style="width: 70%;" maxlength="100"> Wprowadź tekst tytułi badania.
</textarea>
</br>
</br>
</br>


<p style="font-size:20px;">Krok 2. &nbsp;Wprowadź tekst powitalny: <b style="color:red; font-size: 25px;">*</b></p>
<textarea name="start" rows="10" style="width: 100%;" maxlength="2500">Wprowadź tekst powitalny ankietera.
</textarea>
</br>
</br>
</br>


<p style="font-size:20px;">Krok 3. &nbsp;Wprowadź tekst podziękowania za udział w badaniu: </p>
<textarea name="koniec" rows="10" style="width: 100%" maxlength="2500">Wprowadź tekst podziękowania dla ankietera.
</textarea>
</br>
</br>
</br>


<p style="font-size:20px;">Krok 4. &nbsp;Wybierz ilość pytań w etapie: <b style="color:red; font-size: 25px;">*</b></p>
<select name="ilosc" style="width: 250px; font-size: 18px; padding: 10px;" size="6">
    <option style="text-align: center; font-size: 22px;" value="1" >1</option>
    <option style="text-align: center; font-size: 22px;" value="2" >2</option>
    <option style="text-align: center; font-size: 22px;" value="3" >3</option>
    <option style="text-align: center; font-size: 22px;" value="4" >4</option>
    <option style="text-align: center; font-size: 22px;" value="5" >5</option>
    <option style="text-align: center; font-size: 22px;" value="6" >6</option>
</select>
</br>
</br>


<!-- jeśli wybrano 1 opcje to wprowadź jedno pytanie-->
<div id="1" style="display: none;" > 
    </br>
    <p style="font-size:18px;">1) Wprowadź pierwsze pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie1" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst pierwszego pytania.">Wprowadź tekst pierwszego pytania. 
    </textarea>

    <!-- wybiera kolor punktu -->
    <div style="margin-left: 150px;">
        <p style="font-size: 16px;">Wybierz kolor punktu do pytania pierwszego: <b style="color:red; font-size: 25px;">*</b></p>           
        <input type="radio" name="punkt1" value="ikony/marker_icon.png"><img src="ikony/marker_icon.png"/></input>
        <input type="radio" name="punkt1" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
        <input type="radio" name="punkt1" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
        <input type="radio" name="punkt1" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
        <input type="radio" name="punkt1" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
        <input type="radio" name="punkt1" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
    </div>

</div>

<!-- jeśli wybrano 2 opcje to wprowadź dwa pytania-->
<div id="2" style="display: none;"> 
    </br>
    <p style="font-size:18px;">1) Wprowadź pierwsze pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie1" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst pierwszego pytania.">Wprowadź tekst pierwszego pytania. 
    </textarea>

        
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania pierwszego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt1" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">2) Wprowadź drugie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie2" rows="3" style="width: 70%;"  maxlength="500" value="Wprowadź tekst drugiego pytania.">Wprowadź tekst drugiego pytania. 
    </textarea>

        
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania drugiego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt1" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_czerwony.png" ><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
</div>

<!-- jeśli wybrano 3 opcje to wprowadź trzy pytania-->
<div id="3" style="display: none;"> 
    </br>
    <p style="font-size:18px;">1) Wprowadź pierwsze pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie1" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst pierwszego pytania.">Wprowadź tekst pierwszego pytania.
    </textarea>

        
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania pierwszego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt1" value="ikony/marker_icon.png"><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">2) Wprowadź drugie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie2" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst drugiego pytania.">Wprowadź tekst drugiego pytania. 
    </textarea>

        
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania drugiego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt2" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_czerwony.png" ><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">3) Wprowadź trzecie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie3" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst trzeciego pytania.">Wprowadź tekst trzeciego pytania 
    </textarea>

        <!-- wybiera kolor punktu -->
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania trzeciego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt3" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
</div>

<!-- jeśli wybrano 4 opcje to wprowadź cztery pytania -->
<div id="4" style="display: none;"> 
    </br>
    <p style="font-size:18px;">1) Wprowadź pierwsze pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie1" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst pierwszego pytania.">Wprowadź tekst pierwszego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania pierwszego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt1" value="ikony/marker_icon.png"><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** --> 
    <p style="font-size:18px;">2) Wprowadź drugie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie2" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst drugiego pytania.">Wprowadź tekst drugiego pytania. 
    </textarea>

       
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania drugiego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt2" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_czerwony.png" ><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">3) Wprowadź trzecie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie3" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst trzeciego pytania.">Wprowadź tekst trzeciego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania trzeciego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt3" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">4) Wprowadź czwarte pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie4" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst czwartego pytania.">Wprowadź tekst czwartego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania czwartego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt4" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
</div>

<!-- jeśli wybrano 5 opcje to wprowadź cztery pytania -->
<div id="5" style="display: none;"> 
    </br>
    <p style="font-size:18px;">1) Wprowadź pierwsze pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie1" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst pierwszego pytania.">Wprowadź tekst pierwszego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania pierwszego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt1" value="ikony/marker_icon.png"><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">2) Wprowadź drugie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie2" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst drugiego pytania.">Wprowadź tekst drugiego pytania. 
    </textarea>

       
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania drugiego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt2" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_czerwony.png" ><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">3) Wprowadź trzecie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie3" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst trzeciego pytania.">Wprowadź tekst trzeciego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania trzeciego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt3" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">4) Wprowadź czwarte pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie4" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst czwartego pytania.">Wprowadź tekst czwartego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania czwartego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt4" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">5) Wprowadź piąte pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie5" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst piątego pytania.">Wprowadź tekst piątego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania piątego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt5" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
</div>

<!-- jeśli wybrano 6 opcje to wprowadź cztery pytania -->
<div id="6" style="display: none;"> 
    </br>
    <p style="font-size:18px;">1) Wprowadź pierwsze pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie1" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst pierwszego pytania.">Wprowadź tekst pierwszego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania pierwszego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt1" value="ikony/marker_icon.png" checked><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt1" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">2) Wprowadź drugie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie2" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst drugiego pytania.">Wprowadź tekst drugiego pytania. 
    </textarea>

       
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania drugiego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt2" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_czerwony.png" checked><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zielony.png"><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt2" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">3) Wprowadź trzecie pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie3" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst trzeciego pytania.">Wprowadź tekst trzeciego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania trzeciego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt3" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zielony.png" checked><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt3" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** --> 
    <p style="font-size:18px;">4) Wprowadź czwarte pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie4" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst czwartego pytania.">Wprowadź tekst czwartego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania czwartego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt4" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_fiolet.png" checked><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt4" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">5) Wprowadź piąte pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie5" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst piątego pytania.">Wprowadź tekst piątego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania piątego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt5" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_zolty.png" checked><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt5" value="ikony/marker_szary.png"><img src="ikony/marker_szary.png"/></input>
        </div>
    <!-- ********************************************************************************************************************** -->
    <p style="font-size:18px;">6) Wprowadź szóste pytanie: <b style="color:red; font-size: 25px;">*</b></p> 
    <textarea name="pytanie6" rows="3" style="width: 70%;" maxlength="500" value="Wprowadź tekst szóstego pytania.">Wprowadź tekst szóstego pytania. 
    </textarea>

         
        <div style="margin-left: 150px;">
            <p style="font-size: 16px;">Wybierz kolor punktu do pytania szóstego: <b style="color:red; font-size: 25px;">*</b></p>           
            <input type="radio" name="punkt6" value="ikony/marker_icon.png" ><img src="ikony/marker_icon.png"/></input>
            <input type="radio" name="punkt6" value="ikony/marker_czerwony.png"><img src="ikony/marker_czerwony.png"/></input>
            <input type="radio" name="punkt6" value="ikony/marker_zielony.png" ><img src="ikony/marker_zielony.png"/></input>
            <input type="radio" name="punkt6" value="ikony/marker_fiolet.png"><img src="ikony/marker_fiolet.png"/></input>
            <input type="radio" name="punkt6" value="ikony/marker_zolty.png"><img src="ikony/marker_zolty.png"/></input>
            <input type="radio" name="punkt6" value="ikony/marker_szary.png" checked><img src="ikony/marker_szary.png"/></input>
        </div>    
</div>
</br>
</br>


<p style="font-size:20px; ">Krok 5. &nbsp;Wybierz podkład mapowy:</p>
<div class="kolor">
    <input id="topo" type="radio" name="mapa" value="osm" checked="checked"/><label for="topo" style="font-size:20px;">&nbsp;Mapa topograficzna - OpenStreetMap</label>
    <div id="mapidtopo" style="height:250px; margin-top: 10px;"></div>
    <input id="sate" type="radio" name="mapa" value="L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: 'google'
            })"/><label for="sate" style="font-size:20px;">&nbsp;Zdjęcie satelitarne - GoogleMaps</label>
    <div id="mapidsate" style="height:250px; margin-top: 10px;"></div>
</div>
</br>
</br>


<!-- <p style="font-size:20px;">Krok 5. &nbsp;Czy chcesz umieścić na stronie DANE RESPONDENTA?</p>
    <input type="radio" name="dane" id="pokaz" value="TAK" onclick="e.style.display=(c.checked)?'':'none'; "/><label style="font-size:22px; margin-right: 10px;">TAK</label> 
    <input type="radio" name="dane" id="pokaz" value="NIE" onclick="e.style.display=(c.checked)?'':'none'; " checked="checked"/><label style="font-size:22px;">NIE</label>

    <div id="hide" style="display: none">
        <p style="color: red; margin-bottom: -10px;">DANE RESPONDENTA zostały dodane do geoankiety.</p>
    </div>
</br>
</br>
</br> -->


<p style="font-size:20px;">Krok 6. &nbsp;Przybliż mapę do obszaru, który ma być widoczny w geoankiecie.</p>

    <div id="mapid" style="height:600px;"></div>

<input type="hidden" id="center" name="center" value=""/>
<input type="hidden" id="zoom" name="zoom" value="" >   

</br>
</br>
</br>
</br>
    <div style="text-align: center;">
        <a href="#" style="border-style: solid; border-radius: 15px; padding:10px; font-size: 25px; text-decoration: none; color: #436CA8;" onClick="setValue();" />GENERUJ GEOANKIETĘ</a>
       <!--  <input style="margin-top: 15px; font-size: 55px; " onClick="setValue();" type="submit" value="Generuj" />  -->
    </div>
</form>

</br>
</br>
</br>
</br>
</br>
</div>

<script type="text/javascript">
/*pokazywanie i ukrywanie danych metryczki*/
var c = document.getElementById('pokaz');
var e = document.getElementById('hide');

//fukncja do submita
function setValue(){
    //id form.id imput.value
    document.sampleForm.center.value = mymap.getCenter();
    document.sampleForm.zoom.value = mymap.getZoom();
    document.forms["sampleForm"].submit();
}

var mymap = L.map('mapid').setView([33, 0], 1.5);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

var maptopo = L.map('mapidtopo').setView([33, 0], 1);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(maptopo);

var mapsate = L.map('mapidsate').setView([33, 0], 1);
L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
    attribution: 'google'
}).addTo(mapsate);

</script>
</body>
</html>
