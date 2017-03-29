<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersoenlichkeitenHasKategorien Model
 *
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersoenlichkeitenHasKategorien findOrCreate($search, callable $callback = null, $options = [])
 */
class PersoenlichkeitenHasKategorienTable extends Table
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

        $this->setTable('persoenlichkeiten_has_kategorien');
        $this->setDisplayField('Persoenlichkeiten_Pers_ID');
        $this->setPrimaryKey(['Persoenlichkeiten_Pers_ID', 'Kategorien_Kat_ID']);
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
            ->integer('Kategorien_Kat_ID')
            ->allowEmpty('Kategorien_Kat_ID', 'create');

        return $validator;
    }
}
