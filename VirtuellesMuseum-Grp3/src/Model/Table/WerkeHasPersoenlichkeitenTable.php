<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WerkeHasPersoenlichkeiten Model
 *
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten get($primaryKey, $options = [])
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WerkeHasPersoenlichkeiten findOrCreate($search, callable $callback = null, $options = [])
 */
class WerkeHasPersoenlichkeitenTable extends Table
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

        $this->setTable('werke_has_persoenlichkeiten');
        $this->setDisplayField('Werke_Werk_ID');
        $this->setPrimaryKey(['Werke_Werk_ID', 'Persoenlichkeiten_Pers_ID']);
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
            ->integer('Werke_Werk_ID')
            ->allowEmpty('Werke_Werk_ID', 'create');

        $validator
            ->integer('Persoenlichkeiten_Pers_ID')
            ->allowEmpty('Persoenlichkeiten_Pers_ID', 'create');

        return $validator;
    }
}
