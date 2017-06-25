<?php
namespace Akburko\Processing;

use Silex\ServiceProviderInterface;
use Silex\Application;

class ProcessingServiceProvider implements ServiceProviderInterface {
    public function register(Application $app) {
        return new Object();
    }
    public function boot(Application $app) {

    }
}

/**
 * Object main class.
 *
 * @package akburko
 * @author  Alexander Burko
 */
class Object
{

    public function __construct()
    {

    }

    function getName()
    {
        return 'Processing';
    }
}
