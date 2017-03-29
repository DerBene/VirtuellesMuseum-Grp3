<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kategorien Model
 *
 * @method \App\Model\Entity\Kategorien get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kategorien newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kategorien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kategorien|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kategorien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kategorien[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kategorien findOrCreate($search, callable $callback = null, $options = [])
 */
class KategorienTable extends Table
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

        $this->setTable('kategorien');
        $this->setDisplayField('Kat_ID');
        $this->setPrimaryKey('Kat_ID');
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
            ->integer('Kat_ID')
            ->allowEmpty('Kat_ID', 'create');

        $validator
            ->allowEmpty('Name');

        $validator
            ->allowEmpty('Unterkategorie');

        $validator
            ->allowEmpty('Beschreibung');

        return $validator;
    }
}
