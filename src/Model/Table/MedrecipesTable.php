<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medrecipes Model
 *
 * @method \App\Model\Entity\Medrecipe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medrecipe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medrecipe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medrecipe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medrecipe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medrecipe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medrecipe findOrCreate($search, callable $callback = null, $options = [])
 */
class MedrecipesTable extends Table
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

        $this->setTable('medrecipes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('chinese_name')
            ->allowEmpty('chinese_name');

        $validator
            ->scalar('functions')
            ->allowEmpty('functions');

        $validator
            ->scalar('indications')
            ->allowEmpty('indications');

        $validator
            ->scalar('ingredients')
            ->allowEmpty('ingredients');

        $validator
            ->scalar('instructions')
            ->allowEmpty('instructions');

        $validator
            ->scalar('uses')
            ->allowEmpty('uses');

        $validator
            ->scalar('img')
            ->allowEmpty('img');

        return $validator;
    }
}
