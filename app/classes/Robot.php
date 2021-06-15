<?php


class Robot implements RobotInterface
{
    protected int $speed;
    protected int $weight;
    protected int $height;

    /**
     * @inheritDoc
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @inheritDoc
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @inheritDoc
     */
    public function getHeight()
    {
        return $this->height;
    }
}