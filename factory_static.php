<?php


interface Worker{
    public function work();
}
  class Developer implements Worker
{

      public function work()
      {
          print_r('im developer');// TODO: Implement work() method.
      }
  }
class Designer implements Worker
{

    public function work()
    {
        print_r('im Designer'); // TODO: Implement work() method.
    }
}
class WorkerFactory{
    public static function make($workerTitle):?Worker
    {
        $ClassName = strtoupper($workerTitle);//делаем переданое имя класса с Заглавной буквы
        if(class_exists($ClassName)){
            return new $ClassName;//возвращаем обьект класса если он существует

        }
        return null;//

    }
}
$developer  = WorkerFactory::make('developer');//передаем ввиде строки название класса
$developer->work();//
$designer  = WorkerFactory::make('designer');//передаем ввиде строки название класса
$designer->work();