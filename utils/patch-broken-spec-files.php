<?php

file_put_contents(
    $argv[1],
    str_replace(
        [
            "      description: 'A group of pull requests that the merge queue has grouped together
        to be merged.

'"
        ],
        [
            "      description: 'A group of pull requests that the merge queue has grouped together to be merged.'"
        ],
        file_get_contents(
            $argv[1],
        ),
    ),
);
