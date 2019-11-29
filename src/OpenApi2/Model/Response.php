<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi2\Model;

class Response extends \ArrayObject
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var Schema|FileSchema
     */
    protected $schema;
    /**
     * @var Header[]
     */
    protected $headers;
    /**
     * @var mixed[]
     */
    protected $examples;

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

    /**
     * @return Schema|FileSchema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param Schema|FileSchema $schema
     *
     * @return self
     */
    public function setSchema($schema): self
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return Header[]
     */
    public function getHeaders(): ?\ArrayObject
    {
        return $this->headers;
    }

    /**
     * @param Header[] $headers
     *
     * @return self
     */
    public function setHeaders(?\ArrayObject $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getExamples(): ?\ArrayObject
    {
        return $this->examples;
    }

    /**
     * @param mixed[] $examples
     *
     * @return self
     */
    public function setExamples(?\ArrayObject $examples): self
    {
        $this->examples = $examples;

        return $this;
    }
}
