<?php

namespace Api\Action;

/**
 * @SWG\Info(title="Phrest Skeleton", version="1.0")
 * @SWG\Get(
 *     path="/messages/{id}",
 *     operationId="messages",
 *     @SWG\Response(
 *      response="200",
 *      description="An example resource",
 *      @SWG\Schema(ref="#/definitions/Message"),
 *     ),
 *
 *     @SWG\Parameter(
 *      name="id",
 *      description="id",
 *      type="number",
 *      in="path",
 *      required=true
 *     )
 *
 * )
 */
class Messages extends \Phrest\API\AbstractSwaggerValidatorAction
    implements \Phrest\API\HateoasResponseGeneratorAwareInterface
{
    use \Phrest\API\HateoasResponseGeneratorAwareTrait;
    public function get(\Phrest\API\RequestSwaggerData $data): \Psr\Http\Message\ResponseInterface
    {
        $message = new \Api\Model\Message(
            $data->getPathValues()['id'],
            'Test-Message'
        );
        return $this->hateoasResponseGenerator->generate($message);
    }
}
