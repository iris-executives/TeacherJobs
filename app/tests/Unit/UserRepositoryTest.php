<?php

use Mockery as M;
use TJ\Repositories\UserRepository;

class UserRepositoryTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        
        $this->mUser = M::mock('Illuminate\Auth\UserInterface');
        $this->users = new UserRepository($this->mUser);
    }

    public function tearDown()
    {
        M::close();

        parent::tearDown();
    }
    
    public function test_binding()
    {
        $users = App::make('TJ\Repositories\Contracts\UserRepositoryInterface');
        $this->assertInstanceOf('TJ\Repositories\UserRepository', $users);
    }
       
    public function test_creating_user()
    {
        $username = 'a name';
        $email = 'email@domain.com';

        $this->mUser->shouldReceive('create')
                    ->once()
                    ->with(compact('username', 'email'))
                    ->andReturn($this->mUser);
        
        $user = $this->users->create($username, $email);
        $this->assertInstanceOf('Illuminate\Auth\UserInterface', $user);
    }
    
    public function test_updating_user()
    {
        $id = 1;
        $username = 'a name';
        $email = 'email@domain.com';
        
        $this->mUser->shouldReceive('getKeyName')->once()->withNoArgs()->andReturn('id');

        $this->mUser->shouldReceive('where')->with('id', $id)->once()->andReturn($this->mUser);

        $this->mUser->shouldReceive('update')->with(compact('username', 'email'))->andReturn(true);
        
        $affectedRows = $this->users->update($id, $username, $email);
        $this->assertEquals($affectedRows, 1);
    }
    
    public function test_deleting_user()
    {
        $id = 1;
        
        $this->mUser->shouldReceive('getKeyName')->once()->withNoArgs()->andReturn('id');

        $this->mUser->shouldReceive('where')->with('id', $id)->once()->andReturn($this->mUser);

        $this->mUser->shouldReceive('delete')->withNoArgs()->andReturn(true);
        
        //$affectedRows = $this->users->delete($id);
        //$this->assertEquals($affectedRows, 1);
    }
    
    
}