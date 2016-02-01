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
                  'action'        => Yii::app()->createUrl('site/proyectos'),
                  'enableClientValidation'=>true,
                  'clientOptions' => array(
                      'validateOnSubmit' => true,
                      'validateOnChange' => true,
                      'validateOnType'   => true
                  ),
        ));
    ?>
    <fieldset>
        <table>
            <tr>
                <td>
                    <?php
                        echo $form->dropDownListRow($model, 'lineaNegocio', array('Gerencia'));
                        echo $form->error($model, 'lineaNegocio');
                    ?>
                </td>
                <td style=" padding-left: 50px;">
                    <?php 
                        echo $form->labelEx($model, 'nombreProyecto');
                        echo $form->textField($model, 'nombreProyecto');
                        echo $form->error($model, 'nombreProyecto');
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $form->labelEx($model, 'nombreGerente');
                        echo $form->textField($model, 'nombreGerente');
                        echo $form->error($model, 'nombreGerente');
                    ?>
                </td>
                <td style=" padding-left: 50px;">
                    <?php 
                        echo $form->labelEx($model, 'RepresentanteComite');
                        echo $form->textField($model, 'RepresentanteComite');
                        echo $form->error($model, 'RepresentanteComite');
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $form->labelEx($model, 'liderTI');
                        echo $form->textField($model, 'liderTI');
                        echo $form->error($model, 'liderTI');
                    ?>
                </td>
                <td style=" padding-left: 50px;">
                    <?php
                        echo $form->dropDownListRow($model, 'estado', array('Abierto','Cerrado'));
                        echo $form->error($model, 'estado');
                    ?>
                </td>
            </tr>  
            <tr>
                <td>
                    <?php
                       echo $form->dropDownListRow($model, 'faseProyecto', array('-- Seleccione --',
                                                                                  'Anteproyecto',
                                                                                  'Requerimiento', 
                                                                                  'Análisis y Diseño', 
                                                                                  'Contrucción', 
                                                                                  'Pruebas', 
                                                                                  'Certificación',
                                                                                  'Estabilización'));
                        echo $form->error($model, 'faseProyecto');
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
    <div class="form-actions">
        <?php 
            $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Guardar')); 
            ?> &nbsp;&nbsp; <?php
            $this->widget('bootstrap.widgets.TbButton', 
                    array('buttonType'=>'reset', 'label'=>'Cancelar','htmlOptions'=>array('id'=>'bt_cancel')));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<br/><br/>