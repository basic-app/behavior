<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Behavior;

use Exception;

trait BehaviorsTrait
{

    protected $behaviors = [];

    public function as(string $name)
    {
        $behaviors = $this->behaviors;

        if (!array_key_exists($name, $behaviors))
        {
            throw new Exception(lang('Behavior not found: %s', $name));
        }

        $return = $this->behaviors[$name];

        if (is_array($return))
        {
            if (!array_key_exists('class', $return))
            {
                throw new Exception(lang('Behavior "%s" class not defined.', $name));
            }

            $class = $return['class'];

            unset($return['class']);

            $return = new $class($this, $return);

            $this->behaviors[$name] = $return;
        }

        return $this->behaviors[$name];
    }

    public function getBehaviors() : array
    {
        $return = [];

        foreach(array_keys($this->behaviors) as $name)
        {
            $return[$name] = $this->as($name);
        }

        return $return;
    }

}