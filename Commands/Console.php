<?php namespace Vulcan\Commands;

use CodeIgniter\CLI\BaseCommand;
use Psy\Configuration as PsyConfiguration;
use Psy\Shell as PsyShell;

/**
 * Creates a skeleton Controller
 *
 * @package Vulcan\Commands
 */
class MakeController extends BaseCommand
{
    protected $group = 'Vulcan';

    /**
     * The Command's name
     *
     * @var string
     */
    protected $name = 'console';

    /**
     * the Command's short description
     *
     * @var string
     */
    protected $description = 'Interact with your application.';

    /**
     * Creates a skeleton controller file.
     */
    public function run(array $params=[])
    {
      try {
        // TODO: Create a method that configures the Psy\Shell
        $config = new PsyConfiguration;
        $shell = new PsyShell($config);

        // TODO: Here we need to set CI as a scope variable
        $shell->setScopeVariables([]);
        $shell->run();
      } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
      }
    }
}
