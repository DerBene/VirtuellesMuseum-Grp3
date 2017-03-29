<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersoenlichkeitenHasEpochen Model
 *
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasEpochen findOrCreate($search, callable $callback = null, $options = [])
 */
class PersoenlichkeitenHasEpochenTable extends Table
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

        $this->setTable('persoenlichkeiten_has_epochen');
        $this->setDisplayField('Persoenlichkeiten_Pers_ID');
        $this->setPrimaryKey(['Persoenlichkeiten_Pers_ID', 'Epochen_E_ID']);
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
            ->integer('Persoenlichkeiten_Pers_ID')
            ->allowEmpty('Persoenlichkeiten_Pers_ID', 'create');

        $validator
            ->integer('Epochen_E_ID')
            ->allowEmpty('Epochen_E_ID', 'create');

        return $validator;
    }
}
