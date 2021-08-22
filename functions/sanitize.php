<?php

function scape($string)
{
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
