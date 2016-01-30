<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<meta name="language" content="es">
        <?php 
            echo Yii::app()->bootstrap->registerAllCss();
            echo Yii::app()->bootstrap->registerCoreScripts();
        ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js"></script>
</head>

<body>
  <div class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-inner">
            <div class=" container">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),
                            array('label'=>'Proyectos', 'url'=>array('/site/proyectos')),
                            array('label'=>'Recursos', 'url'=>array('/site/recursos')),
                            array('label'=>'Extencion', 'url'=>array('/site/extenciones')),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                )); ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><?php echo "username"; ?></a></li>
                  </ul>
            </div>
        </div>
    </div><!-- mainmenu -->
    <div class="container contenido"> 
        <br/><br/>
        <div class="page-header">
             <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    ));  ?><!-- breadcrumbs -->
            <?php endif ?>
        </div>
        
        <div class="clear"></div>
    
        <?php echo $content; ?>      

        <div class="footer text-center">
            Copyright &copy; <?php echo date('Y'); ?> Banco General. Todos los derechos reservados.<br/>
        </div><!-- footer -->
    </div>
</body>
</html>
