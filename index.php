<?php include('inc/header.php'); ?>
<div class="s013">
    <form class="form-search" method="POST">
        <fieldset>
            <legend>SEARCH FOR YOUR SUMMONER INFOS</legend>
        </fieldset>
        <div class="inner-form">
            <div class="left">
                <div class="input-wrap first">
                    <div class="input-field first">
                        <label class="form-label">Summoner Name</label>
                        <input type="text" id="keyword" name="keyword" placeholder="ex: DavidOn" required>
                    </div>
                </div>
                <div class="input-wrap second">
                    <div class="input-field second">
                        <label class="form-label">Region</label>
                        <div class="input-select">
                            <select id="region" data-trigger="" name="region" required>
                                <option value="">Regions</option>
                                <option value="BR1">Brazil</option>
                                <option value="KR">Korea</option>
                                <option value="JP1">Japan</option>
                                <option value="NA1">North America</option>
                                <option value="EUW1">Europe West</option>
                                <option value="EUN1">Europe Nordic</option>
                                <option value="OC1">Oceania</option>
                                <option value="LA1">Lan</option>
                                <option value="LA2">Las</option>
                                <option value="RU">Russia</option>
                                <option value="TR1">Turkey</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-search" type="submit">SEARCH</button>
        </div>
    </form>
</div>
<?php include('inc/footer.php') ?>
