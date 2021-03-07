<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Recrutement Decathlon | Accueil</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script>
        function toggleField(hideObj,showObj){
          hideObj.disabled=true;        
          hideObj.style.display='none';
          showObj.disabled=false;   
          showObj.style.display='inline';
          showObj.focus();
        }
    </script>
</head>

<body>
    <header>
        <div class="content">
            <div class="div-logo">
                <a href="index.php"><img src="img/logo.jpg" alt="logo decathlon"/> </a>
            </div>
            <div class="hd-right">
                <ul class="menu">
                    <li><a href="#" class="active">Accueil</a></li>
                    <li><a href="send-cv.php">Postuler</a></li>
                </ul>
            </div>
            <div id="drop" onmouseover="afficher();" onmouseout="cacher();">
                <img src="img/menu.png" alt="menu"/>
                <div id="drop-down">
                    <div class="middle div-drop">
                        <ul>
                            <div class="hr"></div>
                            <li><a href="#" class="active">Accueil</a></li>
                            <div class="hr"></div>
                            <li><a href="send-cv.php">Postuler</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="content bg-white">
            <div class="two-cols">
                <div class="content-bottom middle text-left"><br/>
                    <h1 class="top-h1">Vous souhaitez intégrer l'équipe Decathlon ?</h1>
                    <p class="p-desc">
                        Alors, N'attendez plus !<br/>Tentez votre chance en envoyant votre CV.
                        <br/><br/>
                        <a href="send-cv.php" class="a-btn">POSTULER ICI</a>
                    </p>
                </div>
            </div>
            <div class="two-cols">
                <div>
                    <img src="img/cover.jpg" alt="" class="img"/>
                </div>
            </div>
        </div>

        <section id="">
            <div class="middle">
                <div class="content-head">
                    <h1>NOS VALEURS</h1>
                    <hr class="hr-orange" />
                    
                </div>
                <div class="content">
                    
                    <div class="four-cols">
                        <p class="valeur"><span class="span-val">1</span><br/><br/>Vitalité</p>C'est la vie. C'est être positif et plein d'énergie.
                            
                    </div>
                     <div class="four-cols">
                        <p class="valeur"><span class="span-val">2</span><br/><br/>Responsabilité</p>C'est se prendre en charge, et être acteur de sa vie.
                            
                    </div>
                     <div class="four-cols">
                        <p class="valeur"><span class="span-val">3</span><br/><br/>Générosité</p>C'est faire les choses avec cœur et être tourné vers les autres.
                            
                    </div>
                     <div class="four-cols">
                        <p class="valeur"><span class="span-val">4</span><br/><br/>Authenticité</p>C'est être en vérité avec soi, et aussi avec les autres.                                
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="" class="text-left bg-white">
            <div class="middle">
                <div>
                    <h1>NOTRE HISTOIRE</h1>

                    <p>
                        Présente en Côte d'Ivoire depuis le 16 Décembre 2016, DECATHLON, entreprise de production et de grande distribution d'équipements sportifs, a été créée en 1976 par Michel Leclercq à partir d'une idée originale : répondre aux besoins des sportifs pationnés en proposant un meilleur rapport qualité-prix et une large gamme d'articles de sports dans un même endroit.<br/>

                        <p>
                            <b>Notre mission :</b> Rendre durablement le plaisir et les bienfaits de la pratique du sport accessible au plus grand nombre.
                        </p>

                        <p>
                            <b>Notre sens : </b>Être utile aux gens et à leur planète.
                        </p>
                    </p>
                </div>
            </div>
        </section>

        <section id="">
            <div class="middle">
                <div class="content">
                    <div class="two-cols text-left contact-section">
                        <div class="middle">
                            <h1>NOUS CONTACTER</h1>
                            <p>Pour toutes vos questions, n'hésitez pas à nous contacter.</p>

                            <div class="hr"></div>
                            <div class="content-head">
                                <div class="cs-icon">
                                    <img src="icon/phone.png"/>
                                </div><br/>
                                <div>
                                   <font class="cs-title">Contact</font>
                                   <br/>
                                   (+225) 27 21 23 07 80
                                </div>
                            </div>
                            <div class="hr"></div>
                            <div class="content-head">
                                <div class="cs-icon">
                                    <img src="icon/mail.png"/>
                                </div><br/>
                                <div>
                                   <font class="cs-title">Email</font>
                                   <br/>
                                   contact@decathlon.ci
                                </div>
                            </div>
                            <div class="hr"></div>
                        </div>
                    </div>
                    <div class="two-cols">
                                              
                        <div class="middle">
                            <img src="img/"/>
                        </div>                            
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<footer>
    <div class="copyright"  >
        <p>&copy; <script>document.write(new Date().getFullYear());</script> - Decathlon Recrutement | Tous droits réservés</p>
    </div>
</footer>

<script>
    function afficher()
    {
        document.getElementById("drop-down").style.display = "block";
    }
    function cacher()
    {
        document.getElementById("drop-down").style.display = "none";
    }
</script>
</html>