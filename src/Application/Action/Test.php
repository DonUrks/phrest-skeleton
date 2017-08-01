<?php
namespace Application\Action;

/**
 * @SWG\Info(title="My First API2", version="0.1")
 * @SWG\Get(
 *     path="/api/swagger",
 *     @SWG\Response(response="200", description="An example resource")
 * )
 */
class Test extends \Phrest\API\AbstractAction
{
    /**
     * @var \Phrest\API\HateoasResponseGenerator
     */
    private $hateoasResponseGenerator;

    /**
     * @var \Phrest\API\RequestBodyValidator
     */
    private $requestBodyValidator;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Phrest\API\RequestBodyValidator $requestBodyValidator, \Phrest\API\HateoasResponseGenerator $hateoasResponseGenerator)
    {
        parent::__construct($logger);

        $this->requestBodyValidator = $requestBodyValidator;
        $this->hateoasResponseGenerator = $hateoasResponseGenerator;
    }

    public function get(\Psr\Http\Message\ServerRequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        $user = new \Application\Model\User(
            34,
            'Adrien',
            'Brault'
        );
        return $this->hateoasResponseGenerator->generate($user);
    }
}
