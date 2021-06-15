<?php


interface RobotInterface
{
    /**
     * @return int
     */
    function getSpeed();

    /**
     * @return int
     */
    function getWeight();

    /**
     * @return int
     */
    function getHeight();
}