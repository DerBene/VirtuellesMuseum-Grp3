<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Geographisch Model
 *
 * @method \App\Model\Entity\Geographisch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Geographisch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Geographisch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Geographisch|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Geographisch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Geographisch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Geographisch findOrCreate($search, callable $callback = null, $options = [])
 */
class GeographischTable extends Table
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

        $this->setTable('geographisch');
        $this->setDisplayField('Graph_ID');
        $this->setPrimaryKey('Graph_ID');
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
            ->integer('Graph_ID')
            ->allowEmpty('Graph_ID', 'create');

        $validator
            ->allowEmpty('Beschreibung');

        $validator
            ->allowEmpty('Ort');

        $validator
            ->allowEmpty('Land');

        return $validator;
    }
}
