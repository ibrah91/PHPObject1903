<?php
/**********Class FormUtility : classe permettant de : *****
 * -Générer le HTML du formulaire
 * -Effectuer des contrôles sur les variables POST
 * ********* */
class FormUtility
{
public function generateHTML(): string {
    return <<<EOT
    <div class="form-group">
    <label for ="item">Label</label>
    <input type="text" id="item"
 class="form-control"/>
 </div>
EOT;
        }
}


?>