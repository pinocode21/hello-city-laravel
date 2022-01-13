<?php

    if (!function_exists('page_title')) {
        function page_title(?string $title = null) : sting {
            return $title
                ? $title . ' | ' . config('app.name')
                : config('app.name');
        }
    }


?>