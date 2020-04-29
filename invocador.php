<?php
include('inc/header.php');
$summonerObj = new Summoner();
$summoner = $summonerObj->getSummonerByName();

$leagueObj = new Leagues();
$league = $leagueObj->getLeagueBySummonerId($summoner['id']);

//$championsObj = new Champions();
//$champions = $championsObj->getLeagueBySummonerId($summoner['id']);
$matchesObj = new Matches();
$matches = $matchesObj->getMatchesByAccountId($summoner['accountId'], 15, 0);
$allMatchs = array();
foreach ($matches['matches'] as $value) {
    $match = $matchesObj->getMatchByMatchId($value['gameId']);
    array_push($allMatchs, $match);
}
//$matchesObj->getMatchByMatchId($match['gameId']));
//echo"<pre>";print_r($array);
//$match = $matchesObj->getMatchByMatchId($matches['matches']['gameId']);
//$playedTimes = $matchesObj->getPlayedTimesChamps($matches['matches']);
//var_dump($matches['matches']);die;
//echo"<pre>";print_r($league);die;
//Util::searchForId($matches['matches'])
?>
<nav class="navbar bg-dark navbar-dark">
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
                <div class="match-body">
                    <div class="padding-children">
                        <?php
                        foreach ($allMatchs as $match) {
                            if ($match['gameDuration'] > 399) {
                                $key = Util::array_search_id($summoner['id'], $match['participantIdentities']);
                                $allTeam = Util::findAllOfTeam($match['participants'], $match['participants'][$key[1]]['teamId']);
                                $champName = Util::ChIDToName($match['participants'][$key[1]]['championId']);
                                $win = $match['participants'][$key[1]]['stats']['win'];
                                ?>
                                <a class="profile-hiperlink" href="match/<?= $match['participantIdentities'][$key[1]]['player']['summonerName'] ?>/<?= $match['gameId'] ?>">
                                    <div class="profile-match">
                                        <?php if ($win === true) { ?>
                                            <div class="profile-match-border win-border"></div>
                                        <?php } else { ?>
                                            <div class="profile-match-border lose-border"></div>
                                        <?php } ?>
                                        <div class="profile-match-image" <?= ImagesPath::getChampSplasArt($champName) ?>>
                                            <div class="match-icon">
                                                <svg viewBox="0 0 32 32" class="match-svg-icon" fill="white">
                                                <title>role-specialist</title>
                                                <path d="M19.179 13.813h8.333c1.006 0 1.822 0.83 1.822 1.853s-0.816 1.853-1.822 1.853h-8.333l4.445 7.703c0.505 0.876 0.217 2.003-0.644 2.517-0.003 0.002-0.007 0.004-0.010 0.006l-0.008 0.005c-0.867 0.51-1.976 0.213-2.483-0.666l-4.479-7.762-4.479 7.762c-0.507 0.879-1.616 1.176-2.483 0.666l-0.008-0.005c-0.864-0.509-1.159-1.633-0.66-2.513 0.002-0.003 0.004-0.007 0.006-0.010l4.445-7.703h-8.333c-1.006 0-1.822-0.83-1.822-1.853s0.816-1.853 1.822-1.853h8.333l-4.445-7.703c-0.505-0.876-0.217-2.003 0.644-2.517 0.003-0.002 0.007-0.004 0.010-0.006l0.008-0.005c0.867-0.51 1.976-0.213 2.483 0.666l4.479 7.762 4.479-7.762c0.507-0.879 1.616-1.176 2.483-0.666l0.008 0.005c0.864 0.509 1.159 1.633 0.66 2.513-0.002 0.003-0.004 0.007-0.006 0.010l-4.445 7.703z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="profile-match-stats">
                                            <div class="lolmatch-title">
                                                <?php if ($win === true) { ?>
                                                    <p class="match-stat match-stat-win">Vitória</p>
                                                <?php } else { ?>
                                                    <p class="match-stat match-stat-lose">Derrota</p>
                                                <?php } ?>
                                                <p class="match-stat-lose-p">&nbsp;</p>
                                            </div>
                                            <div class="lolmatch-kda">
                                                <p class="match-stat-kda"><?= Util::calcAMA($match['participants'][$key[1]]['stats']['kills'] + $match['participants'][$key[1]]['stats']['assists'], $match['participants'][$key[1]]['stats']['deaths']) ?> AMA</p>
                                                <p class="match-stat-kda-2"><?= $match['participants'][$key[1]]['stats']['kills'] . ' / ' . $match['participants'][$key[1]]['stats']['deaths'] . ' / ' . $match['participants'][$key[1]]['stats']['assists'] ?></p>
                                            </div>
                                            <div class="lolmatch-vision">   
                                                <p data-tip="Placar de Visão/Min" data-delay-show="500" class="match-stat-vision"><?= number_format($match['participants'][$key[1]]['stats']['visionScore'] / ($match['gameDuration'] / 60), 2, ':', ' ') ?> Vis/min.</p>
                                                <p class="match-stat-vision-substat"><?= Util::porcentagem($match['participants'][$key[1]]['stats']['kills'] + $match['participants'][$key[1]]['stats']['assists'], $allTeam['totalKills']) ?> % PA</p>
                                            </div>
                                            <div class="lolmatch-cs">
                                                <p class="match-stat-cs"><?= number_format(($match['participants'][$key[1]]['stats']['totalMinionsKilled'] + $match['participants'][$key[1]]['stats']['neutralMinionsKilled']) / ($match['gameDuration'] / 60), 1, '.', ' ') ?> CS/min.</p>
                                                <p class="match-stat-total-cs"><?= $match['participants'][$key[1]]['stats']['totalMinionsKilled'] + $match['participants'][$key[1]]['stats']['neutralMinionsKilled'] ?> CS</p>
                                            </div>
                                            <div class="lolmatch-dmg">
                                                <p class="match-stat-damage"><?= number_format($match['participants'][$key[1]]['stats']['totalDamageDealtToChampions'] / ($match['gameDuration'] / 60), 0, '.', ' ') ?> Dano/min.</p>
                                                <p class="match-stat-team-damage"><?= Util::porcentagem($match['participants'][$key[1]]['stats']['totalDamageDealtToChampions'], $allTeam['totalDamageToChamps']) ?>% da equipe</p>
                                            </div>
                                            <div class="lolmatch-details">
                                                <p class="match-stat-time"><?= number_format($match['gameDuration'] / 60, 2, ':', ' ') ?></p>
                                                <p class="match-stat-queue"><?= Util::getQueueType($match['queueId']) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php }
                        }
                        ?>
                    </div>
                    <button class="load-more">
                        <p class="">Carregar mais</p>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('inc/footer.php') ?>
