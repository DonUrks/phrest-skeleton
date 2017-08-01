<?php
namespace Application\Model;

/**
 * @SWG\Definition(
 *      definition="User",
 *      type="object",
 *      required={"id", "firstName", "lastName"},
 *      @SWG\Property(
 *          property="id",
 *          format="int64"
 *      ),
 *      @SWG\Property(
 *          property="firstName",
 *          format="string"
 *      ),
 *      @SWG\Property(
 *          property="lastName",
 *          format="string"
 *      ),
 *  )
 */

/**
 * @Hateoas\Configuration\Annotation\Relation("self", href = "expr('/api/users/' ~ object.getId())")
 */
class User
{
    private $id;
    private $firstName;
    private $lastName;

    public function __construct($id, $firstName, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getId() {
        return $this->id;
    }
}
