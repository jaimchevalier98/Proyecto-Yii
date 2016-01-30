<?php
class ProyectoForm extends CFormModel
{
    public $nombreProyecto;
    public $faseProyecto;
    
    public function rules()
    {
        return array(
            array('nombreProyecto','required','message'=>'Este campo es obligatorio'),
            array('faseProyecto','required','message'=>'Este campo es obligatorio')
        );
    }
}
?>