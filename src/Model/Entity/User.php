<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $valid_state
 * @property \Cake\I18n\FrozenTime $last_login
 * @property int $fail_count
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $bodytype
 */
class User extends Entity
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
        'username' => true,
        'name' => true,
        'email' => true,
        'password' => true,
        'role' => true,
        'valid_state' => true,
        'last_login' => true,
        'fail_count' => true,
        'created' => true,
        'modified' => true,
        'bodytype' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
