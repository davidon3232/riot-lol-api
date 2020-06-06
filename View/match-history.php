<div class="row profile-box-3">
    <div class="main-stat-header">
        <div class="first-stat-header">
            <div class="match-h-header"> 
                <div class="match-h-header-div">
                    <p class="champ-title-style"><?= $stats['winsQtd'].'V' .' '. $stats['loosesQtd'].'D'?></p>
                    <p class="quantity-color">Ultimas <?= count($matches) ?></p>
                </div>
                <div>
                    <p class="quantity-color-3"><?= $stats['totalKda'] ?> KDA</p>
                    <p class="quantity-color"><?= $stats['allKills'] . ' / ' . $stats['allDeaths'] . ' / ' . $stats['allAssists'] ?></p>
                </div>
            </div>
            <div class="champ-stat-header">
            </div>
        </div>
    </div>
    <div class="match-body">
        <div id="match-history" class="padding-children">
            <?php
            foreach ($matches as $match) {
                if ($match['gameDurationMili'] > 399 && $match['gameMode'] != 'ONEFORALL'){  ?>
                    <a class="profile-hiperlink" href="">
                        <div class="profile-match">
                            <?php if ($match['win'] === true) { ?>
                                <div class="profile-match-border win-border"></div>
                            <?php } else { ?>
                                <div class="profile-match-border lose-border"></div>
                            <?php } ?>
                            <div class="profile-match-image" <?= Lib\ImagesPath::getChampSplasArt($match['champName']) ?>>
                            </div>
                            <div class="profile-match-stats">
                                <div class="lolmatch-title">
                                    <?php if ($match['win'] === true) { ?>
                                        <p class="match-stat match-stat-win">Vitória</p>
                                    <?php } else { ?>
                                        <p class="match-stat match-stat-lose">Derrota</p>
                                    <?php } ?>
                                    <p class="match-stat-lose-p">&nbsp;</p>
                                </div>
                                <div class="lolmatch-kda">
                                    <p class="match-stat-kda"><?= $match['ama'] ?> AMA</p>
                                    <p class="match-stat-kda-2"><?= $match['kda'] ?></p>
                                </div>
                                <div class="lolmatch-vision">   
                                    <p data-tip="Placar de Visão/Min" data-delay-show="500" class="match-stat-vision"><?= $match['visaoPerMinute'] ?> Vis/min.</p>
                                    <p class="match-stat-vision-substat"><?= $match['pa'] ?> % PA</p>
                                </div>
                                <div class="lolmatch-cs">
                                    <p class="match-stat-cs"><?= $match['csPerMinute'] ?> CS/min.</p>
                                    <p class="match-stat-total-cs"><?= $match['csTotal'] ?> CS</p>
                                </div>
                                <div class="lolmatch-dmg">
                                    <p class="match-stat-damage"><?= $match['damagePerMinute'] ?> Dano/min.</p>
                                    <p class="match-stat-team-damage"><?= $match['damageByTeam'] ?>% da equipe</p>
                                </div>
                                <div class="lolmatch-details">
                                    <p class="match-stat-time"><?= $match['gameDuration'] ?></p>
                                    <p class="match-stat-queue"><?= $match['gameMode'] ?></p>
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