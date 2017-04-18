<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medien Model
 *
 * @method \App\Model\Entity\Medien get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medien newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medien|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medien[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medien findOrCreate($search, callable $callback = null, $options = [])
 */
class MedienTable extends Table
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

        $this->setTable('medien');
        $this->setDisplayField('Med_ID');
        $this->setPrimaryKey(['Med_ID']);        //'Persönlichkeiten_Pers_ID'
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
            ->integer('Med_ID')
            ->allowEmpty('Med_ID', 'create');

        $validator
            ->allowEmpty('Typ');

        $validator
            ->allowEmpty('Dateipfad');

        $validator
            ->allowEmpty('Urheber');

        $validator
            ->allowEmpty('Erscheinungsdatum');

        $validator
            ->boolean('Freischaltung')
            ->allowEmpty('Freischaltung');

        $validator
            ->integer('Persönlichkeiten_Pers_ID')
            ->allowEmpty('Persönlichkeiten_Pers_ID', 'create');

        return $validator;
    }
}