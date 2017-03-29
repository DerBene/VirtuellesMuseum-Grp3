<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Epochen Model
 *
 * @method \App\Model\Entity\Epochen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Epochen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Epochen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Epochen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Epochen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Epochen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Epochen findOrCreate($search, callable $callback = null, $options = [])
 */
class EpochenTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('epochen');
        $this->setDisplayField('E_ID');
        $this->setPrimaryKey('E_ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('E_ID')
            ->allowEmpty('E_ID', 'create');

        $validator
            ->allowEmpty('Start');

        $validator
            ->allowEmpty('Ende');

        return $validator;
    }
}
