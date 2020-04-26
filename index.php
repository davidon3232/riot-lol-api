<?php include('inc/header.php');
$a = new Summoner();
var_dump($a->getSummoner());
?>
<div class="s013">
    <form method="POST" id="form-search">
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
                                <option>1 adult</option>
                                <option>2 adults</option>
                                <option>3 adults</option>
                                <option>4 adults</option>
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
