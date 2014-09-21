<?php
/**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/20/14
 * Time: 3:49 PM
 */

class LoginControllerTest extends TestCase {

    public function testLoginPageisOk()
    {
        $this->call('GET', 'login');
        $this->assertResponseOk();
    }

    public function testLoginUserFailed()
    {
        $this->call('POST', 'login');
        $this->assertRedirectedTo('login',["errors"]);
    }

    public function testLoginUserSuccess()
    {
        $this->call('POST', 'login',["username" => "gerwin", "password" => "gerwin"]);
        $this->assertRedirectedToRoute('dashboard.page');
    }

    public function testLogoutUserSuccess()
    {
        $this->call('GET','logout');

        $this->assertEmpty(Session::all());
    }

} 