<?php $this->layout('template'); ?>
<nav class="navbar bg-dark navbar-dark">
    <img class="logo" src="view/images/logo.png">
    <form class="form-top form-search" method="POST">
        <div class="form-top-div">
            <input type="text" name="keyword" placeholder="Buscar Invocador" class="input-search">
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
                        <img class="profile-icon" src="<?= Lib\ImagesPath::getIconImagePath($summoner['profileIconId']) ?>">
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
                //$league = $leagueObj->getLeagueBySummonerId($summoner['id']);
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
                                    <img class="profile-icon" src="<?= Lib\ImagesPath::getTierRankPath($value['rank'], $value['tier']) ?>">
                                </div>
                            </div>
                            <div class="profile-tier-primary">
                                <?php
                                $tier = '';
                                if (!in_array($value['tier'], array('CHALLENGER', 'GRANDMASTER', 'MASTER'))) {
                                    $tier = Lib\Util::transformRomanToNumber($value['rank']);
                                }
                                ?>
                                <h1><?= $value['tier'] . ' ' . $tier ?></h1>
                                <p><?= $value['leaguePoints'] ?> PDL <?= $value['wins'] . 'V / ' . $value['losses'] . 'D ' ?></p>
                                <p>Taxa de vitoria: <?= Lib\Util::porcentagem($value['wins'], $value['wins'] + $value['losses']) ?>%</p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="row">
                        <div class="profile-icon-div">
                            <div class="profile-icon-second">
                                <img class="profile-icon" src="view/images/ranks/default.png">
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
            <?php $this->insert('match-history',[
                'summoner' => $summoner,
                'matches' => $matches,
                'stats' => $stats
            ]) ?>
        </div>
    </div>
</div>