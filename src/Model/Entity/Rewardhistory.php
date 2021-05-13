<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rewardhistory Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $prize_id
 * @property \Cake\I18n\FrozenTime $created
 * @property string $del_flg
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Prize $prize
 */
class Rewardhistory extends Entity
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
        '*' => true,
        'id' => false
    ];
}