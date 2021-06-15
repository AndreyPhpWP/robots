<?php


class UnionRobot implements RobotInterface
{
    protected $robots = [];

    /**
     * @param $robots
     * @throws Exception
     */
    public function addRobot($robots)
    {

        if (!is_array($robots)){
            $robots = [$robots];
        }

        foreach ($robots as $robot) {
            if (!($robot instanceof RobotInterface)) {
                throw new Exception("Not a robot");
            }
        }
        $this->robots = array_merge($this->robots, $robots);
    }

    /**
     * @inheritDoc
     */
    public function getSpeed()
    {
        return min(array_map(function ($robot) {
            return $robot->getSpeed();
        }, $this->robots));
    }

    /**
     * @inheritDoc
     */
    public function getWeight()
    {
        return array_sum(array_map(function ($robot) {
            return $robot->getWeight();
        }, $this->robots));
    }

    /**
     * @inheritDoc
     */
    public function getHeight()
    {
        return array_sum(array_map(function ($robot) {
            return $robot->getHeight();
        }, $this->robots));
    }
}