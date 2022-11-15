<?php
use PHPUnit\Framework\TestCase;
require_once 'src/User.php';

class UserTest extends TestCase {

    public function testName(){
        $user= new User("kareem", "kimo@gmail.com");
        $this->assertEquals("kareem", $user->name());
        $testName= "ashraf";
        $this->assertSame($testName, $user->name($testName));

    } 
    public function testEmail(){
        $user= new User("kareem", "kimo@gmail.com");
        $this->assertEquals("kimo@gmail.com", $user->email());
        $testEmail= "ashraf@gmail.com";
        $this->assertEquals($testEmail, $user->email($testEmail));

    } 
}
?>