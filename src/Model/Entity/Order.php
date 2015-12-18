<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 *
 * @property int $order_id
 * @property \App\Model\Entity\Order $order
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $title
 * @property int $status
 * @property int $date
 */
class Order extends Entity
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
        'order_id' => false,
    ];

    protected function _getFullStatus(){
        $status = null;
        switch($this->_properties['status']):
            case 0:
                $status = 'In Progress';
                break;
            case 1:
                $status = 'Ready';
                break;
            default:
                $status = '--';
                break;
        endswitch;

        return $status;
    }
}
