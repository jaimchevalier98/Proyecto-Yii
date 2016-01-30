<?php

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Proyectos',
);
?>

<h3>Lista de proyectos</h3>
<button id="bt_proyecto" class="btn btn-primary" >Agregar nuevo Proyecto</button>
<br/><br/>
<div class="form" id="proyecto" style="display:none;">
    <?php 
        $var = 'style="display:none;"'; 
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                  'id'            =>'formProyecto',
                  'method'        =>'POST',
                  'action'        => Yii::app()->createUrl('site/proyecto'),
                  'clientOptions' => array(
                      'validateOnsubmit' => true,
                      'validateOnchange' => true,
                      'validateOnType'   => true
                  ),
        ));
        ?>
    <fieldset>
        <?php
            echo $form->labelEx($model, 'nombreProyecto');
            echo $form->textField($model, 'nombreProyecto');
            echo $form->error($model, 'nombreProyecto');

            echo $form->dropDownListRow($model, 'faseProyecto', array('Fase1', 'Fase2', 'Fase3', 'Fase4', 'Fase5', 'Fase6'));
            echo $form->error($model, 'faseProyecto');
        ?>
    </fieldset>
    
    <div class="form-actions">
        <?php 
            $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Guardar')); 
            ?> &nbsp;&nbsp; <?php
            $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Cancelar','id'=>'bt_cancel'));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<br/><br/>