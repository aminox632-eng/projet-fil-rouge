<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>playmate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <img src="image/im1.png" alt="#">
        <span style="color: #1A2B4C;">PlayMate</span>
        <div>
            <h5><a href="#">Activités</a></h5>
            <h5><a href="#">Créer une activité</a></h5>
            <h5><a href="#">Messagerie</a></h5>
            <img src="image/profile.png" alt="#" class="profile">
        </div>
    </nav>
    <input type="text" placeholder="   ⌕ search">
    <div class="catégorie">
        <?php foreach ($categories as $cat) : ?>
            <h3><a href="#"><?= $cat ?></a></h3>
        <?php endforeach; ?>
    </div>
    <img src="image/im2.jpg" alt="#" class="im2">
    <div class="txt">
        <h1>Rencontrez du monde et bougez à casablanca !</h1>
    </div>
<div class="end">
    <h2>Activités à venir à casablanca</h2>
    <h6 style="color: gray;">
Activités à la une
<h2>Match the Football</h2>
    </h6>
</div>

<?php foreach ($activites as $act) : ?>
    <?php if ($act['a_la_une']) : ?>
        <div class="im3">
            <img src="<?= $act['image'] ?>" alt="#">
            <main class="txt-end">
                <h2><?= $act['titre'] ?></h2>
                <h4><?= $act['lieu'] ?></h6>
                <h4><?= $act['heure'] ?></h6>
                <h5><?= $act['participants'] ?></h5>
            </main>
        </div>
        <img src="<?= $act['users_img'] ?>" alt="#" class="users">
        <h4 class="qut"><?= $act['plus'] ?></h4>
        <a href="#" class="last-link">Rejondre l'activité</a>
    <?php else : ?>
        <div>
            <img src="<?= $act['image'] ?>" alt="#" class="<?= $act['img_class'] ?>">
            <div class="<?= $act['txt_class'] ?>">
                <h2><?= $act['titre'] ?></h2>
                <h4><?= $act['lieu'] ?></h6>
                <h4><?= $act['heure'] ?></h6>
                <h5><?= $act['participants'] ?></h5>
                <img src="<?= $act['users_img'] ?>" alt="#" class="<?= $act['us_class'] ?>">
                <h4 class="<?= $act['qut_class'] ?>"><?= $act['plus'] ?></h4>
                <a href="#" class="<?= $act['link_class'] ?>">Rejondre l'activité</a>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

     <div class="pages">
        <h5>1 </h5><p>...</p>
        <a href="#" style="color: orange;">Next</a>
     </div>    
     <a href="#" class="act">Crée un Activité</a>
     <div class="vl">
                <h4 style="color: orange;">choisir la ville :</h4>

        <select name="choiser la ville" class="ville">
        <?php foreach ($villes as $ville) : ?>
            <option><?= $ville ?></option>
        <?php endforeach; ?>
     </select>
    </div>
    <h4 class="ax"><a href="#">done</a></h4>
     <img src="image/footer.jpg" alt="#" class="footer">
</body>
</html>
