<?php

namespace App\Http;

class ClaGanado
{
    private $idArete;
    private $fechaReg;
    private $fechaNac;
    private $raza;
    private $sexo;
    private $color;
    private $ubica;
    private $estado;
    private $obs;


    public function setIdArete($value)
    {
        $this->idArete=$value;

    }
    public function getIdArete()
    {
       return ($this->idArete);

    }
    public function setFechaReg($value)
    {
        $this->fechaReg=$value;

    }
    public function getFechaNac()
    {
       return ($this->fechaReg);

    }
    public function setFechaNac($value)
    {
        $this->fechaNac=$value;

    }
    public function getFechaReg()
    {
       return ($this->fechaNac);

    }
    public function setRaza($value)
    {
        $this->raza=$value;

    }
    public function getRaza()
    {
       return ($this->raza);

    }
    public function setSexo($value)
    {
        $this->sexo=$value;

    }
    public function getSexo()
    {
       return ($this->sexo);

    }
    public function setColor($value)
    {
        $this->color=$value;

    }
    public function getColor()
    {
       return ($this->color);

    }
    public function setUbica($value)
    {
        $this->ubica=$value;

    }
    public function getubica()
    {
       return ($this->ubica);

    }
    public function setEstado($value)
    {
        $this->estado=$value;

    }
    public function getEstado()
    {
       return ($this->estado);

    }
    public function setObs($value)
    {
        $this->obs=$value;

    }
    public function getObs()
    {
       return ($this->obs);

    }

    public function mostrar()
    {
        echo '<p>El arete es: ' . $this->getIdArete . '</p>';
        echo '<p>La fecha de registro: ' . $this->getFechaReg . '</p>';
        echo '<p>La fecha de nacimiento: ' . $this->getFechaNac . '</p>';
        echo '<p>la raza es: ' . $this->getRaza . '</p>';
        echo '<p>la raza es: ' . $this->getRaza . '</p>';
        echo '<p>la sexo es: ' . $this->getSexo . '</p>';
        echo '<p>el color es: ' . $this->getColor. '</p>';
        echo '<p>ubicado en el puesto: ' . $this->getubica. '</p>';
        echo '<p>el estado es : ' . $this->getEstado . '</p>';
        echo '<p>La obs es: ' . $this->getObs . '</p>';
        

        echo '<hr>';
    }
}
