<?php

file_put_contents(
    $argv[1],
    str_replace(
        [
//            "      description: 'A group of pull requests that the merge queue has grouped together
//        to be merged.
//
//'",
//            "      description: 'Conditions for an organization ruleset. The conditions object
//        should contain both `repository_name` and `ref_name` properties or both `repository_id`
//        and `ref_name` properties.
//
//'",
        ],
        [
//            "      description: 'A group of pull requests that the merge queue has grouped together to be merged.'",
//            "      description: 'Conditions for an organization ruleset. The conditions object should contain both `repository_name` and `ref_name` properties or both `repository_id` and `ref_name` properties.'",
        ],
        file_get_contents(
            $argv[1],
        ),
    ),
);
