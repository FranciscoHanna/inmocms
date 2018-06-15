<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property string $title
 * @property string $address_one
 * @property string $address_two
 * @property float $area
 * @property string $type
 * @property float $price
 * @property int $bedrooms
 * @property string $description
 * @property int $bathrooms
 * @property bool $garage
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $agency_id
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Picture[] $pictures
 */
class Property extends Entity
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
        'title' => true,
        'address_one' => true,
        'address_two' => true,
        'area' => true,
        'type' => true,
        'price' => true,
        'bedrooms' => true,
        'description' => true,
        'bathrooms' => true,
        'garage' => true,
        'created_at' => true,
        'updated_at' => true,
        'agency_id' => true,
        'agency' => true,
        'comments' => true,
        'pictures' => true
    ];
}
