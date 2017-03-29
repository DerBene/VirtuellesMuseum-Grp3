<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EpochenHasKategorien Model
 *
 * @method \App\Model\Entity\EpochenHasKategorien get($primaryKey, $options = [])
 * @method \App\Model\Entity\EpochenHasKategorien newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EpochenHasKategorien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EpochenHasKategorien|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EpochenHasKategorien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EpochenHasKategorien[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EpochenHasKategorien findOrCreate($search, callable $callback = null, $options = [])
 */
class EpochenHasKategorienTable extends Table
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

        $this->setTable('epochen_has_kategorien');
        $this->setDisplayField('Epochen_E_ID');
        $this->setPrimaryKey(['Epochen_E_ID', 'Kategorien_Kat_ID']);
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
            ->integer('Epochen_E_ID')
            ->allowEmpty('Epochen_E_ID', 'create');

        $validator
            ->integer('Kategorien_Kat_ID')
            ->allowEmpty('Kategorien_Kat_ID', 'create');

        return $validator;
    }
}
