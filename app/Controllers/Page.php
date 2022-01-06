<?php namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        echo view("about");
    }
    
    public function contact()
    {
        $data['name'] = "Petani Kode";
        echo view("contact", $data);
    }

    public function faqs()
    {
        $data['data_faqs'] = [
            [
                'question'=>'Apa itu Codeigniter?',
                'answer' =>'Codeigniter adalah framework php'
            ],
            [
                'question'=>'Siapa yang membuat codeigniter?',
                'answer'=>'CI awalnya dibuat oleh ellislab'
            ],
            [
                'question'=>'Codeigniter versi berapakah yang digunakan?',
                'answer'=>'Codeigniter versi 4'
            ]
            ];
            // load view dengan data
            echo view("faqs",$data);
        
        }
    
    public function tos()
    {
        echo view("halaman term of service");
    }

}