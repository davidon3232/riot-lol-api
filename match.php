<?php include('inc/header.php'); ?>
<?php
$urlAmigavel = new UrlAmigavel();
$matchId = $urlAmigavel->getParameter(3);

$matchesObj = new Matches();
$match = $matchesObj->getOneMatchByMatchId($matchId);
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
                                        <div class="bans-champions-div">
                                            <div class="match-sub-sub"><img size="16" class="blue-team-img" data-tip="<championname>Fizz</championname> <championwinrate>
                                                                            <span>Meio</span>: 50.8% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Fizz.png" alt="Fizz" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _2">
                                            <div class="match-sub-sub"><img size="16" class="blue-team-img" data-tip="<championname>Morgana</championname> <championwinrate>
                                                                            <span>Suporte</span>: 48.9% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Morgana.png" alt="Morgana" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _3">
                                            <div class="match-sub-sub"><img size="16" class="blue-team-img" data-tip="<championname>Bardo</championname> <championwinrate>
                                                                            <span>Suporte</span>: 52.2% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Bard.png" alt="Bardo" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _4">
                                            <div class="match-sub-sub"><img size="16" class="blue-team-img" data-tip="<championname>Wukong</championname> <championwinrate>
                                                                            <span>Selva</span>: 50.6% Vitórias
                                                                            </championwinrate><championwinrate>
                                                                            <span>Topo</span>: 51.6% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/MonkeyKing.png" alt="Wukong" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _5">
                                            <div class="match-sub-sub"><img size="16" class="blue-team-img" data-tip="<championname>Evelynn</championname> <championwinrate>
                                                                            <span>Selva</span>: 50.3% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Evelynn.png" alt="Evelynn" currentitem="false"></div>
                                        </div>
                                    </div>
                                    <div class="ban-text">Bans</div>
                                    <div class="bans-subdiv">
                                        <div class="bans-champions-div">
                                            <div class="match-sub-sub"><img size="16" class="red-team-img" data-tip="<championname>Yuumi</championname> <championwinrate>
                                                                            <span>Suporte</span>: 49.4% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Yuumi.png" alt="Yuumi" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _2">
                                            <div class="match-sub-sub"><img size="16" class="red-team-img" data-tip="<championname>Gragas</championname> <championwinrate>
                                                                            <span>Selva</span>: 45.1% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Gragas.png" alt="Gragas" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _3">
                                            <div class="match-sub-sub"><img size="16" class="red-team-img" data-tip="<championname>Rengar</championname> <championwinrate>
                                                                            <span>Selva</span>: 51.3% Vitórias
                                                                            </championwinrate><championwinrate>
                                                                            <span>Topo</span>: 52.4% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Rengar.png" alt="Rengar" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _4">
                                            <div class="match-sub-sub"><img size="16" class="red-team-img" data-tip="<championname>Lee Sin</championname> <championwinrate>
                                                                            <span>Selva</span>: 47.9% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/LeeSin.png" alt="Lee Sin" currentitem="false"></div>
                                        </div>
                                        <div class="bans-champions-div _5">
                                            <div class="match-sub-sub"><img size="16" class="red-team-img" data-tip="<championname>Nautilus</championname> <championwinrate>
                                                                            <span>Suporte</span>: 49.8% Vitórias
                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Nautilus.png" alt="Nautilus" currentitem="false"></div>
                                        </div>
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
                                                <div class="match-align" style="align-items: center;">
                                                    <div class="title-match-obj">24 / <span>18</span> / 35</div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-turret</title>
                                                    <path d="M16 19.667l9.333-9h-3.333l1.667-1.833-7.667-7.5-7.667 7.5 1.667 1.833h-3.333l9.333 9zM16 4.333l4.167 4.333-4.167 4.167-4.167-4.167 4.167-4.333zM9.333 15.667l3.333 15h6.667l3.333-15-6.689 6.485-6.644-6.485z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">8</div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-inhibitor</title>
                                                    <path d="M16 1.333c-8.1 0-14.667 6.567-14.667 14.667s6.567 14.667 14.667 14.667c8.1 0 14.667-6.567 14.667-14.667-0.017-8.1-6.567-14.65-14.667-14.667zM16 27c-6.083 0-11-4.917-11-11s4.917-11 11-11c6.083 0 11 4.917 11 11 0 6.067-4.933 11-11 11zM16 22.667l-6.667-6.667 6.667-6.667 6.667 6.667-6.667 6.667z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">1</div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-baron</title>
                                                    <path d="M17.333 1.333l4.867 9-1.2 1.667h-2.417l-2.583-3.333-2.55 3.333h-2.45l-1.183-1.667 4.85-9-13.333 8 4.667 8c0 8.75 6.833 13.167 6.833 13.167v-4h6.5v4c0 0 6.667-4.417 6.667-13.167l4.667-8-13.333-8zM17.767 14.683c0.3 0.733 0.133 1.567-0.417 2.133s-1.367 0.733-2.083 0.417c-0.717-0.317-1.183-1.017-1.183-1.8 0-1.067 0.85-1.95 1.9-1.95 0.783 0 1.483 0.467 1.783 1.2zM10.85 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.933-1.9 1.95-0.8-0.017-1.5-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117zM16 25.133c-1.050 0-1.9-0.867-1.9-1.95 0-1.067 0.85-1.933 1.9-1.933s1.9 0.867 1.9 1.95c0 0.517-0.2 1.017-0.55 1.383s-0.85 0.567-1.35 0.567v-0.017zM18.467 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.95-1.9 1.95-0.8-0.017-1.483-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">1</div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-riftHerald</title>
                                                    <path d="M25 19.333c0.003 0.075 0.001 0.146-0.001 0.218v0c-0.002 0.090-0.005 0.182 0.001 0.282 0 2.755-3.224 5.308-5.833 7.167-0.951 0.608-2.016 0.85-3.167 0.833-1.090-0.016-2.266-0.258-3.167-0.833-2.609-1.859-5.833-4.412-5.833-7.167v-0.5l-3.667-1.833c0-6.518 7.167-14.167 7.167-14.167v7.472c1.513-1.178 3.58-1.902 5.5-1.972s3.487 0.794 5 1.972v-7.472c0 0 7.667 7.649 7.667 14.167l-3.667 1.833zM17.523 23.387c1.684-1.111 4.171-3.037 4.143-4.704 0-6.578-5.652-6.517-5.652-6.517s-5.681-0.062-5.681 6.517c0 1.667 2.476 3.581 4.171 4.704 0.917 0.595 2.102 0.595 3.018 0zM5.167 21l-3.833 3.667c1.576 1.787 6 4 6 4-1.742-2.985-2.167-7.667-2.167-7.667zM30.667 24.667c-1.576 1.787-6 4-6 4 1.742-2.985 2.167-7.667 2.167-7.667l3.833 3.667zM18.11 17.33l-1.338-1.919c-0.168-0.256-0.457-0.411-0.767-0.411s-0.599 0.155-0.767 0.411l-1.361 1.919c-0.291 0.417-0.28 0.97 0.028 1.375l1.361 1.754c0.17 0.235 0.446 0.374 0.739 0.374s0.569-0.14 0.739-0.374l1.366-1.754c0.297-0.412 0.297-0.963 0-1.375z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">1</div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-dragon</title>
                                                    <path d="M24.617 10.25v-7.433l-5.8 5.183-3.117-6.667-3.117 6.667-5.783-5.183v7.433h-5.467l6.050 4.95v5.067c0 0.967 0.4 2.217 1.117 2.883l6.35 7.017c0.3 0.317 0.7 0.5 1.15 0.5s0.85-0.183 1.15-0.5l6.367-7.017c0.717-0.667 1.117-1.9 1.117-2.883v-5.067l6.033-4.95h-6.050zM13.9 19.917c-3.767 0.9-4.9-6.25-4.9-6.25 6.9 3.917 4.9 6.25 4.9 6.25zM17.983 19.917c0 0-1.483-2.7 5.017-6.417 0 0-1.133 7.333-5.017 6.417z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">2</div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-gold</title>
                                                    <path d="M18.5 4.050c6.4-0.483 11.85 2.617 12.15 6.867 0.233 3.117-2.4 6.017-6.35 7.517 0.133 0.383 0.2 0.767 0.233 1.167 0.317 4.25-4.6 7.9-11.033 8.367s-11.833-2.45-12.15-6.7c-0.217-3.117 2.4-6.017 6.35-7.517-0.133-0.383-0.2-0.767-0.233-1.167-0.317-4.25 4.633-8.050 11.033-8.533zM4.5 20.667c-0.283 2 2.967 4.817 8.833 4.333s7.65-2.9 6.767-5.617c-0.053 0.005-0.106 0.012-0.16 0.019-0.115 0.015-0.232 0.031-0.356 0.031-4.183 0.3-7.967-0.933-10.167-3.017-2.433 0.5-4.617 2.183-4.917 4.25z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">46.6k</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="match-pl">
                                            <a order="0" class="table-order-2" href="/lol/profile/br1/xzdemonzx">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Renekton">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Renekton</championname> <championwinrate>
                                                                                            <span>Topo</span>: 48.4% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Renekton.png" alt="Renekton" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">14</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerTeleport.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Teleporte</spellname>
                                                                                    <spelldescription>Depois de canalizar por 4s, teleporta seu Campeão para a estrutura, tropa ou sentinela-alvo aliada e concede um surto de Velocidade de Movimento. O Tempo de Recarga de Teleporte escala 420s - 240s dependendo do nível do Campeão.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerTeleport.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 bQxidi" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/precision/active/8005.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Pressione o Ataque</runename>
                                                                                    <runeshort>Acertar um Campeão inimigo com 3 ataques básicos consecutivos causa de 40 a 180 de <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_AdaptiveDmg'><font color='#48C4B7'>Dano Adaptativo</font></lol-uikit-tooltipped-keyword> adicional (com base no nível) e o deixa vulnerável, aumentando o dano recebido de todas as fontes em 8 a 12% por 6s.</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/precision/active/8005.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 iWQHGO" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Determinação</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/resolve/tree-resolve.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/XzDemonzX">
                                                        <div class="match-detail-summoner-name">XzDemonzX</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-platinum</title>
                                                        <path fill="#4e9996" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">P1</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3153.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Espada do Rei Destruído</itemname>
                                                                                         <itemcost><span>Custo:</span> 3300 (2310)</itemcost>
                                                                                         <itemdescription><stats>+40 de Dano de Ataque<br>+25% de Velocidade de Ataque<br>+12% de Roubo de Vida</stats><br><br><unique>Passivo ÚNICO:</unique> Ataques básicos causam 8% da Vida atual do alvo como Dano Físico adicional ao contato (usuários de ataque corpo a corpo causam 12%).<br><active>Ativo ÚNICO:</active> Causa 100 de Dano Mágico ao Campeão-alvo e rouba 25% de sua Velocidade de Movimento por 3s (90s de Tempo de Recarga).<br><br><rules>O mínimo de Dano Físico adicional causado é 15.<br>O máximo de Dano Físico adicional causado a monstros e tropas é 60.<br>O Roubo de Vida do usuário é aplicado ao Dano Físico adicional causado.</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3153.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3071.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Cutelo Negro</itemname>
                                                                                         <itemcost><span>Custo:</span> 3000 (2100)</itemcost>
                                                                                         <itemdescription><stats>+400 de Vida<br>+40 de Dano de Ataque<br>+20% de Redução do Tempo de Recarga</stats><br><br><unique>Passivo ÚNICO:</unique> Causar Dano Físico a um Campeão inimigo causa efeito de Fenda, reduzindo sua Armadura em 4% por 6s (acumula-se até 6 vezes, chegando a 24%).<br><unique>Passivo ÚNICO - Fúria:</unique> Causar Dano Físico concede 20 de Velocidade de Movimento por 2s. Assistências ou abates em Campeões inimigos sob o efeito de Fenda concedem 60 de Velocidade de Movimento por 2s. Esse efeito de Velocidade de Movimento é cortado pela metade em Campeões de ataque à distância.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3071.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1055.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Lâmina de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 450 (180)</itemcost>
                                                                                         <itemdescription><stats>+8 de Dano de Ataque<br>+80 de Vida<br>+3% de Roubo de Vida</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1055.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3105.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Égide da Legião</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><stats>+30 de Armadura<br>+30 de Resistência Mágica</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3105.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1036.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Espada Longa</itemname>
                                                                                         <itemcost><span>Custo:</span> 350 (245)</itemcost>
                                                                                         <itemdescription><stats>+10 de Dano de Ataque</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1036.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3047.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Tabi Ninja</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats>+20 de Armadura</stats><br><br><unique>Passivo ÚNICO:</unique> Bloqueia 12% de dano provindo de ataques básicos.<br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3047.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3340.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Totem de Vigilância (Amuleto)</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br><active>Ativo:</active> Consome uma carga para posicionar uma Sentinela Invisível que revela a área ao seu redor por <scaleLevel>90s - 120s</scaleLevel>. <br><br>Armazena uma carga a cada <scaleLevel>240s - 120s</scaleLevel>, até 2 cargas no máximo.<br><br>A duração das sentinelas e o tempo de recarregamento melhoram gradualmente com o nível.<br><br><rules>(Limite de 3 Sentinelas Invisíveis no mapa para cada jogador.)</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3340.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">5 / <span>2</span> / 7</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">6.00<span class="sc-hzNEM itdjdj"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">141<span class="sc-fZwumE dfNLZR">(6,0)</span><span>CS</span></div>
                                                        <div class="match-pa-text">50% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">17.186</div>
                                                        <div class="match-detail-bar-div ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a order="2" class="table-order-2" href="/lol/profile/na1/thòr">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Xerath">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Xerath</championname> <championwinrate>
                                                                                            <span>Meio</span>: 50.2% Vitórias
                                                                                            </championwinrate><championwinrate>
                                                                                            <span>Suporte</span>: 50% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Xerath.png" alt="Xerath" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">14</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerExhaust.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Exaustão</spellname>
                                                                                    <spelldescription>Exaure o Campeão-alvo inimigo, reduzindo sua Velocidade de Movimento em 30% e seu dano causado em 40% por 3s.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerExhaust.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 kbbprN" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/sorcery/active/8229.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Cometa Arcano</runename>
                                                                                    <runeshort>Ao causar dano a um Campeão com uma habilidade, um cometa é lançado onde ele estiver ou, se Cometa Arcano estiver em Tempo de Recarga, seu tempo é reduzido.<br><br><lol-uikit-tooltipped-keyword key='LinkTooltip_Description_AdaptiveDmg'><font color='#48C4B7'>Dano Adaptativo</font></lol-uikit-tooltipped-keyword>: de 30 a 100 com base no nível (<scaleAP>+0.2 de PdH</scaleAP> e <scaleAD>+0.35 de DdA adicional</scaleAD>)<br>Tempo de Recarga: 20s a 8s<br><rules><br>Redução do Tempo de Recarga:<br>Alvo único: 20%.<br>Área de ação: 10%.<br>Dano ao longo do tempo: 5%.<br></rules></runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/sorcery/active/8229.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 qIhhk" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Inspiração</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/inspiration/tree-inspiration.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/Thòr">
                                                        <div class="match-detail-summoner-name">Thòr</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-diamond</title>
                                                        <path fill="#576bce" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">D4</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3191.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Armaguarda da Caçadora</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><stats>+30 de Armadura<br>+20 de Poder de Habilidade</stats><br><br><unique>Passivo ÚNICO:</unique> Abater uma unidade concede 0.5 de Armadura e Poder de Habilidade adicionais. Esse efeito se acumula até 30 vezes.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3191.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3285.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Eco de Luden</itemname>
                                                                                         <itemcost><span>Custo:</span> 3200 (2240)</itemcost>
                                                                                         <itemdescription><stats>+90 de Poder de Habilidade<br><mana>+600 de Mana</mana><br>+10% de Redução do Tempo de Recarga</stats><br><br><unique>Passivo ÚNICO - Aceleração:</unique> Este item recebe 10% de redução de Tempo de Recarga adicional.<br><unique>Passivo ÚNICO - Eco:</unique> Recebe cargas ao conjurar ou movimentar-se. Com 100 cargas, a próxima habilidade que acertar e causar dano consome todas as cargas para causar 100 (+10% do Poder de Habilidade) de Dano Mágico adicional a até 4 alvos ao contato.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3285.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/2420.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Cronômetro</itemname>
                                                                                         <itemcost><span>Custo:</span> 650 (260)</itemcost>
                                                                                         <itemdescription><active>Ativo ÚNICO - Estase:</active> O Campeão torna-se invulnerável e inalvejável por 2.5s, mas fica incapaz de se movimentar, atacar, conjurar habilidades ou usar itens durante este período (uso único).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/2420.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3041.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Ladrão de Almas de Mejai</itemname>
                                                                                         <itemcost><span>Custo:</span> 1400 (980)</itemcost>
                                                                                         <itemdescription><stats>+20 de Poder de Habilidade<br><mana>+200 de Mana</mana></stats><br><br><unique>Passivo ÚNICO - Pavor:</unique> Concede +5 de Poder de Habilidade por Glória. Concede 10% de Velocidade de Movimento caso você tenha ao menos 10 de Glória.<br><unique>Passivo ÚNICO - Faça ou Morra:</unique> Concede 4 de Glória por abate de Campeão ou 2 de Glória por assistência, até um máximo de 25 de Glória total. Perde 10 acúmulos de Glória ao morrer.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3041.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1056.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Anel de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 400 (160)</itemcost>
                                                                                         <itemdescription><stats>+60 de Vida<br>+15 de Poder de Habilidade<br><mana>+5 de Mana a cada 5s</mana></stats><br><br><passive>Passivo: </passive>Ataques básicos causam 5 de Dano Físico adicional ao contato contra tropas.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1056.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3020.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Sapatos do Feiticeiro</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats>+18 de <a >Penetração Mágica</a></stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3020.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Alteração Vidente</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><levelLimit>Requer nível 9+ para aprimorar.</levelLimit><br><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br>Altera o amuleto Totem de Vigilância:<br><br><stats>+ Aumenta drasticamente o alcance de conjuração (+650%)<br>+ Duração infinita e não conta no limite total de sentinelas<br>- 10% de aumento do Tempo de Recarga<br>- A sentinela é visível, frágil e não pode ser selecionada por aliados<br>- 45% de redução do raio de visão da sentinela<br>- Não pode armazenar cargas</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">8 / <span>3</span> / 5</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">4.33<span class="sc-hzNEM itdjdj"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">147<span class="sc-fZwumE dfNLZR">(6,2)</span><span>CS</span></div>
                                                        <div class="match-pa-text">54% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">14.285</div>
                                                        <div class="match-detail-bar-div    ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a order="2" class="table-order-2" href="/lol/profile/na1/thòr">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Xerath">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Xerath</championname> <championwinrate>
                                                                                            <span>Meio</span>: 50.2% Vitórias
                                                                                            </championwinrate><championwinrate>
                                                                                            <span>Suporte</span>: 50% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Xerath.png" alt="Xerath" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">14</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerExhaust.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Exaustão</spellname>
                                                                                    <spelldescription>Exaure o Campeão-alvo inimigo, reduzindo sua Velocidade de Movimento em 30% e seu dano causado em 40% por 3s.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerExhaust.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 kbbprN" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/sorcery/active/8229.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Cometa Arcano</runename>
                                                                                    <runeshort>Ao causar dano a um Campeão com uma habilidade, um cometa é lançado onde ele estiver ou, se Cometa Arcano estiver em Tempo de Recarga, seu tempo é reduzido.<br><br><lol-uikit-tooltipped-keyword key='LinkTooltip_Description_AdaptiveDmg'><font color='#48C4B7'>Dano Adaptativo</font></lol-uikit-tooltipped-keyword>: de 30 a 100 com base no nível (<scaleAP>+0.2 de PdH</scaleAP> e <scaleAD>+0.35 de DdA adicional</scaleAD>)<br>Tempo de Recarga: 20s a 8s<br><rules><br>Redução do Tempo de Recarga:<br>Alvo único: 20%.<br>Área de ação: 10%.<br>Dano ao longo do tempo: 5%.<br></rules></runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/sorcery/active/8229.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 qIhhk" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Inspiração</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/inspiration/tree-inspiration.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/Thòr">
                                                        <div class="match-detail-summoner-name">Thòr</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-diamond</title>
                                                        <path fill="#576bce" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">D4</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3191.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Armaguarda da Caçadora</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><stats>+30 de Armadura<br>+20 de Poder de Habilidade</stats><br><br><unique>Passivo ÚNICO:</unique> Abater uma unidade concede 0.5 de Armadura e Poder de Habilidade adicionais. Esse efeito se acumula até 30 vezes.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3191.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3285.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Eco de Luden</itemname>
                                                                                         <itemcost><span>Custo:</span> 3200 (2240)</itemcost>
                                                                                         <itemdescription><stats>+90 de Poder de Habilidade<br><mana>+600 de Mana</mana><br>+10% de Redução do Tempo de Recarga</stats><br><br><unique>Passivo ÚNICO - Aceleração:</unique> Este item recebe 10% de redução de Tempo de Recarga adicional.<br><unique>Passivo ÚNICO - Eco:</unique> Recebe cargas ao conjurar ou movimentar-se. Com 100 cargas, a próxima habilidade que acertar e causar dano consome todas as cargas para causar 100 (+10% do Poder de Habilidade) de Dano Mágico adicional a até 4 alvos ao contato.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3285.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/2420.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Cronômetro</itemname>
                                                                                         <itemcost><span>Custo:</span> 650 (260)</itemcost>
                                                                                         <itemdescription><active>Ativo ÚNICO - Estase:</active> O Campeão torna-se invulnerável e inalvejável por 2.5s, mas fica incapaz de se movimentar, atacar, conjurar habilidades ou usar itens durante este período (uso único).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/2420.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3041.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Ladrão de Almas de Mejai</itemname>
                                                                                         <itemcost><span>Custo:</span> 1400 (980)</itemcost>
                                                                                         <itemdescription><stats>+20 de Poder de Habilidade<br><mana>+200 de Mana</mana></stats><br><br><unique>Passivo ÚNICO - Pavor:</unique> Concede +5 de Poder de Habilidade por Glória. Concede 10% de Velocidade de Movimento caso você tenha ao menos 10 de Glória.<br><unique>Passivo ÚNICO - Faça ou Morra:</unique> Concede 4 de Glória por abate de Campeão ou 2 de Glória por assistência, até um máximo de 25 de Glória total. Perde 10 acúmulos de Glória ao morrer.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3041.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1056.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Anel de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 400 (160)</itemcost>
                                                                                         <itemdescription><stats>+60 de Vida<br>+15 de Poder de Habilidade<br><mana>+5 de Mana a cada 5s</mana></stats><br><br><passive>Passivo: </passive>Ataques básicos causam 5 de Dano Físico adicional ao contato contra tropas.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1056.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3020.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Sapatos do Feiticeiro</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats>+18 de <a >Penetração Mágica</a></stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3020.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Alteração Vidente</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><levelLimit>Requer nível 9+ para aprimorar.</levelLimit><br><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br>Altera o amuleto Totem de Vigilância:<br><br><stats>+ Aumenta drasticamente o alcance de conjuração (+650%)<br>+ Duração infinita e não conta no limite total de sentinelas<br>- 10% de aumento do Tempo de Recarga<br>- A sentinela é visível, frágil e não pode ser selecionada por aliados<br>- 45% de redução do raio de visão da sentinela<br>- Não pode armazenar cargas</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">8 / <span>3</span> / 5</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">4.33<span class="sc-hzNEM itdjdj"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">147<span class="sc-fZwumE dfNLZR">(6,2)</span><span>CS</span></div>
                                                        <div class="match-pa-text">54% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">14.285</div>
                                                        <div class="match-detail-bar-div    ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a order="3" class="table-order-2" href="/lol/profile/br1/fuk hard daddy">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Draven">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Draven</championname> <championwinrate>
                                                                                            <span>Atirador</span>: 50.7% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Draven.png" alt="Draven" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">13</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerHeal.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Curar</spellname>
                                                                                    <spelldescription>Cura 90 - 345 de Vida (dependendo do nível do Campeão) e concede 30% de Velocidade de Movimento por 1s a você e ao Campeão-alvo aliado. Essa cura é reduzida pela metade para unidades recentemente afetadas por outro Curar como Feitiço de Invocador.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerHeal.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 hiVYtO" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/precision/active/8010.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Conquistador</runename>
                                                                                    <runeshort>Ataques básicos ou habilidades que causam dano a um Campeão inimigo concedem 2 acúmulos de Conquistador por 6s, recebendo 2 - 5 <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_Adaptive'> de <font color='#48C4B7'>Força Adaptativa</font></lol-uikit-tooltipped-keyword> por acúmulo. Acumula-se até 10 vezes. Campeões de ataque à distância recebem somente 1 acúmulo por ataque básico.<br><br>Ao chegar no máximo de acúmulos, cura 15% do dano que você causa a Campeões (8% para Campeões de ataque à distância).</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/precision/active/8010.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 cUaTqv" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Feitiçaria</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/sorcery/tree-sorcery.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/FUK HARD DADDY">
                                                        <div class="match-detail-summoner-name">FUK HARD DADDY</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-platinum</title>
                                                        <path fill="#4e9996" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">P2</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3072.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Sedenta por Sangue</itemname>
                                                                                         <itemcost><span>Custo:</span> 3500 (2450)</itemcost>
                                                                                         <itemdescription><stats>+80 de Dano de Ataque</stats><br><br><unique>Passivo ÚNICO:</unique> +20% de Roubo de Vida<br><unique>Passivo ÚNICO:</unique> Seus ataques básicos agora podem lhe sobrecurar. A Vida em excesso fica armazenada como um escudo que pode bloquear 50-350 de dano, com base no nível do campeão.<br><br>Esse escudo se esvai lentamente caso não cause ou receba dano nos últimos 25s.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3072.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3031.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Gume do Infinito</itemname>
                                                                                         <itemcost><span>Custo:</span> 3400 (2380)</itemcost>
                                                                                         <itemdescription><stats>+80 de Dano de Ataque<br>+25% de Chance de Acerto Crítico</stats><br><br><unique>Passivo ÚNICO:</unique> Acertos Críticos causam 225% de dano em vez de 200%.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3031.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Grevas do Berserker</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats> +35% de Velocidade de Ataque</stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3086.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Zelo</itemname>
                                                                                         <itemcost><span>Custo:</span> 1400 (980)</itemcost>
                                                                                         <itemdescription><stats>+12% de Velocidade de Ataque<br>+25% de Chance de Acerto Crítico</stats><br><br><unique>Passivo ÚNICO:</unique> +5% de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3086.png" alt="" currentitem="false">
                                                        <div class="empty-item"></div>
                                                        <div class="empty-item"></div><img data-tip="
                                                                                                 <itemdata>
                                                                                                 <itemleft>
                                                                                                 <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png&quot;/>
                                                                                                 </itemleft>
                                                                                                 <itemright>        
                                                                                                 <itemname>Alteração Vidente</itemname>
                                                                                                 <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                                 <itemdescription><levelLimit>Requer nível 9+ para aprimorar.</levelLimit><br><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br>Altera o amuleto Totem de Vigilância:<br><br><stats>+ Aumenta drasticamente o alcance de conjuração (+650%)<br>+ Duração infinita e não conta no limite total de sentinelas<br>- 10% de aumento do Tempo de Recarga<br>- A sentinela é visível, frágil e não pode ser selecionada por aliados<br>- 45% de redução do raio de visão da sentinela<br>- Não pode armazenar cargas</stats></itemdescription>
                                                                                                 </itemright>
                                                                                                 </itemdata>
                                                                                                 " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">4 / <span>6</span> / 9</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">2.17<span class="sc-hzNEM iBGGLS"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">159<span class="sc-fZwumE dfNLZR">(6,7)</span><span>CS</span></div>
                                                        <div class="match-pa-text">54% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">14.873</div>
                                                        <div class="match-detail-bar-div    ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </a>
                                            <a order="4" class="table-order-2" href="/lol/profile/br1/taric taric ">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Taric">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Taric</championname> <championwinrate>
                                                                                            <span>Suporte</span>: 52.3% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Taric.png" alt="Taric" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">12</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerDot.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Incendiar</spellname>
                                                                                    <spelldescription>Incendeia o Campeão-alvo inimigo, causando 70 - 410 de Dano Verdadeiro (dependendo do nível do Campeão) ao longo de 5s, concedendo visão do alvo e reduzindo os efeitos de cura dele enquanto durar o efeito.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerDot.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 fvUFYC" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/resolve/active/8465.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Guardião</runename>
                                                                                    <runeshort><i>Protege</i> aliados a até 175 unidades de distância de você e aliados nos quais você lançar habilidades por 2.5s. Quando você estiver <i>Protegendo</i>, se você ou o aliado receberem dano, ambos ganham um escudo e são acelerados por 1.5s.<br><br>Tempo de Recarga: <scaleLevel>70 - 40</scaleLevel>s<br>Escudo: <scaleLevel>70 - 150</scaleLevel> + <scaleAP>25%</scaleAP> de seu Poder de Habilidade + <scalehealth>12%</scalehealth> da sua Vida adicional.<br>Aceleração: +20% de Velocidade de Movimento.</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/resolve/active/8465.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 jMdfEB" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Precisão</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/precision/tree-precision.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/Taric Taric ">
                                                        <div class="match-detail-summoner-name">Taric Taric </div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-platinum</title>
                                                        <path fill="#4e9996" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">P1</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3050.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Convergência de Zeke</itemname>
                                                                                         <itemcost><span>Custo:</span> 2250 (1575)</itemcost>
                                                                                         <itemdescription><stats>+60 de Armadura<br>+30 de Resistência mágica<br><mana>+250 de Mana</mana><br>+10% de Redução de Tempo de Recarga</stats><br><mainText><active>Ativo ÚNICO - Conduíte:</active> Prende-se a um aliado que não tiver um Conduíte ativo.<br><unique>Passivo ÚNICO:</unique> Conjurar sua ultimate perto de seu aliado envolve você em uma tempestade de gelo e incendeia os ataques básicos de seu aliado por 10s. Os inimigos dentro de sua tempestade glacial sofrem redução de velocidade de 20% e os ataques do seu aliado queimam o alvo em 30% de Dano Mágico adicional ao longo de 2s. (45s de Tempo de Recarga).<br><br><unlockedPassive>Pacto do Fogo Gelado:</unlockedPassive> Sua tempestade congelante pega fogo quando reduz a velocidade de um inimigo em chamas, causando 40 de Dano Mágico por segundo e reduzindo a velocidade em 40% em vez disso, durante 3s.</mainText><br><br><rules>(Apenas um Campeão pode ser vinculado a uma Convergência de Zeke por vez).</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3050.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3504.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Turíbulo Ardente</itemname>
                                                                                         <itemcost><span>Custo:</span> 2300 (1610)</itemcost>
                                                                                         <itemdescription><stats>+60 de Poder de Habilidade<br>+10% de Redução do Tempo de Recarga<br><mana>+50% de Regeneração de Mana base </mana></stats><br><br><unique>Passivo ÚNICO:</unique> +10% de cura e resistência de escudos<br><unique>Passivo ÚNICO:</unique> +8% de Velocidade de Movimento<br><unique>Passivo ÚNICO:</unique> Sempre que curar ou proteger um aliado, você e ele recebem de 10% a 30% de Velocidade de Ataque e seus ataques causam de 5 a 20 de Dano Mágico ao contato por 6s. <br><br><rules>Isso não inclui efeitos de regeneração. Os efeitos adicionais são calculados de acordo com o nível do alvo.</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3504.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3047.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Tabi Ninja</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats>+20 de Armadura</stats><br><br><unique>Passivo ÚNICO:</unique> Bloqueia 12% de dano provindo de ataques básicos.<br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3047.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3860.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Bastião da Montanha</itemname>
                                                                                         <itemcost><span>Custo:</span> 400 (160)</itemcost>
                                                                                         <itemdescription><stats>+300 de Vida<br>+25 de Poder de Habilidade<br>+3 de ouro a cada 10s<br>+100% de Regeneração de Vida base </stats><br><br><active>Ativo ÚNICO - Vigilante:</active> Posiciona uma Sentinela Invisível. Armazena até 4 cargas que são preenchidas ao visitar a loja.<br><br><rules>(Recebe ouro reduzido de <a >abates excessivos de tropas</a>.)</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3860.png" alt="" currentitem="false">
                                                        <div class="empty-item"></div>
                                                        <div class="empty-item"></div><img data-tip="
                                                                                                 <itemdata>
                                                                                                 <itemleft>
                                                                                                 <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3364.png&quot;/>
                                                                                                 </itemleft>
                                                                                                 <itemright>        
                                                                                                 <itemname>Lente do Oráculo</itemname>
                                                                                                 <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                                 <itemdescription><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br><active>Ativo:</active> Varre ao seu redor, avisando contra unidades hostis ocultas, revelando armadilhas invisíveis e revelando/desarmando sentinelas próximas por 10s (Tempo de Recarga de 90 a 60).</itemdescription>
                                                                                                 </itemright>
                                                                                                 </itemdata>
                                                                                                 " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3364.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">3 / <span>3</span> / 11</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">4.67<span class="sc-hzNEM itdjdj"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">28<span class="sc-fZwumE dfNLZR">(1,2)</span><span>CS</span></div>
                                                        <div class="match-pa-text">58% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">4.403</div>
                                                        <div class="match-detail-bar-div    ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="division-match"></div>
                                    <div class="match-detail-collum">
                                        <div class="match-detail-view">
                                            <div class="match-detail-view-2">
                                                <div class="match-title-team-1">
                                                    <span>Equipe 2</span>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <div class="title-match-obj">24 / <span>18</span> / 35</div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-turret</title>
                                                    <path d="M16 19.667l9.333-9h-3.333l1.667-1.833-7.667-7.5-7.667 7.5 1.667 1.833h-3.333l9.333 9zM16 4.333l4.167 4.333-4.167 4.167-4.167-4.167 4.167-4.333zM9.333 15.667l3.333 15h6.667l3.333-15-6.689 6.485-6.644-6.485z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">8</div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-inhibitor</title>
                                                    <path d="M16 1.333c-8.1 0-14.667 6.567-14.667 14.667s6.567 14.667 14.667 14.667c8.1 0 14.667-6.567 14.667-14.667-0.017-8.1-6.567-14.65-14.667-14.667zM16 27c-6.083 0-11-4.917-11-11s4.917-11 11-11c6.083 0 11 4.917 11 11 0 6.067-4.933 11-11 11zM16 22.667l-6.667-6.667 6.667-6.667 6.667 6.667-6.667 6.667z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">1</div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-baron</title>
                                                    <path d="M17.333 1.333l4.867 9-1.2 1.667h-2.417l-2.583-3.333-2.55 3.333h-2.45l-1.183-1.667 4.85-9-13.333 8 4.667 8c0 8.75 6.833 13.167 6.833 13.167v-4h6.5v4c0 0 6.667-4.417 6.667-13.167l4.667-8-13.333-8zM17.767 14.683c0.3 0.733 0.133 1.567-0.417 2.133s-1.367 0.733-2.083 0.417c-0.717-0.317-1.183-1.017-1.183-1.8 0-1.067 0.85-1.95 1.9-1.95 0.783 0 1.483 0.467 1.783 1.2zM10.85 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.933-1.9 1.95-0.8-0.017-1.5-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117zM16 25.133c-1.050 0-1.9-0.867-1.9-1.95 0-1.067 0.85-1.933 1.9-1.933s1.9 0.867 1.9 1.95c0 0.517-0.2 1.017-0.55 1.383s-0.85 0.567-1.35 0.567v-0.017zM18.467 17.933c0.55-0.55 1.367-0.717 2.083-0.417s1.183 1.017 1.183 1.8c0 1.067-0.85 1.95-1.9 1.95-0.8-0.017-1.483-0.5-1.783-1.217-0.3-0.733-0.133-1.567 0.417-2.117z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">1</div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-riftHerald</title>
                                                    <path d="M25 19.333c0.003 0.075 0.001 0.146-0.001 0.218v0c-0.002 0.090-0.005 0.182 0.001 0.282 0 2.755-3.224 5.308-5.833 7.167-0.951 0.608-2.016 0.85-3.167 0.833-1.090-0.016-2.266-0.258-3.167-0.833-2.609-1.859-5.833-4.412-5.833-7.167v-0.5l-3.667-1.833c0-6.518 7.167-14.167 7.167-14.167v7.472c1.513-1.178 3.58-1.902 5.5-1.972s3.487 0.794 5 1.972v-7.472c0 0 7.667 7.649 7.667 14.167l-3.667 1.833zM17.523 23.387c1.684-1.111 4.171-3.037 4.143-4.704 0-6.578-5.652-6.517-5.652-6.517s-5.681-0.062-5.681 6.517c0 1.667 2.476 3.581 4.171 4.704 0.917 0.595 2.102 0.595 3.018 0zM5.167 21l-3.833 3.667c1.576 1.787 6 4 6 4-1.742-2.985-2.167-7.667-2.167-7.667zM30.667 24.667c-1.576 1.787-6 4-6 4 1.742-2.985 2.167-7.667 2.167-7.667l3.833 3.667zM18.11 17.33l-1.338-1.919c-0.168-0.256-0.457-0.411-0.767-0.411s-0.599 0.155-0.767 0.411l-1.361 1.919c-0.291 0.417-0.28 0.97 0.028 1.375l1.361 1.754c0.17 0.235 0.446 0.374 0.739 0.374s0.569-0.14 0.739-0.374l1.366-1.754c0.297-0.412 0.297-0.963 0-1.375z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">1</div>
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>monster-dragon</title>
                                                    <path d="M24.617 10.25v-7.433l-5.8 5.183-3.117-6.667-3.117 6.667-5.783-5.183v7.433h-5.467l6.050 4.95v5.067c0 0.967 0.4 2.217 1.117 2.883l6.35 7.017c0.3 0.317 0.7 0.5 1.15 0.5s0.85-0.183 1.15-0.5l6.367-7.017c0.717-0.667 1.117-1.9 1.117-2.883v-5.067l6.033-4.95h-6.050zM13.9 19.917c-3.767 0.9-4.9-6.25-4.9-6.25 6.9 3.917 4.9 6.25 4.9 6.25zM17.983 19.917c0 0-1.483-2.7 5.017-6.417 0 0-1.133 7.333-5.017 6.417z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">2</div>
                                                </div>
                                                <div class="match-align" style="align-items: center;">
                                                    <svg viewBox="0 0 32 32" class="svg-match-obj">
                                                    <title>match-gold</title>
                                                    <path d="M18.5 4.050c6.4-0.483 11.85 2.617 12.15 6.867 0.233 3.117-2.4 6.017-6.35 7.517 0.133 0.383 0.2 0.767 0.233 1.167 0.317 4.25-4.6 7.9-11.033 8.367s-11.833-2.45-12.15-6.7c-0.217-3.117 2.4-6.017 6.35-7.517-0.133-0.383-0.2-0.767-0.233-1.167-0.317-4.25 4.633-8.050 11.033-8.533zM4.5 20.667c-0.283 2 2.967 4.817 8.833 4.333s7.65-2.9 6.767-5.617c-0.053 0.005-0.106 0.012-0.16 0.019-0.115 0.015-0.232 0.031-0.356 0.031-4.183 0.3-7.967-0.933-10.167-3.017-2.433 0.5-4.617 2.183-4.917 4.25z"></path>
                                                    </svg>
                                                    <div class="title-match-obj">46.6k</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="match-players-div">
                                            <a order="0" class="table-order-2" href="/lol/profile/br1/toph bëifong">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Sett">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Sett</championname> <championwinrate>
                                                                                            <span>Selva</span>: 49% Vitórias
                                                                                            </championwinrate><championwinrate>
                                                                                            <span>Suporte</span>: 47.6% Vitórias
                                                                                            </championwinrate><championwinrate>
                                                                                            <span>Topo</span>: 49.5% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Sett.png" alt="Sett" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">12</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerTeleport.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Teleporte</spellname>
                                                                                    <spelldescription>Depois de canalizar por 4s, teleporta seu Campeão para a estrutura, tropa ou sentinela-alvo aliada e concede um surto de Velocidade de Movimento. O Tempo de Recarga de Teleporte escala 420s - 240s dependendo do nível do Campeão.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerTeleport.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 bQjlwA" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/precision/active/8010.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Conquistador</runename>
                                                                                    <runeshort>Ataques básicos ou habilidades que causam dano a um Campeão inimigo concedem 2 acúmulos de Conquistador por 6s, recebendo 2 - 5 <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_Adaptive'> de <font color='#48C4B7'>Força Adaptativa</font></lol-uikit-tooltipped-keyword> por acúmulo. Acumula-se até 10 vezes. Campeões de ataque à distância recebem somente 1 acúmulo por ataque básico.<br><br>Ao chegar no máximo de acúmulos, cura 15% do dano que você causa a Campeões (8% para Campeões de ataque à distância).</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/precision/active/8010.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 cDhDye" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Feitiçaria</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/sorcery/tree-sorcery.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/Toph Bëifong">
                                                        <div class="match-detail-summoner-name">Toph Bëifong</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-diamond</title>
                                                        <path fill="#576bce" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">D4</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3078.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Força da Trindade</itemname>
                                                                                         <itemcost><span>Custo:</span> 3733 (2613)</itemcost>
                                                                                         <itemdescription><stats>+250 de Vida<br><mana>+250 de Mana</mana><br>+25 de Dano de Ataque<br>+40% de Velocidade de Ataque<br>+20% de Redução do Tempo de Recarga<br>+5% de Velocidade de Movimento</stats><br><br><unique>Passivo ÚNICO - Fúria:</unique> Ataques básicos concedem 20 de Velocidade de Movimento por 2s. Abates concedem 60 de Velocidade de Movimento. Esse efeito de Velocidade de Movimento é cortado pela metade em Campeões de ataque à distância.<br><unique>Passivo ÚNICO - Lâmina Arcana:</unique> Após usar uma habilidade, o próximo ataque básico causa Dano Físico igual a 200% do Dano de Ataque base ao contato (1.5s de Tempo de Recarga).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3078.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3111.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Passos de Mercúrio</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats>+25 de Resistência Mágica</stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento<br><unique>Passivo ÚNICO - Tenacidade:</unique> Reduz a duração de atordoamentos, reduções de velocidade, provocações, medo, silêncio, cegueira, polimorfia e imobilizações em 30%.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3111.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/2003.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Poção de Vida</itemname>
                                                                                         <itemcost><span>Custo:</span> 50 (20)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 5 unidades simultâneas. Limitado a 1 tipo de poção de cura.</groupLimit><br><br><consumable>Clique para consumir:</consumable> Restaura 150 de Vida ao longo de 15s.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/2003.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1054.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Escudo de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 450 (180)</itemcost>
                                                                                         <itemdescription><stats>+80 de Vida</stats><br><br><passive>Passivo: </passive>Restaura 6 de Vida a cada 5s.<br><passive>Passivo: </passive>Ataques básicos causam 5 de Dano Físico adicional a tropas ao contato.<br><unique>Passivo ÚNICO:</unique> Regenera até 40 de Vida por 8s após sofrer dano de um Campeão inimigo, com base no percentual de Vida perdida. (66% de efetividade para Campeões de ataque à distância, área de ação e ativações periódicas de dano).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1054.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1036.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Espada Longa</itemname>
                                                                                         <itemcost><span>Custo:</span> 350 (245)</itemcost>
                                                                                         <itemdescription><stats>+10 de Dano de Ataque</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1036.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1028.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Cristal de Rubi</itemname>
                                                                                         <itemcost><span>Custo:</span> 400 (280)</itemcost>
                                                                                         <itemdescription><stats>+150 de Vida</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1028.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Alteração Vidente</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><levelLimit>Requer nível 9+ para aprimorar.</levelLimit><br><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br>Altera o amuleto Totem de Vigilância:<br><br><stats>+ Aumenta drasticamente o alcance de conjuração (+650%)<br>+ Duração infinita e não conta no limite total de sentinelas<br>- 10% de aumento do Tempo de Recarga<br>- A sentinela é visível, frágil e não pode ser selecionada por aliados<br>- 45% de redução do raio de visão da sentinela<br>- Não pode armazenar cargas</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">2 / <span>4</span> / 2</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">1.00<span class="sc-hzNEM bXYsBI"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">134<span class="sc-fZwumE dfNLZR">(5,7)</span><span>CS</span></div>
                                                        <div class="match-pa-text">22% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">10.102</div>
                                                        <div class="match-detail-bar-div">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a order="1" class="table-order-2" href="/lol/profile/na1/rafisbileu">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Karthus">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Karthus</championname> <championwinrate>
                                                                                            <span>Selva</span>: 47.2% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Karthus.png" alt="Karthus" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">14</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerSmite.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Golpear</spellname>
                                                                                    <spelldescription>Causa 390 - 1000 de Dano Verdadeiro (dependendo do nível do Campeão) a um monstro épico, grande, médio ou tropa inimiga. Restaura Vida com base na sua Vida máxima ao usar contra monstros.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerSmite.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 kDqZzo" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/domination/active/8128.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Colheita Sombria</runename>
                                                                                    <runeshort>Causar dano a um Campeão que esteja com menos de 50% de Vida causa <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_AdaptiveDmg'>Dano Adaptativo</lol-uikit-tooltipped-keyword> e colhe a alma dele, aumentando permanentemente o dano de Colheita Sombria em 5.<br><br>Colheita Sombria Dano: 20-60 (com base no nível) (+5 de dano por alma) (+0.25 de DdA adicional) (+0.15 de PdH)<br>Tempo de Recarga: 45s (redefine para 1.5s ao abater)</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/domination/active/8128.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 hZEVUy" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Precisão</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/precision/tree-precision.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/Rafisbileu">
                                                        <div class="match-detail-summoner-name">Rafisbileu</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-diamond</title>
                                                        <path fill="#576bce" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">D4</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1402.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Encantamento: Ecos Rúnicos</itemname>
                                                                                         <itemcost><span>Custo:</span> 2500 (1750)</itemcost>
                                                                                         <itemdescription><stats>+80 de Poder de Habilidade<br>+10% de Redução do Tempo de Recarga<br><mana>+300 de Mana</mana></stats><br><br><unique>Passivo ÚNICO - Eco:</unique> Recebe cargas ao conjurar ou movimentar-se. Com 100 cargas, a próxima habilidade que acertar e causar dano consome todas as cargas para causar 60 (+10% do Poder de Habilidade) de Dano Mágico adicional a até 4 alvos ao contato.<br><br>Este efeito causa 250% de dano contra monstros grandes. Atingir um monstro grande com esse efeito restaura 25% de sua Mana perdida.<br><br><groupLimit>Limitado a 1 item de Acúmulo de Ouro ou Item da Selva.</groupLimit></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1402.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3165.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Morellonomicon</itemname>
                                                                                         <itemcost><span>Custo:</span> 3000 (2100)</itemcost>
                                                                                         <itemdescription><stats>+70 de Poder de Habilidade<br>+300 de Vida</stats><br><br><unique>Passivo ÚNICO - Toque da Morte:</unique> +15 de <a >Penetração Mágica</a><br><unique>Passivo ÚNICO - Ataque Amaldiçoado:</unique> Causar Dano Mágico a Campeões inflige <a >Feridas Dolorosas</a> por 3s.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3165.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1058.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Bastão Desnecessariamente Grande</itemname>
                                                                                         <itemcost><span>Custo:</span> 1250 (875)</itemcost>
                                                                                         <itemdescription><stats>+60 de Poder de Habilidade</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1058.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3020.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Sapatos do Feiticeiro</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats>+18 de <a >Penetração Mágica</a></stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3020.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1058.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Bastão Desnecessariamente Grande</itemname>
                                                                                         <itemcost><span>Custo:</span> 1250 (875)</itemcost>
                                                                                         <itemdescription><stats>+60 de Poder de Habilidade</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1058.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1082.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Lacre Negro</itemname>
                                                                                         <itemcost><span>Custo:</span> 350 (140)</itemcost>
                                                                                         <itemdescription><stats>+10 de Poder de Habilidade<br>+25% de aumento em cura proveniente de poções<br><mana>+100 de Mana</mana></stats><br><br><unique>Passivo ÚNICO - Pavor:</unique> Concede +3 de Poder de Habilidade por Glória. <br><unique>Passivo ÚNICO - Faça ou Morra:</unique> Concede 2 de Glória por abate de Campeão ou 1 de Glória por assistência, até um máximo de 10 de Glória total. Perde-se 4 de Glória ao morrer.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1082.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3364.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Lente do Oráculo</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br><active>Ativo:</active> Varre ao seu redor, avisando contra unidades hostis ocultas, revelando armadilhas invisíveis e revelando/desarmando sentinelas próximas por 10s (Tempo de Recarga de 90 a 60).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3364.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">6 / <span>6</span> / 3</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">1.50<span class="sc-hzNEM bXYsBI"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">181<span class="sc-fZwumE dfNLZR">(7,7)</span><span>CS</span></div>
                                                        <div class="match-pa-text">50% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">20.509</div>
                                                        <div class="match-detail-bar-div    ">
                                                            <div class="MatchItemDetailedStatsPlayer__DamageBarFill-sc-1suizl8-18 sc-etwtAo hEqpDa"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a order="2" class="table-order-2" href="/lol/profile/br1/corona bahia gb">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Yasuo">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Yasuo</championname> <championwinrate>
                                                                                            <span>Atirador</span>: 53.2% Vitórias
                                                                                            </championwinrate><championwinrate>
                                                                                            <span>Meio</span>: 49.6% Vitórias
                                                                                            </championwinrate><championwinrate>
                                                                                            <span>Topo</span>: 48.7% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Yasuo.png" alt="Yasuo" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">11</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerDot.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Incendiar</spellname>
                                                                                    <spelldescription>Incendeia o Campeão-alvo inimigo, causando 70 - 410 de Dano Verdadeiro (dependendo do nível do Campeão) ao longo de 5s, concedendo visão do alvo e reduzindo os efeitos de cura dele enquanto durar o efeito.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerDot.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 btUVqA" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/precision/active/8010.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Conquistador</runename>
                                                                                    <runeshort>Ataques básicos ou habilidades que causam dano a um Campeão inimigo concedem 2 acúmulos de Conquistador por 6s, recebendo 2 - 5 <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_Adaptive'> de <font color='#48C4B7'>Força Adaptativa</font></lol-uikit-tooltipped-keyword> por acúmulo. Acumula-se até 10 vezes. Campeões de ataque à distância recebem somente 1 acúmulo por ataque básico.<br><br>Ao chegar no máximo de acúmulos, cura 15% do dano que você causa a Campeões (8% para Campeões de ataque à distância).</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/precision/active/8010.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 fQPPaA" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Determinação</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/resolve/tree-resolve.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/CORONA Bahia GB">
                                                        <div class="match-detail-summoner-name">CORONA Bahia GB</div>
                                                    </div>
                                                    <div class="diamond-svg-div">
                                                        <svg viewBox="0 0 32 32" class="diamond-svg" style="font-size: 1.25rem;">
                                                        <title>rank-diamond</title>
                                                        <path fill="#576bce" d="M16 6c0 0 1.018 1.528 2.165 3.693-0.679-0.233-1.407-0.359-2.165-0.359s-1.486 0.126-2.165 0.359c1.147-2.165 2.165-3.693 2.165-3.693zM22.667 16c0-2.318-1.183-4.36-2.979-5.554 2.436-0.744 7.645-3.112 7.645-3.112 0 1.625-1.32 6.77-4.675 9 0.005-0.11 0.008-0.222 0.008-0.333zM22.464 17.636c-0.549 2.177-2.169 3.928-4.267 4.66l1.803 2.704c0-2.667 3.333-5.667 6-7 0 0-1.874-0.187-3.536-0.364zM16 22.667c0.686 0 1.349-0.104 1.972-0.296-0.196 1.401-1.362 3.63-1.972 3.63s-1.776-2.229-1.972-3.63c0.623 0.193 1.285 0.296 1.972 0.296zM13.788 22.291c-0.209-0.074-0.413-0.157-0.612-0.25-1.797-0.842-3.157-2.462-3.645-4.426-1.654 0.182-3.53 0.386-3.53 0.386 2.667 1.333 6 4.333 6 7 0 0 1.236-1.917 1.788-2.709zM9.333 16c0 0.080 0.001 0.159 0.004 0.238-3.352-2.469-4.671-8.159-4.671-8.904 0 0 5.209 2.368 7.645 3.112-1.795 1.195-2.979 3.236-2.979 5.554zM20 16c0 2.209-1.791 4-4 4s-4-1.791-4-4c0-2.209 1.791-4 4-4s4 1.791 4 4z"></path>
                                                        </svg><span class="svg-title">D4</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1055.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Lâmina de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 450 (180)</itemcost>
                                                                                         <itemdescription><stats>+8 de Dano de Ataque<br>+80 de Vida<br>+3% de Roubo de Vida</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1055.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3046.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Dançarina Fantasma</itemname>
                                                                                         <itemcost><span>Custo:</span> 2600 (1820)</itemcost>
                                                                                         <itemdescription><stats>+30% de Velocidade de Ataque<br>+25% de Chance de Acerto Crítico<br>+5% de Velocidade de Movimento</stats><br><br><unique>Passivo ÚNICO - Valsa Espectral:</unique> Usar um ataque básico em um Campeão concede efeito Fantasma e 7% de Velocidade de Movimento por 2s.<br><unique>Passivo ÚNICO - Salva-Vidas:</unique> Ao sofrer dano que reduziria sua Vida para menos de 30%, recebe um escudo que absorve até 240 - 600 de dano por 2s (90s de Tempo de Recarga).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3046.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1053.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Cetro Vampírico</itemname>
                                                                                         <itemcost><span>Custo:</span> 900 (630)</itemcost>
                                                                                         <itemdescription><stats>+15 de Dano de Ataque<br>+10% de Roubo de Vida</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1053.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Grevas do Berserker</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats> +35% de Velocidade de Ataque</stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1038.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Espada G. p. C.</itemname>
                                                                                         <itemcost><span>Custo:</span> 1300 (910)</itemcost>
                                                                                         <itemdescription><stats>+40 de Dano de Ataque</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1038.png" alt="" currentitem="false">
                                                        <div class="empty-item"></div><img data-tip="
                                                                                                 <itemdata>
                                                                                                 <itemleft>
                                                                                                 <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3340.png&quot;/>
                                                                                                 </itemleft>
                                                                                                 <itemright>        
                                                                                                 <itemname>Totem de Vigilância (Amuleto)</itemname>
                                                                                                 <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                                 <itemdescription><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br><active>Ativo:</active> Consome uma carga para posicionar uma Sentinela Invisível que revela a área ao seu redor por <scaleLevel>90s - 120s</scaleLevel>. <br><br>Armazena uma carga a cada <scaleLevel>240s - 120s</scaleLevel>, até 2 cargas no máximo.<br><br>A duração das sentinelas e o tempo de recarregamento melhoram gradualmente com o nível.<br><br><rules>(Limite de 3 Sentinelas Invisíveis no mapa para cada jogador.)</rules></itemdescription>
                                                                                                 </itemright>
                                                                                                 </itemdata>
                                                                                                 " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3340.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">4 / <span>3</span> / 2</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">2.00<span class="sc-hzNEM bXYsBI"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">105<span class="sc-fZwumE dfNLZR">(4,4)</span><span>CS</span></div>
                                                        <div class="match-pa-text">33% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">6.249</div>
                                                        <div class="match-detail-bar-div    ">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a order="3" class="table-order-2" href="/lol/profile/br1/ravr4">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Vayne">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Vayne</championname> <championwinrate>
                                                                                            <span>Atirador</span>: 51.4% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Vayne.png" alt="Vayne" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">11</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerHeal.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Curar</spellname>
                                                                                    <spelldescription>Cura 90 - 345 de Vida (dependendo do nível do Campeão) e concede 30% de Velocidade de Movimento por 1s a você e ao Campeão-alvo aliado. Essa cura é reduzida pela metade para unidades recentemente afetadas por outro Curar como Feitiço de Invocador.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerHeal.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 dUkBvd" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/precision/active/8005.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Pressione o Ataque</runename>
                                                                                    <runeshort>Acertar um Campeão inimigo com 3 ataques básicos consecutivos causa de 40 a 180 de <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_AdaptiveDmg'><font color='#48C4B7'>Dano Adaptativo</font></lol-uikit-tooltipped-keyword> adicional (com base no nível) e o deixa vulnerável, aumentando o dano recebido de todas as fontes em 8 a 12% por 6s.</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/precision/active/8005.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 fodUfZ" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Dominação</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/domination/tree-domination.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/RAVR4">
                                                        <div class="match-detail-summoner-name">RAVR4</div>
                                                    </div>
                                                    <div class="diamond-svg-div"><span>–</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1052.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Tomo Amplificador</itemname>
                                                                                         <itemcost><span>Custo:</span> 435 (305)</itemcost>
                                                                                         <itemdescription><stats>+20 de Poder de Habilidade</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1052.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3153.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Espada do Rei Destruído</itemname>
                                                                                         <itemcost><span>Custo:</span> 3300 (2310)</itemcost>
                                                                                         <itemdescription><stats>+40 de Dano de Ataque<br>+25% de Velocidade de Ataque<br>+12% de Roubo de Vida</stats><br><br><unique>Passivo ÚNICO:</unique> Ataques básicos causam 8% da Vida atual do alvo como Dano Físico adicional ao contato (usuários de ataque corpo a corpo causam 12%).<br><active>Ativo ÚNICO:</active> Causa 100 de Dano Mágico ao Campeão-alvo e rouba 25% de sua Velocidade de Movimento por 3s (90s de Tempo de Recarga).<br><br><rules>O mínimo de Dano Físico adicional causado é 15.<br>O máximo de Dano Físico adicional causado a monstros e tropas é 60.<br>O Roubo de Vida do usuário é aplicado ao Dano Físico adicional causado.</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3153.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1043.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Arco Recurvo</itemname>
                                                                                         <itemcost><span>Custo:</span> 1000 (700)</itemcost>
                                                                                         <itemdescription><stats>+25% de Velocidade de Ataque</stats><br><br><unique>Passivo ÚNICO:</unique> Ataques básicos causam 15 de Dano Físico adicional ao contato.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1043.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1037.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Picareta</itemname>
                                                                                         <itemcost><span>Custo:</span> 875 (613)</itemcost>
                                                                                         <itemdescription><stats>+25 de Dano de Ataque</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1037.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Grevas do Berserker</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats> +35% de Velocidade de Ataque</stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1054.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Escudo de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 450 (180)</itemcost>
                                                                                         <itemdescription><stats>+80 de Vida</stats><br><br><passive>Passivo: </passive>Restaura 6 de Vida a cada 5s.<br><passive>Passivo: </passive>Ataques básicos causam 5 de Dano Físico adicional a tropas ao contato.<br><unique>Passivo ÚNICO:</unique> Regenera até 40 de Vida por 8s após sofrer dano de um Campeão inimigo, com base no percentual de Vida perdida. (66% de efetividade para Campeões de ataque à distância, área de ação e ativações periódicas de dano).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1054.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Alteração Vidente</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><levelLimit>Requer nível 9+ para aprimorar.</levelLimit><br><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br>Altera o amuleto Totem de Vigilância:<br><br><stats>+ Aumenta drasticamente o alcance de conjuração (+650%)<br>+ Duração infinita e não conta no limite total de sentinelas<br>- 10% de aumento do Tempo de Recarga<br>- A sentinela é visível, frágil e não pode ser selecionada por aliados<br>- 45% de redução do raio de visão da sentinela<br>- Não pode armazenar cargas</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">4 / <span>4</span> / 4</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">2.00<span class="sc-hzNEM bXYsBI"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">125<span class="sc-fZwumE dfNLZR">(5,3)</span><span>CS</span></div>
                                                        <div class="match-pa-text">44% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">8.696</div>
                                                        <div class="match-detail-bar-div">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a order="3" class="table-order-2" href="/lol/profile/br1/ravr4">
                                                <div class="match-players-hiperlink">
                                                    <div class="champion-hiperlink" href="/lol/champions/Vayne">
                                                        <div class="position-relative">
                                                            <div class="match-sub-sub"><img size="32" class="match-detail-champ-img" data-tip="<championname>Vayne</championname> <championwinrate>
                                                                                            <span>Atirador</span>: 51.4% Vitórias
                                                                                            </championwinrate>" src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/champion/Vayne.png" alt="Vayne" currentitem="false"></div>
                                                            <div size="32" class="player-match-level">
                                                                <div class="player-match-level-number">11</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="player-spells"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Flash</spellname>
                                                                                    <spelldescription>Teleporta seu Campeão por uma curta distância em direção ao seu cursor.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerFlash.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"><img data-tip="
                                                                                    <spelldata>
                                                                                    <spellleft>
                                                                                    <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerHeal.png&quot;/>
                                                                                    </spellleft>
                                                                                    <spellright>
                                                                                    <spellname>Curar</spellname>
                                                                                    <spelldescription>Cura 90 - 345 de Vida (dependendo do nível do Campeão) e concede 30% de Velocidade de Movimento por 1s a você e ao Campeão-alvo aliado. Essa cura é reduzida pela metade para unidades recentemente afetadas por outro Curar como Feitiço de Invocador.</spelldescription>
                                                                                    </spellright>
                                                                                    </spelldata>
                                                                                    " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/spell/SummonerHeal.png" alt="" class="MatchItemDetailedStatsPlayer__StyledSpellImg-sc-1suizl8-4 crQAYF sc-chbbiW kgPivM" currentitem="false"></div>
                                                    <div class="player-spells"><img class="MatchItemDetailedStatsPlayer__StyledRuneImg-sc-1suizl8-2 kIspfv RuneImg__RuneImage-xxrdhy-0 dUkBvd" data-tip="
                                                                                    <runedata>
                                                                                    <runeleft>
                                                                                    <img src=&quot;https://blitz-cdn.blitz.gg/runes/precision/active/8005.png&quot; />
                                                                                    </runeleft>
                                                                                    <runeright>
                                                                                    <runename>Pressione o Ataque</runename>
                                                                                    <runeshort>Acertar um Campeão inimigo com 3 ataques básicos consecutivos causa de 40 a 180 de <lol-uikit-tooltipped-keyword key='LinkTooltip_Description_AdaptiveDmg'><font color='#48C4B7'>Dano Adaptativo</font></lol-uikit-tooltipped-keyword> adicional (com base no nível) e o deixa vulnerável, aumentando o dano recebido de todas as fontes em 8 a 12% por 6s.</runeshort>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runeright>
                                                                                    </runedata>
                                                                                    " data-delay-show="600" src="https://blitz-cdn.blitz.gg/runes/precision/active/8005.png" currentitem="false"><img class="MatchItemDetailedStatsPlayer__StyledTreeImg-sc-1suizl8-3 hRzdBi TreeImg__TreeImage-sc-12zufps-0 fodUfZ" data-tip="
                                                                                    <runedata>
                                                                                    <runetreedata>
                                                                                    <runetreename>Dominação</runetreename>
                                                                                    <cta>Ver todas as Runas</cta>
                                                                                    </runetreedata>
                                                                                    </runedata>
                                                                                    " src="https://blitz-cdn.blitz.gg/runes/domination/tree-domination.png" size="24" currentitem="false"></div>
                                                    <div href="/lol/profile/br1/RAVR4">
                                                        <div class="match-detail-summoner-name">RAVR4</div>
                                                    </div>
                                                    <div class="diamond-svg-div"><span>–</span></div>
                                                    <div class="match-detail-items"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1052.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Tomo Amplificador</itemname>
                                                                                         <itemcost><span>Custo:</span> 435 (305)</itemcost>
                                                                                         <itemdescription><stats>+20 de Poder de Habilidade</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1052.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3153.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Espada do Rei Destruído</itemname>
                                                                                         <itemcost><span>Custo:</span> 3300 (2310)</itemcost>
                                                                                         <itemdescription><stats>+40 de Dano de Ataque<br>+25% de Velocidade de Ataque<br>+12% de Roubo de Vida</stats><br><br><unique>Passivo ÚNICO:</unique> Ataques básicos causam 8% da Vida atual do alvo como Dano Físico adicional ao contato (usuários de ataque corpo a corpo causam 12%).<br><active>Ativo ÚNICO:</active> Causa 100 de Dano Mágico ao Campeão-alvo e rouba 25% de sua Velocidade de Movimento por 3s (90s de Tempo de Recarga).<br><br><rules>O mínimo de Dano Físico adicional causado é 15.<br>O máximo de Dano Físico adicional causado a monstros e tropas é 60.<br>O Roubo de Vida do usuário é aplicado ao Dano Físico adicional causado.</rules></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3153.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1043.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Arco Recurvo</itemname>
                                                                                         <itemcost><span>Custo:</span> 1000 (700)</itemcost>
                                                                                         <itemdescription><stats>+25% de Velocidade de Ataque</stats><br><br><unique>Passivo ÚNICO:</unique> Ataques básicos causam 15 de Dano Físico adicional ao contato.</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1043.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1037.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Picareta</itemname>
                                                                                         <itemcost><span>Custo:</span> 875 (613)</itemcost>
                                                                                         <itemdescription><stats>+25 de Dano de Ataque</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1037.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Grevas do Berserker</itemname>
                                                                                         <itemcost><span>Custo:</span> 1100 (770)</itemcost>
                                                                                         <itemdescription><groupLimit>Limite de 1 par de botas.</groupLimit><br><br><stats> +35% de Velocidade de Ataque</stats><br><br><unique>Passivo ÚNICO - Movimento Aprimorado:</unique> +45 de Velocidade de Movimento</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3006.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1054.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Escudo de Doran</itemname>
                                                                                         <itemcost><span>Custo:</span> 450 (180)</itemcost>
                                                                                         <itemdescription><stats>+80 de Vida</stats><br><br><passive>Passivo: </passive>Restaura 6 de Vida a cada 5s.<br><passive>Passivo: </passive>Ataques básicos causam 5 de Dano Físico adicional a tropas ao contato.<br><unique>Passivo ÚNICO:</unique> Regenera até 40 de Vida por 8s após sofrer dano de um Campeão inimigo, com base no percentual de Vida perdida. (66% de efetividade para Campeões de ataque à distância, área de ação e ativações periódicas de dano).</itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/1054.png" alt="" currentitem="false"><img data-tip="
                                                                                         <itemdata>
                                                                                         <itemleft>
                                                                                         <img src=&quot;https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png&quot;/>
                                                                                         </itemleft>
                                                                                         <itemright>        
                                                                                         <itemname>Alteração Vidente</itemname>
                                                                                         <itemcost><span>Custo:</span> 0 (0)</itemcost>
                                                                                         <itemdescription><levelLimit>Requer nível 9+ para aprimorar.</levelLimit><br><groupLimit>Limitado a 1 amuleto.</groupLimit><br><br>Altera o amuleto Totem de Vigilância:<br><br><stats>+ Aumenta drasticamente o alcance de conjuração (+650%)<br>+ Duração infinita e não conta no limite total de sentinelas<br>- 10% de aumento do Tempo de Recarga<br>- A sentinela é visível, frágil e não pode ser selecionada por aliados<br>- 45% de redução do raio de visão da sentinela<br>- Não pode armazenar cargas</stats></itemdescription>
                                                                                         </itemright>
                                                                                         </itemdata>
                                                                                         " src="https://ddragon.leagueoflegends.com/cdn/10.9.1/img/item/3363.png" alt="" currentitem="false"></div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">4 / <span>4</span> / 4</div>
                                                        <div class="font-size-10">
                                                            <div class="kda-color">2.00<span class="sc-hzNEM bXYsBI"> AMA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="match-detail-text">
                                                        <div class="match-detail-kda">125<span class="sc-fZwumE dfNLZR">(5,3)</span><span>CS</span></div>
                                                        <div class="match-pa-text">44% PA</div>
                                                    </div>
                                                    <div class="match-detail-damage-bar">
                                                        <div data-tip="Dano causado a campeões" class="match-detail-kda" currentitem="false">8.696</div>
                                                        <div class="match-detail-bar-div">
                                                            <div class="match-detail-bar-color"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
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
