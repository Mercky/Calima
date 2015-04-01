<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of instaladorModelo
 *
 * @author webcol
 */
class instaladorModelo extends Cf_Modelo{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function crearTablas(){
        
        $this->_bd->consulta('CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(5) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `url` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;');
        $this->_bd->ejecucion();
        
        $this->_bd->consulta('CREATE TABLE IF NOT EXISTS `sesiones` (
  `id` char(128) NOT NULL,
  `set_time` char(10) NOT NULL,
  `data` text NOT NULL,
  `session_key` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;');
        $this->_bd->ejecucion();
        
        $this->_bd->consulta('CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` char(1) NOT NULL,
  `clave` varchar(60) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
         $this->_bd->ejecucion();
         
         $this->_bd->consulta('CREATE TABLE IF NOT EXISTS `sesion_usuario` (
  `id_usuario` int(10) NOT NULL,
  `fecha_sesion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;');
         $this->_bd->ejecucion();
    }
}