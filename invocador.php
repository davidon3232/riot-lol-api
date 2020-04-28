<?php
include('inc/header.php');
$summonerObj = new Summoner();
$summoner = $summonerObj->getSummonerByName();

$leagueObj = new Leagues();
$league = $leagueObj->getLeagueBySummonerId($summoner['id']);

$championsObj = new Champions();
$champions = $championsObj->getLeagueBySummonerId($summoner['id']);

$matchesObj = new Matches();
$matches = $matchesObj->getMatchesByAccountId($summoner['accountId']);
$match = $matchesObj->getMatchByMatchId($matches['matches'][0]['gameId']);
$playedTimes = $matchesObj->getPlayedTimesChamps($matches['matches']);
//echo"<pre>";print_r($league);die;
//Util::searchForId($matches['matches'])
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
                <?php
                if ($league) {
                    ?>
                    <span class="rank-title">Reanqueada Solo/Duo</span>
                    <div class="row">
                        <div class="profile-icon-div">
                            <div class="profile-icon-second">
                                <img class="profile-icon" src="<?= ImagesPath::getTerRankPath($league[1]) ?>">
                            </div>
                        </div>
                        <div class="profile-tier-primary">
                            <h1><?= $league[1]['tier'] . ' ' . Util::transformRomanToNumber($league[1]); ?></h1>
                            <p><?= $league[1]['leaguePoints'] ?> PDL <?= $league[1]['wins'] . 'V / ' . $league[1]['losses'] . 'D ' ?></p>
                            <p>Taxa de vitoria: <?= Util::porcentagem($league[1]['wins'], $league[1]['wins'] + $league[1]['losses']) ?>%</p>
                        </div>
                    </div>
                    <span class="rank-title">Reanqueada Flex</span>
                    <div class="row">
                        <div class="profile-icon-div">
                            <div class="profile-icon-second">
                                <img class="profile-icon" src="<?= ImagesPath::getTerRankPath($league[0]) ?>">
                            </div>
                        </div>
                        <div class="profile-tier-primary">
                            <h1><?= $league[0]['tier'] . ' ' . Util::transformRomanToNumber($league[0]); ?></h1>
                            <p><?= $league[0]['leaguePoints'] ?> PDL <?= $league[0]['wins'] . 'V / ' . $league[0]['losses'] . 'D ' ?></p>
                            <p>Taxa de vitoria: <?= Util::porcentagem($league[0]['wins'], $league[0]['wins'] + $league[0]['losses']) ?>%</p>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="profile-icon-div">
                            <div class="profile-icon-second">
                                <img class="profile-icon" src="<?= BASE ?>/images/ranks/default.png">
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
                    <li>
                        <a class="champ-link" href="/lol/profile/br1/TiaguinhoClash/champions?champion=Qiyana&amp;queue=420">
                            <div class="row">
                                <div class="champ-img-div">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/Qiyana.png" alt="Qiyana" loading="lazy">
                                </div>
                                <div class="champ-div-style">
                                    <p class="champ-title-style">Qiyana</p>
                                    <p class="quantity-color">100 Partidas</p>
                                </div>
                                <div class="champ-div-style _2">
                                    <p class="quantity-color">62.0% Taxa de Vitória</p>
                                    <p class="quantity-color-2" style="color: rgb(196, 168, 137);">2.70&nbsp;<span>AMA</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="champ-link" href="/lol/profile/br1/TiaguinhoClash/champions?champion=Qiyana&amp;queue=420">
                            <div class="row">
                                <div class="champ-img-div">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/Qiyana.png" alt="Qiyana" loading="lazy">
                                </div>
                                <div class="champ-div-style">
                                    <p class="champ-title-style">Qiyana</p>
                                    <p class="quantity-color">100 Partidas</p>
                                </div>
                                <div class="champ-div-style _2">
                                    <p class="quantity-color">62.0% Taxa de Vitória</p>
                                    <p class="quantity-color-2" style="color: rgb(196, 168, 137);">2.70&nbsp;<span>AMA</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ol>
                <div class="show-more-button-div">
                    <a class="show-more-button">Mostrar Mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row profile-box-3">
                <div class="main-stat-header">
                    <div class="first-stat-header">
                        <div class="match-h-header">
                            <div class="match-h-header-div">
                                <p class="champ-title-style">20V 23D</p>
                                <p class="quantity-color">Últimos 14</p>
                            </div>
                            <div>
                                <p class="quantity-color-3">2,79 KDA</p>
                                <p class="quantity-color">8,1 / 6,1 / 8,8</p>
                            </div>
                        </div>
                        <div class="champ-stat-header">
                            <div class="champ-stat-div-h">
                                <div class="champ-img-div margin-bottom-right">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/Karthus.png" alt="Karthus" loading="lazy">
                                </div>
                                <div>
                                    <div class="top-stat">
                                        <p class="top-stat-porcent" style="color: rgb(73, 180, 255);">57%</p>
                                        <p class="top-stat-wl">13W - 10L</p>
                                    </div>
                                    <p class="champion-kda typography__Caption-sc-1mpsx83-11 kNXypM" style="color: rgb(196, 168, 137);">3,25 KDA</p>
                                </div>
                            </div>
                            <div class="champ-stat-div-h">
                                <div class="champ-img-div margin-bottom-right">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/Karthus.png" alt="Karthus" loading="lazy">
                                </div>
                                <div>
                                    <div class="top-stat">
                                        <p class="top-stat-porcent" style="color: rgb(73, 180, 255);">57%</p>
                                        <p class="top-stat-wl">13W - 10L</p>
                                    </div>
                                    <p class="champion-kda typography__Caption-sc-1mpsx83-11 kNXypM" style="color: rgb(196, 168, 137);">3,25 KDA</p>
                                </div>
                            </div>
                            <div class="champ-stat-div-h">
                                <div class="champ-img-div margin-bottom-right">
                                    <img src="https://ddragon.leagueoflegends.com/cdn/10.8.1/img/champion/Karthus.png" alt="Karthus" loading="lazy">
                                </div>
                                <div>
                                    <div class="top-stat">
                                        <p class="top-stat-porcent" style="color: rgb(73, 180, 255);">57%</p>
                                        <p class="top-stat-wl">13W - 10L</p>
                                    </div>
                                    <p class="champion-kda typography__Caption-sc-1mpsx83-11 kNXypM" style="color: rgb(196, 168, 137);">3,25 KDA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('inc/footer.php') ?>
