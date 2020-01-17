<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

/**
 * UserSearch represents the model behind the search form of `app\models\Users`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'phone', 'subject'], 'string'],
            ['is_contracted', 'boolean']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $subject)
    {
        $query = User::find();

        // conditions that should always apply
        $dataProvider = new ActiveDataProvider([
            'query' => $query->andFilterWhere([
                'status' => User::STATUS_NEW,
            ]),
        ]);

        $dataProvider->setPagination(new Pagination([
            'pageSize' => Yii::$app->params['pageSize'],
            'pageParam' => 'user-page'
        ]));

        $this->load($params);

        // grid filtering conditions
        $query->andFilterWhere(['subject' => User::SUBJECTS])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        if (isset($subject)) {
            $query->andFilterWhere(['subject' => $subject]);
        }

        if (in_array($this->is_contracted, [0 , 1])) {
            $query->andFilterWhere(['is_contracted' => $this->is_contracted]);
        }

        return $dataProvider;
    }
}
