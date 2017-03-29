<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persoenlichkeiten Model
 *
 * @method \App\Model\Entity\Persoenlichkeiten get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persoenlichkeiten newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persoenlichkeiten[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persoenlichkeiten|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persoenlichkeiten patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persoenlichkeiten[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persoenlichkeiten findOrCreate($search, callable $callback = null, $options = [])
 */
class PersoenlichkeitenTable extends Table
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

        $this->setTable('persoenlichkeiten');
        $this->setDisplayField('Pers_ID');
        $this->setPrimaryKey('Pers_ID');
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
            ->integer('Pers_ID')
            ->allowEmpty('Pers_ID', 'create');

        $validator
            ->allowEmpty('Name');

        $validator
            ->allowEmpty('Kurzbeschreibung');

        $validator
            ->allowEmpty('Zitat');

        $validator
            ->allowEmpty('LangerText');

        $validator
            ->allowEmpty('BiografischeDaten');

        $validator
            ->boolean('Freischaltung')
            ->allowEmpty('Freischaltung');

        return $validator;
    }
}
