<div class="row profile-box-3">
    <div class="main-stat-header">
        <div class="first-stat-header">
            <div class="match-h-header">
                <div class="match-h-header-div">
                    <p class="champ-title-style">20V 23D</p>
                    <p class="quantity-color"><?= 'dasd' ?></p>
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
        <div id="match-history" class="padding-children">
            <?php
            $matches = $matchesObj->getMatchesByAccountId($summoner['accountId'], 1, 0);
            $allMatchs = $matchesObj->getMatchByMatchId($matches['matches']);
            foreach ($allMatchs as $match) {
                if ($match['gameDuration'] > 399 && $match['gameMode'] != 'ONEFORALL') {
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
                                    <p data-tip="Placar de Visão/Min" data-delay-show="500" class="match-stat-vision"><?= number_format($match['participants'][$key[1]]['stats']['visionScore'] / ($match['gameDuration'] / 60), 2, '.', ' ') ?> Vis/min.</p>
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
                                    <p class="match-stat-time"><?= gmdate('i:s', $match['gameDuration']) ?></p>
                                    <p class="match-stat-queue"><?= Util::getQueueType($match['queueId']) ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            }
            ?>
        </div>
        <button class="load-more">
            <div class="div-load-more">Carregar mais</div>
        </button>
    </div>
</div>