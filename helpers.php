<?php

function formatInput($data){
    return trim(stripslashes(htmlspecialchars($data)));
}