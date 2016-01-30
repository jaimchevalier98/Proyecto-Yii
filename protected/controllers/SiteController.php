<?php

class SiteController extends Controller
{
    public function actions()
    {
        return array(
                // captcha action renders the CAPTCHA image displayed on the contact page
                'captcha'=>array(
                        'class'=>'CCaptchaAction',
                        'backColor'=>0xFFFFFF,
                ),
                // page action renders "static" pages stored under 'protected/views/site/pages'
                // They can be accessed via: index.php?r=site/page&view=FileName
                'page'=>array(
                        'class'=>'CViewAction',
                ),
        );
    }
    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
                if(Yii::app()->request->isAjaxRequest)
                        echo $error['message'];
                else
                        $this->render('error', $error);
        }
    }
    public function actionProyectos()
    {
        $model = new ProyectoForm();
        if (isset($_POST['formProyecto']))
        {
            $model->attributes = $_POST['formProyecto'];
            if ($model-> validate())
            {
                $this->refresh();
            }
        }
        $this->render('proyectos',array('model'=>$model));
    }
    public function actionExtenciones()
    {              
        $this->render('extenciones');
    }
    public function actionRecursos()
    {
        $this->render('recursos');
    }
    public function actionLogout()
    {
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
    }
}