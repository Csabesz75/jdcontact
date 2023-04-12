<?php

/*------------------------------------------------------------------------
# J DContact
# ------------------------------------------------------------------------
# author                Md. Shaon Bahadur
# copyright             Copyright (C) 2014 j-download.com. All Rights Reserved.
# @license -            http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites:             http://www.j-download.com
# Technical Support:    http://www.j-download.com/request-for-quotation.html
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

class modJdcontactHelper
{
	static function preLoadprocess(&$params)
	{
         if($_POST){
            $javascript_enabled         =       trim($_REQUEST['browser_check']);
            $department                 =       trim($_REQUEST['dept']);
            $name                       =       trim($_REQUEST['name']);
            $email                      =       trim($_REQUEST['email']);
            $phno                       =       trim($_REQUEST['phno']);
            /*$subject                    =       trim($_REQUEST['subject']);*/
            $msg                        =       trim($_REQUEST['msg']);
    $alba_address            =        $params->get( 'alba_address', 'sibiu@cupe-medalii.ro' );
	//$alba_address            =        $params->get( 'alba_address', 'csabesz75@yahoo.com' );
	$arad_address              =       $params->get( 'arad_address', 'raluca@trofee.ro' );
	$arges_address             =       $params->get( 'arges_address', 'sibiu@cupe-medalii.ro' );
	$bacau_address             =       $params->get( 'bacau_address', 'timea@trofee.ro' );
	$bihor_address             =       $params->get( 'bihor_address', 'attila@trofee.ro' );
	$bistrita_nasaud_address   =       $params->get( 'bistrita_nasaud_address', 'raluca@trofee.ro' );
	$botosani_address          =       $params->get( 'botosani_address', 'timea@trofee.ro' );
	$braila_address            =       $params->get( 'braila_address', 'mihaela@trofee.ro' );
	$brasov_address            =       $params->get( 'brasov_address', 'sibiu@cupe-medalii.ro' );
	$bucuresti_address_sec1    =       $params->get( 'bucuresti_address_sec1', 'ioana@trofee.ro' );
	$bucuresti_address_sec2    =       $params->get( 'bucuresti_address_sec2', 'ioana@trofee.ro' );
	$bucuresti_address_sec3    =       $params->get( 'bucuresti_address_sec3', 'carmen@trofee.ro' );
	$bucuresti_address_sec4    =       $params->get( 'bucuresti_address_sec4', 'carmen@trofee.ro' );
	$bucuresti_address_sec5    =       $params->get( 'bucuresti_address_sec5', 'orlando@trofee.ro' );
	$bucuresti_address_sec6    =       $params->get( 'bucuresti_address_sec6', 'orlando@trofee.ro' );
	$buzau_address             =       $params->get( 'buzau_address', 'raluca@trofee.ro' );
	$calarasi_address          =       $params->get( 'calarasi_address', 'orlando@trofee.ro' );
	$caras_severin_address     =       $params->get( 'caras_severin_address', 'mihaela@trofee.ro' );
	$cluj_address              =       $params->get( 'cluj_address', 'attila@trofee.ro' );
	$constanta_address         =       $params->get( 'constanta_address', 'ioana@trofee.ro' );
	$covasna_address           =       $params->get( 'covasna_address', 'raluca@trofee.ro' );
	$dambovita_address         =       $params->get( 'dambovita_address', 'sibiu@cupe-medalii.ro' );
	$dolj_address              =       $params->get( 'dolj_address', 'carmen@trofee.ro' );
	$galati_address            =       $params->get( 'galati_address', 'raluca@trofee.ro' );
	$giurgiu_address           =       $params->get( 'giurgiu_address', 'carmen@trofee.ro' );
	$gorj_address              =       $params->get( 'gorj_address', 'sibiu@cupe-medalii.ro' );
	$harghita_address          =       $params->get( 'harghita_address', 'attila@trofee.ro' );
	$hunedoara_address         =       $params->get( 'hunedoara_address', 'sibiu@cupe-medalii.ro' );
	$ialomita_address          =       $params->get( 'ialomita_address', 'ioana@trofee.ro' );
	$iasi_address              =       $params->get( 'iasi_address', 'timea@trofee.ro' );
	$ilfov_address             =       $params->get( 'ilfov_address', 'orlando@trofee.ro' );
	$maramures_address         =       $params->get( 'maramures_address', 'attila@trofee.ro' );
	$mehedinti_address         =       $params->get( 'mehedinti_address', 'orlando@trofee.ro' );
	$mures_address             =       $params->get( 'mures_address', 'timea@trofee.ro' );
	$neamt_address             =       $params->get( 'neamt_address', 'attila@trofee.ro' );
	$olt_address               =       $params->get( 'olt_address', 'orlando@trofee.ro' );
	$prahova_address           =       $params->get( 'prahova_address', 'sibiu@cupe-medalii.ro' );
	$salaj_address             =       $params->get( 'salaj_address', 'timea@trofee.ro' );
	$satu_mare_address         =       $params->get( 'satu_mare_address', 'attila@trofee.ro' );
	$sibiu_address             =       $params->get( 'sibiu_address', 'sibiu@cupe-medalii.ro' );
	$suceava_address           =       $params->get( 'suceava_address', 'attila@trofee.ro' );
	$teleorman_address         =       $params->get( 'teleorman_address', 'carmen@trofee.ro' );
	$timis_address             =       $params->get( 'timis_address', 'raluca@trofee.ro' );
	$tulcea_address            =       $params->get( 'tulcea_address', 'ioana@trofee.ro' );
	$valcea_address            =       $params->get( 'valcea_address', 'sibiu@cupe-medalii.ro' );
	$vaslui_address            =       $params->get( 'vaslui_address', 'mihaela@trofee.ro' );
	$vrancea_address           =       $params->get( 'vrancea_address', 'raluca@trofee.ro' );
            $selfcopy                   =       isset($_REQUEST['selfcopy']) ? $_REQUEST['selfcopy'] : "";
            $humantest                  =       $_REQUEST['human_test'];
            $sum_test                   =       $_REQUEST['sum_test'];
            $humantestpram              =        $params->get( 'humantestpram', '1' );
            $headers  = 'MIME-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
            $headers .= 'From: '.$name.' <'.$email.'>'."\r\n";
			$headers .= "BCC: infinitytrophy@yahoo.com\r\n"; 
			$product_id=JRequest::getInt('product_id',0);

			$doc = JFactory::getDocument(); 
