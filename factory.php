<?php
class Worker{
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }//

    /**
     * Worker constructor.
     * @param string $name
     */
    public function __construct( )
    {

    }

}
class WorkerFactory{

    public static function make():Worker
    {
        return new Worker( );//

    }
}

$worker = WorkerFactory::make();//создаем экземпляр рабочего
$worker->setName('Boris');//Задаем имя
var_dump($worker->getName());//

