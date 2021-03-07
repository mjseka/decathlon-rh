<?php
require_once('data/dbconnect.php');

if(isset($_POST['send']))
{
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $sport = htmlspecialchars($_POST['sport']);
    $job = htmlspecialchars($_POST['job']);
    $cv = $_FILES['cv'];

    if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['job']) AND !empty($_POST['sport']) AND !empty($_FILES['cv']))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $target_dir = "cv/";
            $upname = date('His').'_'.$_FILES['cv']['name'];
            $target_file = $target_dir . basename($upname);
            $typeOfCv = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
            if($typeOfCv == 'pdf')
            {                
                if(move_uploaded_file($_FILES['cv']['tmp_name'], $target_file))
                {
                    $insertcv = $db->prepare("INSERT INTO postulant(name, email, job, sport, cv, period) VALUES (:name, :email, :job, :sport, :cv, NOW())");
                    $insertcv->execute(array('name' => $name, 'email' => $email, 'job' => $job, 'sport' => $sport, 'cv' => $_FILES['cv']['name']));

                    echo'<script type="text/javascript">alert("Votre candidature a bien été envoyée.");</script>';

                    /*$header = "MIME-Version: 1.0";
                    $header .= 'From:"decathlon-recrutement.ci"<recrutement@decathlon.com>'."\n";
                    $header .= 'Content-Type:text/plain; charset="utf-8"'."\n";
                    $header .= 'Content-Transfer-Encoding: 8bit';

                    $message = "<br/><p>Monsieur, Madame, </p><p>Nous vous confirmons que votre candidature a bien été réceptionnée, et nous nous attelons à l'examiner très attentivement.<br/>
                        Nous vous reviendrons sous peu, afin de vous tenir informé de la suite du processus de recrutement, dans le cas ou votre candidature serait retenue</p>";

                    if(mail($_POST['email'], 'REPONSE CANDIDATURE - DECATHLON RECRUTEMENT', $message, $header))
                    {
                        echo'<script type="text/javascript">alert("Votre candidature a bien été envoyée.");</script>';
                    }
                    */
                }
                else
                {
                    echo '<script type="text/javascript">alert("Erreur!");</script>';
                }
            }
            else
            {
                echo '<script type="text/javascript">alert("Format PDF uniquement !");</script>';
            }            
        } 
        else
        {
            echo'<script type="text/javascript">alert("Adresse mail non valide !");</script>';
        }          
    }
    else
    {
        echo '<script type="text/javascript">alert("Remplissez tous les champs");</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Recrutement Decathlon | Postuler</title>
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
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="send-cv.php" class="active">Postuler</a></li>
                </ul>
            </div>
            <div id="drop" onmouseover="afficher();" onmouseout="cacher();">
                <img src="img/menu.png" alt="menu"/>
                <div id="drop-down">
                    <div class="middle div-drop">
                        <ul>
                            <div class="hr"></div>
                            <li><a href="index.php" >Accueil</a></li>
                            <div class="hr"></div>
                            <li><a href="send-cv" class="active">Postuler</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="breadcrumb">
            <span class="bdc-text">Postuler</span>
            
    </div>

    <main>
        
        <section>
            <form method="POST" action="" class="form-cv" enctype="multipart/form-data">    
                                   
                <label>Nom et Prénoms</label>
                <input type="text" name="name" class="inp-name" required="required"/>

                <label>Email</label>
                <input type="email" name="email" required="required"/>

                <label>Sport passion</label>
                <input type="text" name="sport" required="required"/>

                <label>Métier</label>
                <select name="job" onchange="if(this.options[this.selectedIndex].value=='customOption'){toggleField(this,this.nextSibling);this.selectedIndex='0';}" required="required" value="<?php if(isset($job)) {echo $job;} ?>">
                    <option>-</option>
                    <option>Communication</option>
                    <option>Finance</option>
                    <option>Informatique</option>
                    <option>Logistique</option>
                    <option>Magasin</option>
                    <option value="customOption">[Autre secteur]</option>
                </select>
                <input placeholder="Veuillez préciser le secteur" name="job" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}" required="required"/>

                <label>Joindre le CV <b style="font-weight: bold; color: #ff1100;">(PDF*)</b></label>
                <input type="file" name="cv" id="contact" required="required"/><br/>
               <br/>
                <button type="submit" name="send" class="button">ENVOYER</button>
            </form>
                        </div>
                    </div>
                </div>
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