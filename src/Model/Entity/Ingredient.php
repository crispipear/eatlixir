<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ingredient Entity
 *
 * @property int $id
 * @property string $common_name
 * @property string $scientific_name
 * @property string $chinese_name
 * @property string $pinyin
 * @property string $nature
 * @property string $flavor
 * @property string $functions
 * @property string $symptoms_key
 * @property string $img
 */
class Ingredient extends Entity
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
        'common_name' => true,
        'scientific_name' => true,
        'chinese_name' => true,
        'pinyin' => true,
        'nature' => true,
        'flavor' => true,
        'functions' => true,
        'symptoms_key' => true,
        'img' => true
    ];
}
