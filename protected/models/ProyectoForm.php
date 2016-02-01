<?php
class ProyectoForm extends CFormModel
{
    public $lineaNegocio;
    public $nombreProyecto;
    public $nombreGerente;
    public $RepresentanteComite;
    public $liderTI;
    public $faseProyecto;
    public $estado;
    
    public function rules()
    {
        return array(
           /* array('nombreProyecto','required','message'=>'Este campo es obligatorio'),
            array('faseProyecto','required','message'=>'Este campo es obligatorio'),
            array('estado','required','message'=>'Este campo es obligatorio'),
            array('nombreGerente','required','message'=>'Este campo es obligatorio')*/
            array('nombreProyecto, faseProyecto,estado,nombreGerente',
                  'required','message'=>'Este campo es obligatorio'),
        );
    }
}
?>