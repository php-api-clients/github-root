<?php

const CLIENTS_PATH =  'clients/';
const CLIENTS_ROOT =  __DIR__ . '/../' . CLIENTS_PATH;
const SKELLETON_ROOT = __DIR__ . '/../skelleton/';
const SUBSPLIT_CONFIG_PATH = __DIR__ . '/../etc/config.subsplit-publish.json';
const GHES_PREFIX = 'descriptions-next/ghes-';

/** @var array<array{specUrl: string, fullName: string, namespace: string, packageName: string}> $clients */
$clients = [];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/api.github.com/api.github.com.yaml',
    'fullName' => 'GitHub',
    'namespace' => 'GitHub',
    'path' => 'GitHub',
    'packageName' => 'github',
    'branch' => 'v0.2.x',
];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/ghec/ghec.yaml',
    'fullName' => 'GitHub Enterprise Cloud',
    'namespace' => 'GitHubEnterpriseCloud',
    'path' => 'GitHubEnterpriseCloud',
    'packageName' => 'github-enterprise-cloud',
    'branch' => 'v0.1.x',
];
$clients[] = [
    'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/github.ae/github.ae.yaml',
    'fullName' => 'GitHub AE',
    'namespace' => 'GitHubAE',
    'path' => 'GitHubAE',
    'packageName' => 'github-ae',
    'branch' => 'v0.1.x',
];

foreach (json_decode(
    file_get_contents(
        'https://api.github.com/repos/github/rest-api-description/git/trees/main?recursive=1',
        false,
        stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => implode(
                    PHP_EOL,
                    [
                        'User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad'
                    ],
                ),
            ],
        ])
    ),
    true,
)['tree'] as $node) {
    $file = $node['path'];
    if (substr($file, 0, strlen(GHES_PREFIX)) !== GHES_PREFIX) {
        continue;
    }

    if (substr($file, -5) !== '.yaml') {
        continue;
    }

    $version = substr($file, strlen(GHES_PREFIX), strpos($file, '/', strlen(GHES_PREFIX)) - strlen(GHES_PREFIX));

    if ($file !== GHES_PREFIX . $version . '/ghes-' . $version . '.yaml') {
        continue;
    }

    $clients[] = [
        'specUrl' => 'https://raw.githubusercontent.com/github/rest-api-description/main/descriptions-next/ghes-' . $version . '/ghes-' . $version . '.yaml',
        'fullName' => 'GitHub Enterprise (v' . $version . ')',
        'namespace' => 'GitHubEnterprise',
        'path' => 'GitHubEnterprise-' . $version,
        'packageName' => 'github-enterprise',
        'branch' => 'v0.1.' . $version . '.x',
    ];
}

$subSplitConfig = [];
foreach ($clients as $client) {
    $subSplitConfig[$client['fullName']] = [
        'name' => $client['packageName'],
        'directory' => CLIENTS_PATH . $client['path'],
        'target' => 'git@github.com:php-api-clients/' . $client['packageName'] . '.git',
        'target-branch' => $client['branch'],
    ];

    if (file_exists(CLIENTS_ROOT . $client['path'])) {
        continue;
    }

    foreach ([
        ...glob(SKELLETON_ROOT . '**', GLOB_NOSORT),
        ...glob(SKELLETON_ROOT . '**/*', GLOB_NOSORT),
    ] as $fileName) {
        if (!is_file($fileName)) {
            continue;
        }

        $newFilename = CLIENTS_ROOT . $client['path'] . DIRECTORY_SEPARATOR . substr($fileName, strlen(SKELLETON_ROOT));

        @mkdir(dirname($newFilename), 0744, true);
        file_put_contents(
            $newFilename,
            str_replace(
                array_map(
                    static fn (string $key): string => '{{ ' . $key . ' }}',
                    array_keys($client),
                ),
                array_values($client),
                file_get_contents($fileName),
            )
        );
    }
}

file_put_contents(
    SUBSPLIT_CONFIG_PATH,
    json_encode(
        [
            'sub-splits' => array_values($subSplitConfig),
        ],
        JSON_PRETTY_PRINT,
    ) . PHP_EOL,
);
