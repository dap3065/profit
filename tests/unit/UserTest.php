<?php

use common\models\User;

class UserTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
	//parent::setUp();
	//$this->loadFixtures(['user']);
    }

    protected function _after()
    {
    }

    // tests
    public function testUsername()
    {
        $user = new User();

        $user->username = null;
        $this->assertFalse($user->validate(['username']));

        $user->username = 'toolooooongnaaaaaaameeee';
        $this->assertFalse($user->validate(['username']));

        $user->username = 'dave%009$#rt';
        $this->assertFalse($user->validate(['username']));     

        $user->username = 'dave';
        $this->assertTrue($user->validate(['username']));     
    }

    public function testEmail()
    {
    }

}
