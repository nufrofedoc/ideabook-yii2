<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Card]].
 *
 * @see \app\models\Card
 */
class CardQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Card[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Card|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function byUser($id)
    {
        return $this->andWhere(['created_by' => $id]);
    }
}
