{{ "# [READONLY-SUBSPLIT] {{ package.name }}


![Continuous Integration](https://github.com/php-api-clients/{{ package.name }}/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/api-clients/{{ package.name }}/v/stable.png)](https://packagist.org/packages/api-clients/{{ package.name }})
[![Total Downloads](https://poser.pugx.org/api-clients/{{ package.name }}/downloads.png)](https://packagist.org/packages/api-clients/{{ package.name }})
[![Code Coverage](https://scrutinizer-ci.com/g/php-api-clients/{{ package.name }}/badges/coverage.png?b=={{ branch }})](https://scrutinizer-ci.com/g/php-api-clients/{{ package.name }}/?branch={{ branch }})
[![License](https://poser.pugx.org/api-clients/{{ package.name }}/license.png)](https://packagist.org/packages/api-clients/{{ package.name }})

Non-Blocking first {{ package.metadata.name }} client, this is a read only sub split, see [`github-root`](https://github.com/php-api-clients/github-root) for the root package.

## Usage

```php
use React\Http\Browser;
use ApiClients\Client\{{ namespace }}\BearerToken;
use ApiClients\Client\{{ namespace }}\Client;

use function React\Async\async;

$client = new Client(new BearerToken('YOUR_TOKEN_HERE'), new Browser());

// The client is using react/async internally to provide a non-promise API.
// As such you're expected to use it inside a fiber, the async call here is
// added to demonstrate and documented that requirement. The rest of the
// examples assume you have already wrapped in a fiber 0 or more levels up
// in your code such as a command bus executer or your HTTP server.
async(static function () {
    // Make API calls using the call method
    $client->call('METHOD /path/to/{the}/operation', ['array' => 'with', 'paramters' => 'for', 'the' => 'operation']);
    // Make API calls using the operations objects
    $client->operations()->group()->operation(array: 'with', paramters: 'for', the: 'operation');
})();
```

## Supported operations

{% for path in representation.client.paths %}
{% for operation in path.operations %}

### {{ operation.operationId }}

{{ operation.summary }}

Using the `call` method:
```php
$client->call('{{ operation.matchMethod }} {{ operation.path }}'{% if operation.parameters|length > 0 %}, [
{% for parameter in operation.parameters %}        '{{ parameter.targetName }}' => {% if parameter.type == 'string' %}'{% endif %}{{ parameter.example.raw }}{% if parameter.type == 'string' %}'{% endif %},
{% endfor %}]{% endif %});
```

Operations method:
```php
$client->operations()->{{ operation.groupCamel }}()->{{ operation.nameCamel }}(
{% if operation.parameters|length > 0 %}{% for parameter in operation.parameters %}        {{ parameter.targetName }}: {% if parameter.type == 'string' %}'{% endif %}{{ parameter.example.raw }}{% if parameter.type == 'string' %}'{% endif %},
{% endfor %}{% endif %});
```

{% if operation.externalDocs != null %}
You can find more about this operation over at the [{{ operation.externalDocs.description }}]({{ operation.externalDocs.url }}).
{% endif %}

{% endfor %}
{% endfor %}
" }}
