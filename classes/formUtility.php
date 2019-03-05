<?php
/**********Class FormUtility : classe permettant de : *****
 * -Générer le HTML du formulaire
 * -Effectuer des contrôles sur les variables POST
 * ********* */
class FormUtility
{
public function generateHTML(
        string $label,
        string $type,
        string $id,
        ?string $placeholder=''
):string{
        //l'eventuel message d'erreur
        $oldValue = (isset($_POST[$id])) ? $_POST[$id] : '';
        //On vérifie le type pour fournir soit :
        //Un input : text , number
        //Un text area :textarea
        switch($type){
        case 'text':
        case 'number':
               $widget = $this->getHTMLInput($type,$id,$oldValue,$placeholder);
         break;
         case 'textarea':
               $widget = $this->getHTMLTextArea($id,$oldValue,$placeholder);
        break;
                        default;
                        die('Le type donné est inconnu');
        }

    return <<<EOT
    <div class="form-group">
    <label for="$id">$label</label>
    $widget
 </div>
EOT;
        }



private function getHTMLInput(string $type, string $id , string $oldValue , ?string $placeholder){
        return <<<EOT
<input type="$type" id="$id" name="$id" class="form-control" 
placeholder="$placeholder" value="$oldValue"/>
 </div>
EOT;

}

private function getHTMLTextArea(string $id , string $oldValue , ?string $placeholder=''){
        return <<<EOT
<textarea id="$id" name="$id" class="form-control" 
placeholder="$placeholder"/>
$oldValue
 </div>
EOT;


}

}


?>