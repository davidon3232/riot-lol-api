<?php 

include('inc/header.php'); 

$urlAmigavel = new UrlAmigavel();
$matchId = $urlAmigavel->getParameter(3);

$matchesObj = new Matches();
$match = $matchesObj->getOneMatchByMatchId($matchId);
$key = Util::array_search_id($urlAmigavel->getParameter(2), $match['participantIdentities']);

$allyTeam = $match['participants'][$key]['teamId'] == 100 ? 0 : 1;
$enemyTeam = $match['participants'][$key]['teamId'] == 100 ? 1 : 0;
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
<div class="container container-topo">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="top-match limite-site">
                <div class="top-match-subdiv">
                    <div class="match-container">
                        <div class="match-subcontainer">
                            <div class="match-detail-tab">
                                <div data-role="tab-parent" class="match-tab-1">
                                    <div class="parent-tab">
                                        <div class="reveal-underline-from-center match-tab-inside">
                                            <div class="tab-title">Visão Geral</div>
                                        </div>
                                    </div>
                                    <div class="parent-tab">
                                        <div class="reveal-underline-from-center match-tab-inside">
                                            <div class="tab-title">Detalhes avançados</div>
                                        </div>
                                    </div>
                                    <div class="parent-tab">
                                        <div class="reveal-underline-from-center match-tab-inside">
                                            <div class="tab-title">Gráfico de ouro</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bans-div">
                                    <div class="bans-subdiv">
                                        <?php 
                                        foreach($match['teams'][$allyTeam]['bans'] as $ban){  
                                        if($ban['championId'] != -1){ 
                                        $champName = Util::ChIDToName($ban['championId']);
                                        ?>
                                        <div class="bans-champions-div">
                                            <div class="match-sub-sub">
                                                <img class="blue-team-img" src="<?= ImagesPath::getChampIconPath($champName) ?>" alt="<?= $champName ?>">
                                            </div>
                                        </div>
                                        <?php }} ?>
                                    </div>
                                    <div class="ban-text">Bans</div>
                                    <div class="bans-subdiv">
                                        <?php 
                                        foreach($match['teams'][$enemyTeam]['bans'] as $ban){  
                                        if($ban['championId'] != -1){ 
                                        $champName = Util::ChIDToName($ban['championId']);
                                        ?>
                                        <div class="bans-champions-div">
                                            <div class="match-sub-sub">
                                                <img class="red-team-img" src="<?= ImagesPath::getChampIconPath($champName) ?>" alt="<?= $champName ?>">
                                            </div>
                                        </div>  
                                        <?php }} ?>         
                                    </div>
                                </div>
                            </div>
                            <div class="match-detail-body">
                                <div class="match-detail-subdiv">
                                    <div class="division-match"></div>
                                    <div class="match-detail-collum">
                                        <div class="match-detail-view">
                                            <div class="match-detail-view-2">
                                                <div class="match-title-team-1">
                                                    <span>Equipe 1</span>
                                                </div> 
                                                <?php 
                                                $statsAlly = Util::findAllOfTeam($match['participants'],$match['teams'][$allyTeam]['teamId']);
                                                ?>
                                                <div class="match-align" style="align-items: center;">
                                                    <div class="title-match-obj"><?= $statsAlly['totalKills'] . '/ <span>'.$statsAlly['totalDeaths'].'</span> /'. $statsAlly['totalAssists'] ?></div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-turret</title>
                                                    <path d="M16 19.667l9.333-9h-3.333l1.667-1.833-7.667-7.5-7.667 7.5 1.667 1.833h-3.333l9.333 9zM16 4.333l4.167 4.333-4.167 4.167-4.167-4.167 4.167-4.333zM9.333 15.667l3.333 15h6.667l3.333-15-6.689 6.485-6.644-6.485z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$allyTeam]['towerKills'] ?></div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-inhibitor</title>
                                                    <path d="M16 1.333c-8.1 0-14.667 6.567-14.667 14.667s6.567 14.667 14.667 14.667c8.1 0 14.667-6.567 14.667-14.667-0.017-8.1-6.567-14.65-14.667-14.667zM16 27c-6.083 0-11-4.917-11-11s4.917-11 11-11c6.083 0 11 4.917 11 11 0 6.067-4.933 11-11 11zM16 22.667l-6.667-6.667 6.667-6.667 6.667 6.667-6.667 6.667z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$allyTeam]['inhibitorKills'] ?></div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-baron</title>
                                                    <path d="M17.333 1.333l4.867 9-1.2 1.667h-2.417l-2.583-3.333-2.55 3.333h-2.45l-1.183-1.667 4.85-9-13.333 8 4.667 8c0 8.75 6.833 13.167 6.833 13.167v-4h6.5v4c0 0 6.667-4.417 6.667-13.167l4.667-8-13.333-8zM17.767 14.683c0.3 0.733 0.133 1.567-0.417 2.133s-1.367 0.733-2.083 0.417c-0.717-0.317-1.183-1.017-1.183-1.8 0-1.067 0.85-1.95 1.9-1.95 0.783 0 1.483 0.467 1.783 1.2zM10.85 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.933-1.9 1.95-0.8-0.017-1.5-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117zM16 25.133c-1.050 0-1.9-0.867-1.9-1.95 0-1.067 0.85-1.933 1.9-1.933s1.9 0.867 1.9 1.95c0 0.517-0.2 1.017-0.55 1.383s-0.85 0.567-1.35 0.567v-0.017zM18.467 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.95-1.9 1.95-0.8-0.017-1.483-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$allyTeam]['baronKills'] ?></div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-riftHerald</title>
                                                    <path d="M25 19.333c0.003 0.075 0.001 0.146-0.001 0.218v0c-0.002 0.090-0.005 0.182 0.001 0.282 0 2.755-3.224 5.308-5.833 7.167-0.951 0.608-2.016 0.85-3.167 0.833-1.090-0.016-2.266-0.258-3.167-0.833-2.609-1.859-5.833-4.412-5.833-7.167v-0.5l-3.667-1.833c0-6.518 7.167-14.167 7.167-14.167v7.472c1.513-1.178 3.58-1.902 5.5-1.972s3.487 0.794 5 1.972v-7.472c0 0 7.667 7.649 7.667 14.167l-3.667 1.833zM17.523 23.387c1.684-1.111 4.171-3.037 4.143-4.704 0-6.578-5.652-6.517-5.652-6.517s-5.681-0.062-5.681 6.517c0 1.667 2.476 3.581 4.171 4.704 0.917 0.595 2.102 0.595 3.018 0zM5.167 21l-3.833 3.667c1.576 1.787 6 4 6 4-1.742-2.985-2.167-7.667-2.167-7.667zM30.667 24.667c-1.576 1.787-6 4-6 4 1.742-2.985 2.167-7.667 2.167-7.667l3.833 3.667zM18.11 17.33l-1.338-1.919c-0.168-0.256-0.457-0.411-0.767-0.411s-0.599 0.155-0.767 0.411l-1.361 1.919c-0.291 0.417-0.28 0.97 0.028 1.375l1.361 1.754c0.17 0.235 0.446 0.374 0.739 0.374s0.569-0.14 0.739-0.374l1.366-1.754c0.297-0.412 0.297-0.963 0-1.375z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$allyTeam]['riftHeraldKills'] ?></div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-dragon</title>
                                                    <path d="M24.617 10.25v-7.433l-5.8 5.183-3.117-6.667-3.117 6.667-5.783-5.183v7.433h-5.467l6.050 4.95v5.067c0 0.967 0.4 2.217 1.117 2.883l6.35 7.017c0.3 0.317 0.7 0.5 1.15 0.5s0.85-0.183 1.15-0.5l6.367-7.017c0.717-0.667 1.117-1.9 1.117-2.883v-5.067l6.033-4.95h-6.050zM13.9 19.917c-3.767 0.9-4.9-6.25-4.9-6.25 6.9 3.917 4.9 6.25 4.9 6.25zM17.983 19.917c0 0-1.483-2.7 5.017-6.417 0 0-1.133 7.333-5.017 6.417z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$allyTeam]['dragonKills'] ?></div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-gold</title>
                                                    <path d="M18.5 4.050c6.4-0.483 11.85 2.617 12.15 6.867 0.233 3.117-2.4 6.017-6.35 7.517 0.133 0.383 0.2 0.767 0.233 1.167 0.317 4.25-4.6 7.9-11.033 8.367s-11.833-2.45-12.15-6.7c-0.217-3.117 2.4-6.017 6.35-7.517-0.133-0.383-0.2-0.767-0.233-1.167-0.317-4.25 4.633-8.050 11.033-8.533zM4.5 20.667c-0.283 2 2.967 4.817 8.833 4.333s7.65-2.9 6.767-5.617c-0.053 0.005-0.106 0.012-0.16 0.019-0.115 0.015-0.232 0.031-0.356 0.031-4.183 0.3-7.967-0.933-10.167-3.017-2.433 0.5-4.617 2.183-4.917 4.25z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= number_format($statsAlly['totalTeamGold']) ?> k</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="match-pl">
                                        <?php 
                                        $allAllyTeam = Util::getTeamArray($match['participants'],$match['teams'][$allyTeam]['teamId']);
                                        foreach($allAllyTeam as $index => $value){
                                        $champName = Util::ChIDToName($value['championId']);
                                        ?>
                                            <a order="0" class="table-order-2" href="invocador/<?= $match['participantIdentities'][$value['participantId'] - 1]['player']['summonerName'] ?>">
                                                <div id="detail-match" class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Renekton">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub">
                                                                <?php 
                                                                $spell1 = Util::getSummonerSpellsName($value['spell1Id']);
                                                                $spell2 = Util::getSummonerSpellsName($value['spell2Id']);
                                                                ?>
                                                                <img class="match-detail-champ-img" src="<?= ImagesPath::getChampIconPath($champName) ?>" alt="Renekton" currentitem="false">
                                                            </div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number"><?= $value['stats']['champLevel'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells">
                                                        <?php 
                                                        $json = file_get_contents('http://ddragon.leagueoflegends.com/cdn/10.9.1/data/pt_BR/summoner.json');
                                                        $json = json_decode($json,true);
                                                        ?>
                                                        <img data-toggle="tooltip" data-placement="top" title="<p class='p-tooltip'><?= $json['data'][$spell1]['description'] ?></p>" src="<?= ImagesPath::getSummonerSpell($spell1) ?>" alt="<?= $spell1 ?>">
                                                        <img data-toggle="tooltip" data-placement="top" title="<?= $json['data'][$spell2]['description'] ?>" src="<?= ImagesPath::getSummonerSpell($spell2) ?>" alt="<?= $spell2 ?>">  
                                                    </div>
                                                    <?php $parkDir = Util::getParksDir($value['stats']['perk0'])?>
                                                    <div class="player-spells">
                                                        <img src="<?= ImagesPath::getRunesImg($parkDir, $value['stats']['perk0'])?>" size="24" currentitem="false">
                                                        <?php if(array_key_exists('perkSubStyle',$value['stats'])){ ?>
                                                        <img class="sub-rune" src="<?= ImagesPath::getSubRunesImg($value['stats']['perkSubStyle'])?>" size="24" currentitem="false">
                                                        <?php } ?>
                                                    </div>
                                                    <div href="/lol/profile/br1/XzDemonzX">
                                                        <div class="match-detail-summoner-name"><?= $match['participantIdentities'][$value['participantId'] - 1]['player']['summonerName'] ?></div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-platinum</title>
                                                        <path fill="#4e9996" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">P1</span></div>
                                                    <div class="match-detail-items">
                                                        <?php for($i = 0; $i <= 6; $i++){ 
                                                            if($value['stats']['item'.$i.''] != 0){
                                                        ?>
                                                        <img src="<?= ImagesPath::getItemsImg($value['stats']['item'.$i.'']) ?>" alt="" currentitem="false">
                                                        <?php }else{ ?>
                                                            <div class="empty-item"></div>
                                                        <?php }} ?>
                                                   </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda"><?= $value['stats']['kills'] . ' / ' . $value['stats']['deaths'] . ' / ' . $value['stats']['assists'] ?></div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color"><?= Util::calcAMA($value['stats']['kills'] + $value['stats']['assists'], $value['stats']['deaths']) ?><span class="sc-hzNEM itdjdj"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda"><?= $value['stats']['totalMinionsKilled'] + $value['stats']['neutralMinionsKilled'] ?><span>(<?= number_format(($value['stats']['totalMinionsKilled'] + $value['stats']['neutralMinionsKilled']) / ($match['gameDuration'] / 60), 1, '.', ' ') ?>)</span><span>CS</span></div>
                                                        <div class="match-pa-text"><?= Util::porcentagem($value['stats']['kills'] + $value['stats']['assists'], $statsAlly['totalKills']) ?>% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda"><?= number_format($value['stats']['totalDamageDealtToChampions']) ?></div>
                                                        <div class="match-detail-bar-div ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="division-match"></div>
                                    <div class="match-detail-collum">
                                        <div class="match-detail-view">
                                            <div class="match-detail-view-2">
                                                <div class="match-title-team-2">
                                                    <span>Equipe 1</span>
                                                </div> 
                                                <?php 
                                                $statsEnemy = Util::findAllOfTeam($match['participants'],$match['teams'][$enemyTeam]['teamId']);
                                                ?>
                                                <div class="match-align" style="align-items: center;">
                                                    <div class="title-match-obj"><?= $statsEnemy['totalKills'] . '/ <span>'.$statsEnemy['totalDeaths'].'</span> /'. $statsEnemy['totalAssists'] ?></div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-turret</title>
                                                    <path d="M16 19.667l9.333-9h-3.333l1.667-1.833-7.667-7.5-7.667 7.5 1.667 1.833h-3.333l9.333 9zM16 4.333l4.167 4.333-4.167 4.167-4.167-4.167 4.167-4.333zM9.333 15.667l3.333 15h6.667l3.333-15-6.689 6.485-6.644-6.485z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$enemyTeam]['towerKills'] ?></div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-inhibitor</title>
                                                    <path d="M16 1.333c-8.1 0-14.667 6.567-14.667 14.667s6.567 14.667 14.667 14.667c8.1 0 14.667-6.567 14.667-14.667-0.017-8.1-6.567-14.65-14.667-14.667zM16 27c-6.083 0-11-4.917-11-11s4.917-11 11-11c6.083 0 11 4.917 11 11 0 6.067-4.933 11-11 11zM16 22.667l-6.667-6.667 6.667-6.667 6.667 6.667-6.667 6.667z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$enemyTeam]['inhibitorKills'] ?></div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-baron</title>
                                                    <path d="M17.333 1.333l4.867 9-1.2 1.667h-2.417l-2.583-3.333-2.55 3.333h-2.45l-1.183-1.667 4.85-9-13.333 8 4.667 8c0 8.75 6.833 13.167 6.833 13.167v-4h6.5v4c0 0 6.667-4.417 6.667-13.167l4.667-8-13.333-8zM17.767 14.683c0.3 0.733 0.133 1.567-0.417 2.133s-1.367 0.733-2.083 0.417c-0.717-0.317-1.183-1.017-1.183-1.8 0-1.067 0.85-1.95 1.9-1.95 0.783 0 1.483 0.467 1.783 1.2zM10.85 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.933-1.9 1.95-0.8-0.017-1.5-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117zM16 25.133c-1.050 0-1.9-0.867-1.9-1.95 0-1.067 0.85-1.933 1.9-1.933s1.9 0.867 1.9 1.95c0 0.517-0.2 1.017-0.55 1.383s-0.85 0.567-1.35 0.567v-0.017zM18.467 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.95-1.9 1.95-0.8-0.017-1.483-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$enemyTeam]['baronKills'] ?></div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-riftHerald</title>
                                                    <path d="M25 19.333c0.003 0.075 0.001 0.146-0.001 0.218v0c-0.002 0.090-0.005 0.182 0.001 0.282 0 2.755-3.224 5.308-5.833 7.167-0.951 0.608-2.016 0.85-3.167 0.833-1.090-0.016-2.266-0.258-3.167-0.833-2.609-1.859-5.833-4.412-5.833-7.167v-0.5l-3.667-1.833c0-6.518 7.167-14.167 7.167-14.167v7.472c1.513-1.178 3.58-1.902 5.5-1.972s3.487 0.794 5 1.972v-7.472c0 0 7.667 7.649 7.667 14.167l-3.667 1.833zM17.523 23.387c1.684-1.111 4.171-3.037 4.143-4.704 0-6.578-5.652-6.517-5.652-6.517s-5.681-0.062-5.681 6.517c0 1.667 2.476 3.581 4.171 4.704 0.917 0.595 2.102 0.595 3.018 0zM5.167 21l-3.833 3.667c1.576 1.787 6 4 6 4-1.742-2.985-2.167-7.667-2.167-7.667zM30.667 24.667c-1.576 1.787-6 4-6 4 1.742-2.985 2.167-7.667 2.167-7.667l3.833 3.667zM18.11 17.33l-1.338-1.919c-0.168-0.256-0.457-0.411-0.767-0.411s-0.599 0.155-0.767 0.411l-1.361 1.919c-0.291 0.417-0.28 0.97 0.028 1.375l1.361 1.754c0.17 0.235 0.446 0.374 0.739 0.374s0.569-0.14 0.739-0.374l1.366-1.754c0.297-0.412 0.297-0.963 0-1.375z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$enemyTeam]['riftHeraldKills'] ?></div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-dragon</title>
                                                    <path d="M24.617 10.25v-7.433l-5.8 5.183-3.117-6.667-3.117 6.667-5.783-5.183v7.433h-5.467l6.050 4.95v5.067c0 0.967 0.4 2.217 1.117 2.883l6.35 7.017c0.3 0.317 0.7 0.5 1.15 0.5s0.85-0.183 1.15-0.5l6.367-7.017c0.717-0.667 1.117-1.9 1.117-2.883v-5.067l6.033-4.95h-6.050zM13.9 19.917c-3.767 0.9-4.9-6.25-4.9-6.25 6.9 3.917 4.9 6.25 4.9 6.25zM17.983 19.917c0 0-1.483-2.7 5.017-6.417 0 0-1.133 7.333-5.017 6.417z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= $match['teams'][$enemyTeam]['dragonKills'] ?></div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-gold</title>
                                                    <path d="M18.5 4.050c6.4-0.483 11.85 2.617 12.15 6.867 0.233 3.117-2.4 6.017-6.35 7.517 0.133 0.383 0.2 0.767 0.233 1.167 0.317 4.25-4.6 7.9-11.033 8.367s-11.833-2.45-12.15-6.7c-0.217-3.117 2.4-6.017 6.35-7.517-0.133-0.383-0.2-0.767-0.233-1.167-0.317-4.25 4.633-8.050 11.033-8.533zM4.5 20.667c-0.283 2 2.967 4.817 8.833 4.333s7.65-2.9 6.767-5.617c-0.053 0.005-0.106 0.012-0.16 0.019-0.115 0.015-0.232 0.031-0.356 0.031-4.183 0.3-7.967-0.933-10.167-3.017-2.433 0.5-4.617 2.183-4.917 4.25z"></path>
                                                    </svg>
                                                    <div class="title-match-obj"><?= number_format($statsEnemy['totalTeamGold']) ?> k</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="match-pl">
                                        <?php 
                                        $allEnemyTeam = Util::getTeamArray($match['participants'],$match['teams'][$enemyTeam]['teamId']);
                                        foreach($allEnemyTeam as $index => $value){
                                        $champName = Util::ChIDToName($value['championId']);
                                        ?>
                                            <a order="0" class="table-order-2" href="invocador/<?= $match['participantIdentities'][$value['participantId'] - 1]['player']['summonerName'] ?>">
                                                <div id="detail-match-enemy" class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Renekton">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub">
                                                                <?php 
                                                                $spell1 = Util::getSummonerSpellsName($value['spell1Id']);
                                                                $spell2 = Util::getSummonerSpellsName($value['spell2Id']);
                                                                ?>
                                                                <img class="match-detail-champ-img" src="<?= ImagesPath::getChampIconPath($champName) ?>" alt="<?= $champName ?>">
                                                            </div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number"><?= $value['stats']['champLevel'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells">
                                                        <img src="<?= ImagesPath::getSummonerSpell($spell1) ?>" alt="<?= $spell1 ?>">
                                                        <img src="<?= ImagesPath::getSummonerSpell($spell2) ?>" alt="<?= $spell2 ?>">  
                                                    </div>
                                                    <?php $parkDir = Util::getParksDir($value['stats']['perk0'])?>
                                                    <div class="player-spells">
                                                        <img src="<?= ImagesPath::getRunesImg($parkDir, $value['stats']['perk0'])?>" size="24" currentitem="false">
                                                        <img class="sub-rune" src="<?= ImagesPath::getSubRunesImg($value['stats']['perkSubStyle'])?>" size="24" currentitem="false">
                                                    </div>
                                                    <div href="/lol/profile/br1/XzDemonzX">
                                                        <div class="match-detail-summoner-name"><?= $match['participantIdentities'][$value['participantId'] - 1]['player']['summonerName'] ?></div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-platinum</title>
                                                        <path fill="#4e9996" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">P1</span></div>
                                                    <div class="match-detail-items">
                                                        <?php for($i = 0; $i <= 6; $i++){ 
                                                            if($value['stats']['item'.$i.''] != 0){
                                                        ?>
                                                        <img src="<?= ImagesPath::getItemsImg($value['stats']['item'.$i.'']) ?>" alt="" currentitem="false">
                                                        <?php }else{ ?>
                                                            <div class="empty-item"></div>
                                                        <?php }} ?>
                                                   </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda"><?= $value['stats']['kills'] . ' / ' . $value['stats']['deaths'] . ' / ' . $value['stats']['assists'] ?></div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color"><?= Util::calcAMA($value['stats']['kills'] + $value['stats']['assists'], $value['stats']['deaths']) ?><span class="sc-hzNEM itdjdj"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda"><?= $value['stats']['totalMinionsKilled'] + $value['stats']['neutralMinionsKilled'] ?><span>(<?= number_format(($value['stats']['totalMinionsKilled'] + $value['stats']['neutralMinionsKilled']) / ($match['gameDuration'] / 60), 1, '.', ' ') ?>)</span><span>CS</span></div>
                                                        <div class="match-pa-text"><?= Util::porcentagem($value['stats']['kills'] + $value['stats']['assists'], $statsAlly['totalKills']) ?>% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda"><?= number_format($value['stats']['totalDamageDealtToChampions']) ?></div>
                                                        <div class="match-detail-bar-div ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php } ?>
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
</div>
<?php include('inc/footer.php'); ?>
