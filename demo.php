<?php
function CreateShape($name){
    if ($name == "circle"){
        return 'circle';
    } else if ($name == "triangle"){
        return 'triangle';
    }

}

CreateShape('circle');
CreateShape('triangle');