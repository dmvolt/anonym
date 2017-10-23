<?php

namespace app\modules\multicontent\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\multicontent\models\Multicontent;

use app\modules\multicontent\Module;

/**
 * PartnersSearch represents the model behind the search form about `app\models\Partners`.
 */
class MulticontentSearch extends Multicontent
{
	public $id;
	public $type_id;
	public $title;
	public $date;
	public $teaser;
	public $body;
	public $alias;
	public $weight;
	public $status;
	public $date_from;
    public $date_to;
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'weight', 'status', 'lang_id'], 'integer'],
            [['title', 'alias', 'date'], 'safe'],
			[['date_from', 'date_to'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }
	
	/**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'date_from' => Module::t('module', 'MULTICONTENT_BACK_FORM_DATE_FROM'),
			'date_to' => Module::t('module', 'MULTICONTENT_BACK_FORM_DATE_TO'),
			
			'id' => Module::t('module', 'MULTICONTENT_BACK_FORM_ID'),
			'type_id' => Module::t('module', 'MULTICONTENT_BACK_FORM_TYPEID'),
            'date' => Module::t('module', 'MULTICONTENT_BACK_FORM_DATE'),
			'title' => Module::t('module', 'MULTICONTENT_BACK_FORM_TITLE'),
            
			'imageFile' => Module::t('module', 'MULTICONTENT_BACK_FORM_FILE'),
            'teaser' => Module::t('module', 'MULTICONTENT_BACK_FORM_TEASER'),
            'body' => Module::t('module', 'MULTICONTENT_BACK_FORM_BODY'),
            'alias' => Module::t('module', 'MULTICONTENT_BACK_FORM_ALIAS'),
            'weight' => Module::t('module', 'MULTICONTENT_BACK_FORM_WEIGHT'),
            'status' => Module::t('module', 'MULTICONTENT_BACK_FORM_STATUS'),
        ];
    }

    /**
     * @inheritdoc
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
    public function search($params)
    {
        $query = Multicontent::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
			'lang_id' => $this->lang_id,
			'type_id' => $this->type_id,
			'date' => $this->date,
            'weight' => $this->weight,
            'status' => $this->status,
			'alias' => $this->alias,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
			->andFilterWhere(['>=', 'date', $this->date_from ? strtotime($this->date_from . ' 00:00:00') : null])
            ->andFilterWhere(['<=', 'date', $this->date_to ? strtotime($this->date_to . ' 23:59:59') : null])
			->andFilterWhere(['like', 'alias', $this->alias]);

        return $dataProvider;
    }
}
