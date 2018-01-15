<?php

/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function setActive($path)
{
    return Request::is($path . '*') ? ' active' :  '';
}

/**
 * Return open nav menus if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function setOpen($path)
{
    return Request::is($path . '*') ? ' open' :  '';
}