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
        $user = new User();

        $user->email = null;
        $this->assertFalse($user->validate(['email']));

        $user->email = 'toolooooongnaaaaaaameeee';
        $this->assertFalse($user->validate(['email']));

        $user->email = 'dave%009$#rt';
        $this->assertFalse($user->validate(['email']));     

        $user->email = 'dap3065@yahoo.com';
        $this->assertTrue($user->validate(['email']));     
    }

    public function testPassword() {
        $user = new User();

        $user->email = 'dap3065@yahoo.com';
	$user->username = 'dap3065';
	$user->setPassword('dap3065Password');
	$user->status = 10;
        $this->assertTrue($user->validate());     

	$password = 'wrong';
	$this->assertFalse($user->validatePassword($password));
	$user->save();
	
	$password = 'dap3065Password';
	$this->assertTrue($user->validatePassword($password));
	$user->delete(); 
    }

    public function testFindByUsername()
    {
        $user = new User();

        $user->email = 'dap3065@yahoo.com';
	$user->username = 'dap3065';
	$user->setPassword('dap3065Password');
	$user->status = 10;
        $user->save();
	$user2 = User::findByUsername('dap3065');
	$this->assertEquals($user->id, $user2->id);
        $user->delete();
    }

    public function testDelete()
    {
        $user = new User();

        $user->email = 'dap3065@yahoo.com';
	$user->username = 'dap3065';
	$user->setPassword('dap3065Password');
	$user->status = 10;
    }

    public function testUpdate()
    {
        $user = new User();

        $user->email = 'dap3065@yahoo.com';
	$user->username = 'dap3065';
	$user->setPassword('dap3065Password');
	$user->status = 10;
    }

}
