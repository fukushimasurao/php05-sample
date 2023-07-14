<?php

class Math
{
    public static function square($num)
    {
        return $num * $num;
    }
}

// 静的メソッドの使用
echo Math::square(4);
