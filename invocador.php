<?php
include('inc/header.php');
$summonerObj = new Summoner();
$summoner = $summonerObj->getSummonerByName();

$leagueObj = new Leagues();
$league = $leagueObj->getLeagueBySummonerId($summoner['id']);
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <img class="logo" src="http://localhost/riot-lol-api/images/logo.png">
    <form class="form-top form-search" method="POST">
        <div class="form-top-div">
            <input type="text" name="keyword" placeholder="Buscar Invocador"  class="input-search">
            <div class="region">
                <p>BR</p>
            </div>
            <button class="btn-search btn-btn" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</nav>
<div class="container container-topo">
    <div class="row">
        <div class="col-md-4">
            <div class="row profile-box">
                <div class="profile-icon-div">
                    <div class="profile-icon-second">
                        <img class="profile-icon" src="<?= ImagesPath::getIconImagePath($summoner['profileIconId']) ?>">
                    </div>
                    <div class="profile-level-div">
                        <p><?= $summoner['summonerLevel'] ?></p>
                    </div>
                </div>
                <div class="profile-level-second">
                    <h1><?= $summoner['name'] ?></h1>
                    <p>Última Atualização: há 2 horas</p>
                </div>
            </div>
            <div class="row profile-box">
                <div class="profile-icon-div">
                    <div class="profile-icon-second">
                        <img class="profile-icon" src="<?= ImagesPath::getIconImagePath($summoner['profileIconId']) ?>">
                    </div>
                    <div class="profile-level-div">
                        <p><?= $summoner['summonerLevel'] ?></p>
                    </div>
                </div>
                <div class="profile-level-second">
                    <h1><?= $summoner['name'] ?></h1>
                    <p>Última Atualização: há 2 horas</p>
                </div>
            </div>  
        </div>

      
    </div>
    <div class="col-md-8">
        SECAO 4
    </div>
</div>
</div>
<?php include('inc/footer.php') ?>
