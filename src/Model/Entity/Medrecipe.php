<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medrecipe Entity
 *
 * @property int $id
 * @property string $name
 * @property string $chinese_name
 * @property string $functions
 * @property string $indications
 * @property string $ingredients
 * @property string $instructions
 * @property string $uses
 * @property string $img
 */
class Medrecipe extends Entity
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
        'chinese_name' => true,
        'functions' => true,
        'indications' => true,
        'ingredients' => true,
        'instructions' => true,
        'uses' => true,
        'img' => true
    ];
}
