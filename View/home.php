<?php $this->layout('template') ?>
<div class="s013">
    <form action="<?= BASE ?>search" class="form-search" method="POST">
        <fieldset>
            <legend>Informações do Invocador</legend>
        </fieldset>
        <div class="inner-form">
            <div class="left">
                <div class="input-wrap first">
                    <div class="input-field first">
                        <label class="form-label">Nome de invocador</label>
                        <input type="text" id="keyword" name="keyword" placeholder="ex: DavidOn" required>
                    </div>
                </div>
                <div class="input-wrap second">
                    <div class="input-field second">
                        <label class="form-label">Região</label>
                        <div class="input-select">
                            <select id="region" data-trigger="" name="region" required>
                                <option value="">Regions</option>
                                <option value="br1">Brazil</option>
                                <option value="kr">Korea</option>
                                <option value="jp1">Japan</option>
                                <option value="na1">North America</option>
                                <option value="euw1">Europe West</option>
                                <option value="eun1">Europe Nordic</option>
                                <option value="oc1">Oceania</option>
                                <option value="la1">Lan</option>
                                <option value="la2">Las</option>
                                <option value="ru">Russia</option>
                                <option value="tr1">Turkey</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-search" type="submit">SEARCH</button>
        </div>
    </form>
</div>

