<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class FirstController
{

    public function info($formation, $formateur)
 {
 return new Response(
 '<html><body> Formation : '.$formation.' Formateur
:'.$formateur.'</body></html>'
 );
 } 
} 
?>