<div class="container clearfix">
    <form method="post">
        <div class="content clearfix char-name">
            <div class="name-field text-entry">
                <input type="text" name="characterName"
                       value="<?php echo $characterName; ?>"/>
                <label>Character Name</label>
            </div>
        </div>

        <div class="content clearfix char-details">
            <div class="class text-entry">
                <input type="text" name="class"
                       value="<?php echo $class; ?>" />
                <label>Class</label>
            </div>

            <div class="level text-entry">
                <input type="number" min="1" name="level"
                       value="<?php echo $level; ?>" />
                <label>Level</label>
            </div>

            <div class="race text-entry">
                <input type="text" name="race"
                       value="<?php echo $race; ?>" />
                <label>Race</label>
            </div>

            <div class="alignment text-entry">
                <input type="text" name="alignment"
                       value="<?php echo $alignment; ?>" />
                <label>Alignment</label>
            </div>
        </div>

        <div class="content clearfix char-status">
            <div class="container ac-initiative-speed">
                <div class="armor-class text-entry">
                    <input type="number" name="armorClass"
                           value="<?php echo $armorClass; ?>" />
                    <label>Armor Class</label>
                </div>
                <div class="initiative text-entry">
                    <input type="number" name="initiative"
                           value="<?php echo $initiative; ?>" />
                    <label>Initiative</label>
                </div>
                <div class="speed text-entry">
                    <input type="number" name="speed"
                           value="<?php echo $speed; ?>" />
                    <label>Speed</label>
                </div>
            </div>

            <div class="container health">
                <div class="max-health text-entry">
                    <input type="number" min="1" name="maxHealth"
                           value="<?php echo $maxHealth; ?>" />
                    <label>Max Health</label>
                </div>
                <div class="current-health text-entry">
                    <input type="number" min="0" name="currentHealth"
                           value="<?php echo $currentHealth; ?>" />
                    <label>Current Health</label>
                </div>
            </div>
        </div>

        <div class="content clearfix char-attributes">
            <div class="attr-field">
                <div class="attr number-entry">
                    <label>STR</label>
                    <input type="number" min="1" name="str"
                           value="<?php echo $str; ?>" />
                </div>

                <div class="attr number-entry">
                    <label>CON</label>
                    <input type="number" min="1" name="con"
                           value="<?php echo $con; ?>" />
                </div>

                <div class="attr number-entry">
                    <label>DEX</label>
                    <input type="number" min="1" name="dex"
                           value="<?php echo $dex; ?>" />
                </div>

                <div class="attr number-entry">
                    <label>CHA</label>
                    <input type="number" min="1" name="cha"
                           value="<?php echo $cha; ?>" />
                </div>

                <div class="attr number-entry">
                    <label>INT</label>
                    <input type="number" min="1" name="int"
                           value="<?php echo $int; ?>" />
                </div>

                <div class="attr number-entry">
                    <label>WIS</label>
                    <input type="number" min="1" name="wis"
                           value="<?php echo $wis; ?>" />
                </div>
            </div>
        </div>
        <input type="hidden" name="action" value="submit_sheet" />
        <input type="submit" value="Submit" />
    </form>
</div>