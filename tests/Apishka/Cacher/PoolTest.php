<?php

/**
 * Apishka test cacher pool test
 */

class ApishkaTest_Cacher_PoolTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Get pool
     *
     * @return Apishka_Cacher_Pool
     */

    protected function getPool()
    {
        return new Apishka_Cacher_Pool();
    }

    /**
     * Test is sent
     */

    public function testBasic()
    {
        $pool = $this->getPool();
    }
}
