<?php  if(!defined('PLX_ROOT')) exit;
class MonPlugin extends plxPlugin {
 
    public function __construct($default_lang){
    # Appel du constructeur de la classe plxPlugin (obligatoire)
    parent::__construct($default_lang);

    # Déclaration des hooks
    $this->addHook('plxShowStaticContent', 'plxShowStaticContent');
    } 
    
	# methode qui modifie la fonction $plxShow->staticContent())
    public function plxShowStaticContent() { 		
		# insertion des commentaires et formulaire			
		echo '<?php';
		?>   
		ob_start();
		include( PLX_PLUGINS.'MonPlugin/include.commentaire.php');
		$output .= ob_get_clean();
		<?php
		echo'?>';
     
    }
}