<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Werke Model
 *
 * @method \App\Model\Entity\Werke get($primaryKey, $options = [])
 * @method \App\Model\Entity\Werke newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Werke[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Werke|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Werke patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Werke[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Werke findOrCreate($search, callable $callback = null, $options = [])
 */
class WerkeTable extends Table
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

        $this->setTable('werke');
        $this->setDisplayField('Werk_ID');
        $this->setPrimaryKey(['Werk_ID', 'Geographisch_Graph_ID']);
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
            ->integer('Werk_ID')
            ->requirePresence('Werk_ID', 'create')
            ->notEmpty('Werk_ID');

        $validator
            ->requirePresence('Titel', 'create')
            ->notEmpty('Titel');

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
            ->integer('Geographisch_Graph_ID')
            ->requirePresence('Geographisch_Graph_ID', 'create')
            ->notEmpty('Geographisch_Graph_ID');

        return $validator;
    }
}
