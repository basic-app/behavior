<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Behavior;

abstract class BaseBehavior implements BehaviorInterface
{

    protected $owner;

    public function __construct($owner, array $config = [])
    {
        $this->owner = $owner;

        foreach($data as $key => $value)
        {
            $this->$key = $value;
        }
    }

}