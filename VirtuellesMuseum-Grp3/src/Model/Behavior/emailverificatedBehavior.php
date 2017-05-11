<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Inflector;

class emailverificatedBehavior extends Behavior
{
	
	protected $_defaultConfig = [
        'field' => 'emailverificated',
        'emailverificated' => 'emailverificated',
        'replacement' => false
    ];

    public function emailverificated(Entity $entity)
    {
        $config = $this->config();
        $value = $entity->get($config['field']);
        $entity->set($config['emailverificated'], Inflector::slug($value, $config['replacement']));
    }

    public function beforeSave(Event $event, EntityInterface $entity)
    {
        $this->emailverificated($entity);
    }


}