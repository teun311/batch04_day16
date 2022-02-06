<?php


namespace App\classes;


class operator
{
        //    ===operators===
          /*
           * Arithmatic Operatos
           *    *Binary Operator (+,-,/,%)
           *    *Unary Operator (++,--,(-) )
           * Assignment Operators(=,+=,-=,/=,%=,.=)
           * conditional operators(>,>=,<,<=,==,!=,===,!== )
           * Logical operators (&&,||,!)
           *
           */
    public $x;
    public $y;
    protected $z;

    public function index()
    {
        $this->x =10;
        $this->y =20;
        $this->z =30;
        echo "hello World Operator:";
        echo '<br/>';
        echo $this->x +$this->y;
        echo '<br/>';
        echo $this->x - $this->y;
        echo '<br/>';
        echo $this->x * $this->y;
        echo '<br/>';
        echo $this->x / $this->y;
        echo '<br/>';
        echo $this->x % $this->y;
        echo '<br/>';

        echo $this->x++;
        echo '<br/>';
        echo $this->x;
        echo '<br/>';

        echo $this->x--;
        echo '<br/>';
        echo $this->x;
        echo '<br/>';
        echo '<br/>';

        echo $this->x += $this->y; //$x =$x+$y = 30
        echo '<br/>';
        echo $this->x -= $this->y; //$x =$x-$y = 10
        echo '<br/>';
        echo $this->x *= $this->y; //$x =$x*$y = 200
        echo '<br/>';
        echo $this->x /= $this->y; //$x =$x/$y = 10
        echo '<br/>';
        echo $this->x %= $this->y; //$x =$x%$y = 10
        echo '<br/>';
        echo $this->x .= $this->y; //$x =$x.$y = 1020
        echo '<br/>';
        echo '<br/>';

        echo ($this->x > $this->y) && ($this->y > $this->z);
        echo '<br/>......<br/>';
        echo ($this->x > $this->y) && ($this->y < $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo '<br/>......<br/>';
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo '<br/>......<br/>';

        //=====Statement====
        /*
            *Single Line Statement
            *Conditional Statement
                   *if
                   *if else
                   *if elase if
                   *switch
           *Repeated Statement
                  *FOR
                  *WHILE
                  *FOREACH
            *Array
         * */

        if($this->x< $this->y)
        {
            echo 'Its True ';
        }
        else{
            echo 'False !';
        }
    }
}