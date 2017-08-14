<?php

namespace Api\Model;

/**
 * @SWG\Definition(
 *      definition="Message",
 *      type="object",
 *      required={"id", "name"},
 *      @SWG\Property(
 *          property="id",
 *          type="number",
 *          format="int64"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          type="string"
 *      )
 *  )
 */

/**
 * @Hateoas\Configuration\Annotation\Relation("self", href = "expr('/api/messages/' ~ object.getId())")
 */
class Message
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }
}