<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GistComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GistSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Gists
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function updateComment(array $params): GistComment
    {
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        $operator = new Internal\Operator\Gists\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());

        return $operator->call($arguments['gist_id'], $arguments['comment_id'], $params);
    }

    /** @return */
    public function update(array $params): GistSimple
    {
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        $operator = new Internal\Operator\Gists\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());

        return $operator->call($arguments['gist_id'], $params);
    }
}
