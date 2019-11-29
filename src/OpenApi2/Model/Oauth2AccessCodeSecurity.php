<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi2\Model;

class Oauth2AccessCodeSecurity extends \ArrayObject
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $flow;
    /**
     * @var string[]
     */
    protected $scopes;
    /**
     * @var string
     */
    protected $authorizationUrl;
    /**
     * @var string
     */
    protected $tokenUrl;
    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlow(): ?string
    {
        return $this->flow;
    }

    /**
     * @param string $flow
     *
     * @return self
     */
    public function setFlow(?string $flow): self
    {
        $this->flow = $flow;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getScopes(): ?\ArrayObject
    {
        return $this->scopes;
    }

    /**
     * @param string[] $scopes
     *
     * @return self
     */
    public function setScopes(?\ArrayObject $scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationUrl(): ?string
    {
        return $this->authorizationUrl;
    }

    /**
     * @param string $authorizationUrl
     *
     * @return self
     */
    public function setAuthorizationUrl(?string $authorizationUrl): self
    {
        $this->authorizationUrl = $authorizationUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getTokenUrl(): ?string
    {
        return $this->tokenUrl;
    }

    /**
     * @param string $tokenUrl
     *
     * @return self
     */
    public function setTokenUrl(?string $tokenUrl): self
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
