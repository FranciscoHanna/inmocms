<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agency Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address_one
 * @property string $address_two
 * @property string $phone
 * @property string $email
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Property[] $properties
 */
class Agency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address_one' => true,
        'address_two' => true,
        'phone' => true,
        'email' => true,
        'updated_at' => true,
        'created_at' => true,
        'user_id' => true,
        'user' => true,
        'properties' => true
    ];
}
