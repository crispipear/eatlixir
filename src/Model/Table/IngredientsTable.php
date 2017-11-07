<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ingredients Model
 *
 * @method \App\Model\Entity\Ingredient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ingredient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ingredient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ingredient|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ingredient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ingredient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ingredient findOrCreate($search, callable $callback = null, $options = [])
 */
class IngredientsTable extends Table
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

        $this->setTable('ingredients');
        $this->setDisplayField('id');
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
            ->scalar('common_name')
            ->allowEmpty('common_name');

        $validator
            ->scalar('scientific_name')
            ->allowEmpty('scientific_name');

        $validator
            ->scalar('chinese_name')
            ->allowEmpty('chinese_name');

        $validator
            ->scalar('pinyin')
            ->allowEmpty('pinyin');

        $validator
            ->scalar('nature')
            ->allowEmpty('nature');

        $validator
            ->scalar('flavor')
            ->allowEmpty('flavor');

        $validator
            ->scalar('functions')
            ->allowEmpty('functions');

        $validator
            ->scalar('symptoms_key')
            ->allowEmpty('symptoms_key');

        $validator
            ->scalar('img')
            ->allowEmpty('img');

        return $validator;
    }
}
