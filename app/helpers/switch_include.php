<?php
class switch_include{

    static $instance = null ;

    private function checkSwitch($page)
    {
        $pagesAvailable = array(
            'home',
            'details',
            'top',
            'testimonials',
            'prijsvraag'
        );
        if(in_array($page,$pagesAvailable)){
            return  'app/views/' . $page . '.php';
        }else{
            return 'app/views/home.php';
        }
    }

    public function getPage(){
        require '' . $this->checkSwitch(Input::get('page')) . '';
    }

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance =  new self();
        }

        return self::$instance;
    }

}