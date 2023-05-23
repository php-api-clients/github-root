# [READONLY-SUBSPLIT] github-ae


![Continuous Integration](https://github.com/php-api-clients/github-ae/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/api-clients/github-ae/v/stable.png)](https://packagist.org/packages/api-clients/github-ae)
[![Total Downloads](https://poser.pugx.org/api-clients/github-ae/downloads.png)](https://packagist.org/packages/api-clients/github-ae)
[![Code Coverage](https://scrutinizer-ci.com/g/php-api-clients/github-ae/badges/coverage.png?b==v0.1.x)](https://scrutinizer-ci.com/g/php-api-clients/github-ae/?branch=v0.1.x)
[![License](https://poser.pugx.org/api-clients/github-ae/license.png)](https://packagist.org/packages/api-clients/github-ae)

Non-Blocking first GitHub AE client, this is a read only sub split, see [`github-root`](https://github.com/php-api-clients/github-root) for the root package.

## Usage

```php
use React\Http\Browser;
use ApiClients\Client\GitHubAE\BearerToken;
use ApiClients\Client\GitHubAE\Client;

use function React\Async\async;

$client = new Client(new BearerToken('YOUR_TOKEN_HERE'), new Browser());

// The client is using react/async internally to provide a non-promise API.
// As such you're expected to use it inside a fiber, the async call here is
// added to demonstrate and documented that requirement. The rest of the
// examples assume you have already wrapped in a fiber 0 or more levels up
// in your code such as a command bus executer or your HTTP server.
async(static function () {
{% if client.configuration.entryPoints.call == true %}
    // Make API calls using the call method
    $client->call('METHOD /path/to/{the}/operation', ['array' => 'with', 'paramters' => 'for', 'the' => 'operation']);
{% endif %}
{% if client.configuration.entryPoints.operations == true %}
    // Make API calls using the operations objects
    $client->operations()->group()->operation(array: 'with', paramters: 'for', the: 'operation');
{% endif %}
})();
```

{% if client.configuration.entryPoints.call == true or client.configuration.entryPoints.operations == true %}
## Supported operations

{% for operation in client.operations %}

### {{ operation.operationId }}

{{ operation.summary }}

{% if client.configuration.entryPoints.call == true %}
Using the `call` method:
```php
$client->call('{{ operation.matchMethod }} {{ operation.path }}'{% if operation.parameters|length > 0 %}, [
{% for parameter in operation.parameters %}        '{{ parameter.targetName }}' => {% if parameter.type == 'string' %}'{% endif %}{{ parameter.example.raw }}{% if parameter.type == 'string' %}'{% endif %},
{% endfor %}]{% endif %});
```
{% endif %}

{% if client.configuration.entryPoints.operations == true %}
Operations method:
```php
$client->operations()->{{ operation.groupCamel }}()->{{ operation.nameCamel }}({% if operation.parameters|length > 0 %}
{% for parameter in operation.parameters %}        {{ parameter.targetName }}: {% if parameter.type == 'string' %}'{% endif %}{{ parameter.example.raw }}{% if parameter.type == 'string' %}'{% endif %},
{% endfor %}{% endif %});
```
{% endif %}

{% if operation.externalDocs != null %}
You can find more about this operation over at the [{{ operation.externalDocs.description }}]({{ operation.externalDocs.url }}).
{% endif %}

{% endfor %}
{% endif %}