$page_title = $doc->getTitle();
$uri = JFactory::getURI();
$absolute_url = $uri->toString();
$linkback="$page_title $absolute_url";
			
			
            $message = "Nume contact: $name\nEmail contact: $email\nNr. Telefon: $phno\nJudet: $department\n\nMesaj: $msg\n\nTermenile pentru GDPR acceptate";

			$message=$message."\n\nSolicitare de pe pagina:\n".$linkback;
        	if ( $department == "bucuresti_sec1")    $to     =   $bucuresti_address_sec1;
			elseif ( $department == "alba")  	$to     =   $alba_address;
			elseif ( $department == "arad")  	$to     =   $arad_address;
			elseif ( $department == "arges") 	$to     =   $arges_address;
			elseif ( $department == "bacau") 	$to     =   $bacau_address;
			elseif ( $department == "bihor")    $to     =   $bihor_address;
			elseif ( $department == "bistrita_nasaud")  $to     =   $bistrita_nasaud_address;
			elseif ( $department == "botosani") $to     =   $botosani_address;
			elseif ( $department == "braila")  $to     =   $braila_address;
			elseif ( $department == "brasov")  $to     =   $brasov_address;
			elseif ( $department == "bucuresti_sec2")  $to     =   $bucuresti_address_sec2;
			elseif ( $department == "bucuresti_sec3")  $to     =   $bucuresti_address_sec3;
			elseif ( $department == "bucuresti_sec4")  $to     =   $bucuresti_address_sec4;
			elseif ( $department == "bucuresti_sec5")  $to     =   $bucuresti_address_sec5;
			elseif ( $department == "bucuresti_sec6")  $to     =   $bucuresti_address_sec6;
			elseif ( $department == "buzau")  $to     =   $buzau_address;
			elseif ( $department == "calarasi")  $to     =   $calarasi_address;
			elseif ( $department == "caras_severin")  $to     =   $caras_severin_address;
			elseif ( $department == "cluj")  $to     =   $cluj_address;
			elseif ( $department == "constanta")  $to     =   $constanta_address;
			elseif ( $department == "covasna")  $to     =   $covasna_address;
			elseif ( $department == "dambovita")  $to     =   $dambovita_address;
			elseif ( $department == "dolj")  $to     =   $dolj_address;
			elseif ( $department == "galati")  $to     =   $galati_address;
			elseif ( $department == "giurgiu")  $to     =   $giurgiu_address;
			elseif ( $department == "gorj")  $to     =   $gorj_address;
			elseif ( $department == "harghita")  $to     =   $harghita_address;
			elseif ( $department == "hunedoara")  $to     =   $hunedoara_address;
			elseif ( $department == "ialomita")  $to     =   $ialomita_address;
			elseif ( $department == "iasi")  $to     =   $iasi_address;
			elseif ( $department == "ilfov")  $to     =   $ilfov_address;
			elseif ( $department == "maramures")  $to     =   $maramures_address;
			elseif ( $department == "mehedinti")  $to     =   $mehedinti_address;
			elseif ( $department == "mures")  $to     =   $mures_address;
			elseif ( $department == "neamt")  $to     =   $neamt_address;
			elseif ( $department == "olt")  $to     =   $olt_address;
			elseif ( $department == "prahova")  $to     =   $prahova_address;
			elseif ( $department == "salaj")  $to     =   $salaj_address;
			elseif ( $department == "satu_mare")  $to     =   $satu_mare_address;
			elseif ( $department == "sibiu")  $to     =   $sibiu_address;
			elseif ( $department == "suceava")  $to     =   $suceava_address;
			elseif ( $department == "teleorman")  $to     =   $teleorman_address;
			elseif ( $department == "timis")  $to     =   $timis_address;
			elseif ( $department == "tulcea")  $to     =   $tulcea_address;
			elseif ( $department == "valcea")  $to     =   $valcea_address;
			elseif ( $department == "vaslui")  $to     =   $vaslui_address;
			elseif ( $department == "vrancea")  $to     =   $vrancea_address;
            /*else                                $to     =   $bucuresti_address;*/
			//$to= $to.",Bcc: infinitytrophy@yahoo.com"; 

        	if ( $name == "" )
        	{
        		$result = "".JText::_('MOD_JDCONTACT_VLDNAME')."";
        	}
        	elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email))
        	{
        		$result = "".JText::_('MOD_JDCONTACT_VALIDEMAIL')."";
        	}
        	else if($phno=="")
        	{
        		$result = "".JText::_('MOD_JDCONTACT_PHONENUMB')."";
        	}
        	/*elseif ( $subject == "" )
        	{
        		$result = "".JText::_('MOD_JDCONTACT_MSGSUBJECT')."";
        	}*/
			elseif ($department == "")
			{
        		$result = "".JText::_('MOD_JDCONTACT_JUDET')."";
        	}
        	elseif ( strlen($msg) < 10 )
        	{
        		$result = "".JText::_('MOD_JDCONTACT_MORETENWRD')."";
        	}
			else if (!isset($_POST['gdpr'])){
				$result = "".JText::_('MOD_JDCONTACT_GDPR_MUST')."";
			}
            else if($humantestpram=='1' && $humantest!=$sum_test){
        	    $result = "".JText::_('MOD_JDCONTACT_CORRECTNUM')."";
            }
        	else
        	{	
				$mailer = JFactory::getMailer();
				$sender = array("info@cupe-medalii.ro", "Cupe Medalii Trofee | Gravura, Print Digital | Infinity Trophy");
				$mailer->setSender($sender);
				$mailer->addReplyTo($email, $name);
				$mailer->addRecipient($to);
				$mailer->addBCC("infinitytrophy@yahoo.com");
				$mailer->setSubject(' Pagina cupe-medalii '.$page_title);
				$mailer->setBody($message);
				
				$send = $mailer->Send();
				if ( $send !== true ) {
					$result = 'Error sending email: ' . $send->__toString();
					$result = "".JText::_('MOD_JDCONTACT_MAILSERVPROB')."";
				} else {
					$result='<div class="width100 center"><div class="harta">' . JText::_("MOD_JDCONTACT_SUCCESSMSG") . '</div><img src="https://sp.analytics.yahoo.com/spp.pl?a=10001038764004&.yp=437615"/></div>';
				}
				
				if( $selfcopy == "yes" ){
					$mailer = JFactory::getMailer();
					$sender = array("info@cupe-medalii.ro", "Cupe Medalii Trofee | Gravura, Print Digital | Infinity Trophy");
					$mailer->setSender($sender);
					
					$mailer->addRecipient($email);
					
					$mailer->setSubject(' Pagina cupe-medalii '.$page_title);
					$mailer->setBody($message);
					
					$send = $mailer->Send();
				
				}
				
				if ( $send !== true ) {
					$result = 'Error sending email: ' . $send->__toString();
					$result = "".JText::_('MOD_JDCONTACT_MAILSERVPROB')."";
				} else {
					$result='<div class="width100 center">' . JText::_("MOD_JDCONTACT_SUCCESSMSG") . '<img src="https://sp.analytics.yahoo.com/spp.pl?a=10001038764004&.yp=437615"/></div>';
				}
				/*
        	    //if(@mail($to, $subject, $message, $headers)){
				if(@mail($to, $subject.' Pagina cupe-medalii '.$page_title, $message, $headers)){
                    $sucs=1;
        	    }
        		if( $selfcopy == "yes" ){
        		    if(@mail($email, $subject, $message, $headers)){
                        $sucs=1;
        		    }
                }
                if($sucs==1){
        		    //$result = "".JText::_('MOD_JDCONTACT_SUCCESSMSG')."";
					$result='<div class="width100 center"><div class="harta">' . JText::_("MOD_JDCONTACT_SUCCESSMSG") . '</div></div>';
                }
                else{
                    $result = "".JText::_('MOD_JDCONTACT_MAILSERVPROB')."";
					//$result .= $to." - ".$subject.' Pagina cupe-medalii '.$page_title." - ".$message. " - ".$headers;
                }*/
        	}
			ob_end_clean();
        	if($javascript_enabled == "true") {
        		echo $result;
        		die();
        	}
        }
	}
}

?>