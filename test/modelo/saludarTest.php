<?php

namespace ProyectoIntegracion\modelo;

require "vendor/autoload.php";

use ProyectoIntegracion\modelo\saludar;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-22 at 12:46:02.
 */
class saludarTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var saludar
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new saludar();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers ProyectoIntegracion\modelo\saludar::setSaludo
     * @todo   Implement testSetSaludo().
     */
    public function testSetSaludo() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     *@dataProvider ProveedorTest
     */
    public function testFormatSaludo($saludo,$saludoEsperado) {
        $this->object->setSaludo($saludo);
        $saludoObtenido = $this->object->formatSaludo();
        $this->assertEquals($saludoObtenido, $saludoEsperado);
    }
    
    public function ProveedorTest(){
        return[
            "Saludo 1" => ["Hola","El mensaje es: Hola"],
            "Saludo2"  => ["Adios","El mensaje es: Adios"]
    ];
    }

}
