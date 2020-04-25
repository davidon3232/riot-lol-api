<?php include('inc/header.php') ?>
<div class="s013">
    <form>
        <fieldset>
            <legend>RIOT LOL API</legend>
        </fieldset>
        <div class="inner-form">
            <div class="left">
                <div class="input-wrap first">
                    <div class="input-field first">
                        <label>Summoner Name</label>
                        <input type="text" placeholder="ex: DavidOn" />
                    </div>
                </div>
                <div class="input-wrap second">
                    <div class="input-field second">
                        <label>Region</label>
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="">1 adult</option>
                                <option>2 adults</option>
                                <option>3 adults</option>
                                <option>4 adults</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-search" type="button">SEARCH</button>
        </div>
    </form>
</div>
<?php include('inc/footer.php') ?>
