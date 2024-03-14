<?php
class FormController
{
    public function index()
    {
        require ROOT . '/app/views/form/login.php';
    }
    public function login()
    {
        $formService = new FormService();
        $formService->login();
    }
    public function logout()
    {
        echo 'logoutController';
        $formService = new FormService();
        $formService->logout();
    }
}
