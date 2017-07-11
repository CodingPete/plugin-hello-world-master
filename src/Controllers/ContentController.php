<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Log\Loggable;
use Plenty\Plugin\Templates\Twig;

/**
 * Class ContentController
 * @package HelloWorld\Controllers
 */
class ContentController extends Controller
{
    use Loggable;
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function sayHello(Twig $twig):string
	{
	    $this->getLogger("ContentController_sayHello")->debug("Hallo Welt!");
	    var_dump("hallo");
		return $twig->render('HelloWorld::content.hello');
	}
}
