<?php
abstract class PizzaStore
{
    abstract public function createPizza($type): Pizza;

    public function orderPizza($type): Pizza
    {
        $pizza = $this->createPizza($type);
        if ($pizza !== null) {
            $pizza->prepare();
            $pizza->cut();
        } else {
            echo "Извините, данный тип пиццы недоступен. <br>";
        }
    }
}
