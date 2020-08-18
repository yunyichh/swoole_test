<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/18
 * Time: 15:44
 */
for ($i=0;$i<20;$i++){
    go(function () use($i){
       echo $i;
    });
}