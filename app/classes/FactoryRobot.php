<?php


class FactoryRobot
{
    protected $methods;

    /**
     * @param RobotInterface $robot
     */
    public function addType(RobotInterface $robot)
    {
        $typeRobot = get_class($robot);
        $this->methods["create$typeRobot"] = $robot;
    }

    /**
     * @throws Exception
     */
    public function __call($name, $args)
    {
        if (!isset($this->methods[$name])){
            throw new Exception("Type not found");
        }else{
            $objects = [];

            if (!empty($args)){
                for ($i = 0; $i < $args[0]; $i++) {
                    $objects[] = clone($this->methods[$name]);
                }
            }else{
                $objects[] = clone($this->methods[$name]);
            }
        }
        return $objects;

    }

}