<?php

use PHPUnit\Framework\TestCase;

class UserTest  extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $this->assertEquals($user->getFirstName(), 'Billy');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;
        $user->setLastName('Garret');
        $this->assertEquals($user->getLastName(), 'Garret');
    }

    public function testFullNameIsReturned()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Garret');

        $this->assertEquals($user->getFullName(), 'Billy Garret');
    }

    public function testFristAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('  Billy  ');
        $user->setLastName(' Garret   ');
        $this->assertEquals($user->getFullName(), 'Billy Garret');
        $this->assertEquals($user->getFirstName(), 'Billy');
        $this->assertEquals($user->getLastName(), 'Garret');
    }
}
