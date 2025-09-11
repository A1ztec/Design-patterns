<?php



namespace Tests;



use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;

class AbstractFactoryTest extends TestCase
{

    /**
     * @test
     */
    public function testBenzCarCreation()
    {
        $factory = new CarAbstractFactory (150000);
        $mycar = $factory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $mycar, ('Benz car should be created'));
    }
    public function testBmwCarCreation()
    {
        $factory = new CarAbstractFactory (250000);
        $mycar = $factory->createBmwCar();
        $this->assertInstanceOf(BmwCar::class, $mycar, ('Bmw car should be created'));
    }
}
