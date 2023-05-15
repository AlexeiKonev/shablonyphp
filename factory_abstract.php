<?php
interface AbstractFactory
{
public static function makeDeveloperWorker():DeveloperWorker;
public static function makeDesignerWorker():DesignerWorker;
}

interface Worker
{
    public function work();//

}
interface DeveloperWorker extends Worker
{

}
interface DesignerWorker extends Worker
{

}

class OutsourceDesignerWorker implements DesignerWorker{

    public function work()
    {
        print_r('im OutsourceDesignerWorker');   // TODO: Implement workk() method.
    }
}
class OutsourceDeveloperWorker implements DeveloperWorker{

    public function work()
    {
        print_r('im OutsourceDeveloperWorker');    // TODO: Implement workk() method.
    }
}

class OutsourceWorkerFactory implements AbstractFactory
{

    public static function makeDeveloperWorker(): DeveloperWorker
    {
       return new OutsourceDeveloperWorker(); // TODO: Implement makeDeveloperWorker() method.
    }

    public static   function makeDesignerWorker(): DesignerWorker
    {
        return new OutsourceDesignerWorker();// TODO: Implement makeDesignerWorker() method.
    }
}
class NativeWorkerFactory implements AbstractFactory
{

    public static function makeDeveloperWorker(): DeveloperWorker
    {
        return new NativeDeveloperWorker();   // TODO: Implement makeDeveloperWorker() method.
    }

    public static function makeDesignerWorker(): DesignerWorker
    {
        return new NativeDesignerWorker();  // TODO: Implement makeDesignerWorker() method.
    }
}

class NativeDesignerWorker implements DesignerWorker{

    public function work()
    {
        print_r('im NativeDesignerWorker');  // TODO: Implement workk() method.
    }
}
class NativeDeveloperWorker implements DeveloperWorker{

    public function work()
    {
        print_r('im NativeDeveloperWorker');  // TODO: Implement workk() method.
    }
}

$outsourceDeveloperWorker = OutsourceWorkerFactory::makeDesignerWorker();
$outsourceDeveloperWorker = OutsourceWorkerFactory::makeDesignerWorker();
$nativeDeveloperWorker = NativeWorkerFactory::makeDesignerWorker();
$nativeDeveloperWorker =NativeWorkerFactory::makeDeveloperWorker();//

$outsourceDeveloperWorker->work();