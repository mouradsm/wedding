<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initAutoload(){

        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->setFallbackAutoloader(true);

        $autoloader->registerNamespace("App");

        return $autoloader;
    }

    protected function _initViews() {

        $view= new Zend_View();
        Zend_Registry::set('view', $view);

        $view->headTitle()->setSeparator(' - ')->headTitle('ADCJarp');
        $view->headMeta()->appendHttpEquiv('Content-type', 'text/html;charset=iso-8859-1 ');

    }

    protected function _initLogger()
    {
        /*$writer = new Zend_Log_Writer_Stream(APPLICATION_PATH .'/tmp/log.txt');
        $logger = new Zend_Log($writer);
        Zend_Registry::set('logger',$logger);

        $writer = new Zend_Log_Writer_Firebug();
        $logger = new Zend_Log($writer);
        Zend_Registry::set('Firebug',$logger);*/
    }


    protected function _initBancoDados()
    {
       /* $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini',APPLICATION_ENV);

        $db = Zend_Db::factory($config->db);

        $profiler = new Zend_Db_Profiler_Firebug('ALL DB QUERYES');
        $profiler->setEnabled(true);
        $db->setProfiler($profiler);
        Zend_Db_Table_Abstract::setDefaultAdapter($db);*/


    }

    protected function _initPlugins()
    {
        $bootstrap = $this->getApplication();
        if ($bootstrap instanceof Zend_Application){
            $bootstrap = $this;
        }

        $bootstrap->bootstrap('FrontController');
        $front = $bootstrap->getResource('FrontController');

        //$front->registerPlugin(new App_Plugin_Acl());

    }

    protected function _initTranslate()
    {
       /* try {
            $translate = new Zend_Translate('Array', APPLICATION_PATH . '/languages/pt_BR/Zend_Validate.php', 'pt_BR');
            Zend_Validate_Abstract::setDefaultTranslator($translate);
        } catch(Exception $e) {
            die($e->getMessage());
        }*/
    }

    protected  function _initSession()
    {
        session_start();
    }

    protected function _initPerfil()
    {

        //$acl = Zend_Registry::get('acl');


        //var_dump($acl);die;


    }


}
