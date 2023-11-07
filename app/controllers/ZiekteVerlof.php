<?php

class ZiekteVerlof extends BaseController
{
    private $ziekteVerlofModel;

    public function __construct()
    {
        $this->ziekteVerlofModel = $this->model('ZiekteVerlofModel');
    }

    public function index($instructeurId)
    {
        $this->ziekteVerlofModel->wijzigen($instructeurId);
        $this->ziekteVerlofModel->voertuig($instructeurId);
        // $result = $this->ziekteVerlofModel->instructeur($instructeurId);
        
        header("refresh:3;url=../../instructeur");

        $data = [
            'title' => 'Instructeur is ziek/met verlof gemeld'
        ];

        $this->view('ziekteverlof/ziekteverlof', $data);
    }
}
