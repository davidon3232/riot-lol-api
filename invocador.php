<?php
include('inc/header.php');

$summonerObj = new Summoner();
$leagueObj = new Leagues();
$matchesObj = new Matches();

//$championsObj = new Champions();
//$champions = $championsObj->getLeagueBySummonerId($summoner['id']);

//$matchesObj->getMatchByMatchId($match['gameId']));
//echo"<pre>";print_r($array);
//$match = $matchesObj->getMatchByMatchId($matches['matches']['gameId']);

//var_dump($matches['matches']);die;
//echo"<pre>";print_r($league);die;
//Util::searchForId($matches['matches'])
?>
<nav class="navbar bg-dark navbar-dark">
    <img class="logo" src="images/logo.png">
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
<?php $summoner = $summonerObj->getSummonerByName(); ?>
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
                <?php
                $league = $leagueObj->getLeagueBySummonerId($summoner['id']);
                if ($league) {
                    foreach ($league as $value) {
                        $title = '';
                        if ($value['queueType'] === 'RANKED_SOLO_5x5') {
                            $title = 'Reanqueada Solo/Duo';
                        } else {
                            $title = 'Reanqueada Flex';
                        }
                        ?>
                        <span class="rank-title"><?= $title ?></span>
                        <div class="row">
                            <div class="profile-icon-div">
                                <div class="profile-icon-second">
                                    <img class="profile-icon" src="<?= ImagesPath::getTierRankPath($value['rank'], $value['tier']) ?>">
                                </div>
                            </div>
                            <div class="profile-tier-primary">
                                <?php
                                $tier = '';
                                if (!in_array($value['tier'], array('CHALLENGER', 'GRANDMASTER', 'MASTER'))) {
                                    $tier = Util::transformRomanToNumber($value['rank']);
                                }
                                ?>
                                <h1><?= $value['tier'] . ' ' . $tier ?></h1>
                                <p><?= $value['leaguePoints'] ?> PDL <?= $value['wins'] . 'V / ' . $value['losses'] . 'D ' ?></p>
                                <p>Taxa de vitoria: <?= Util::porcentagem($value['wins'], $value['wins'] + $value['losses']) ?>%</p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="row">
                        <div class="profile-icon-div">
                            <div class="profile-icon-second">
                                <img class="profile-icon" src="images/ranks/default.png">
                            </div>
                        </div>
                        <div class="profile-tier-primary unranked">
                            <h1>Unranked</h1>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="profile-box-2">
                    <span class="champs-play-title">Temporada 2020 Dados de campeões <i class="fa fa-angle-right"></i></span>
                </div>
                <ol class="champ-played-ol">
                  
                </ol>
                <div class="show-more-button-div">
                    <a class="show-more-button">Mostrar Mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php include('inc/summoner/match-history.php') ?>
        </div>
    </div>
</div>
<?php include('inc/footer.php') ?>
