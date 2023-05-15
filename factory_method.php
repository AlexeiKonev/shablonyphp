<?php
//
//interface Worker
//{
//
//    public function work();//
//
//}
//
//class Designer implements Worker
//{
//
//    public function work()
//    {
//      print_r('im desiner');//
//
//    }
//}
//class Developer implements Worker
//{
//
//    public function work()
//    {
//      print_r('im Developer');//
//
//    }
//}
//class  DesignerFactory implements FactoryWorker{
//
//    public static function make():?Designer
//    {
//        return new Designer();  // TODO: Implement make() method.
//    }
//}
//class  DeveloperFactory implements FactoryWorker{
//
//    public static function make():?Developer
//    {
//      return new Developer(); // TODO: Implement make() method.
//    }
//}
//
//interface FactoryWorker{
//    public static function make();
//}
//
//$designer = DesignerFactory::make();//
//$developer = DeveloperFactory::make();//
//
//$developer->work();//вызываем общий метод work
//
//$designer->work();