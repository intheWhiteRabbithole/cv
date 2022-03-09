

<?php
//declarations en php
$title= 'journal de progression';
$dbname = 'articles';
require '../app/db/connectdsn.php';
//requete pour automatiser la connection à la bonne base de donnees et le bon titre sur l'header



if(isset($_POST['article_titre'],$_POST['article_contenu'])){
    if(!empty($_POST['article_titre'])AND !empty($_POST['article_contenu'])){
        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);
        $ins = $pdo2->prepare('INSERT INTO articles(titre, contenu,date_time_publication)
        VALUES (?,?,NOW())');
        $ins->execute(array($article_titre,$article_contenu));

    } else{
        $erreur='veuillez remplir tous les champs';
    }
}
if (isset($pdo2)){
    echo 'good';
}
require 'header.php';
?>


<h1>Le blog de l'Under_dog</h1>

<h2>Le journal de progression</h2>

<form method="POST">
    <input type="text" name="article_titre" placeholder="titre">
    <textarea name="article_contenu" placeholder="contenu de l'article"></textarea>
    <input type="submit" value="envoyer l'article">
</form>
<br/>
<?php require 'footer.php';?>
<?php  if (isset($erreur)){
    echo $erreur;
}
?>



