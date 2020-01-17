<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;
$showContractedColumn = isset($showContractedColumn) && $showContractedColumn;
?>

<?php Pjax::begin(['id' => $pjaxId]); ?>
    <?= $this->render('_search', [
        'model' => $userSearchModel,
        'showContracted' => $showContractedColumn
    ]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}{pager}',
        'tableOptions' => [
            'class' => 'table users-table'
        ],
        'columns' => [
            [
                'attribute' => 'id',
                'label' => 'ID',
                'contentOptions' => ['class' => 'id-column'],
            ],
            [
                'attribute' => 'first_name',
                'contentOptions' => ['class' => 'name-column'],
                'headerOptions' => ['class' => 'name-column'],

            ],
            [
                'attribute' => 'last_name',
                'contentOptions' => ['class' => 'name-column'],
                'headerOptions' => ['class' => 'name-column'],

            ],
            'email:email',
            'phone',
            'company',
            'website',
            'message',
            [
                'attribute' => 'is_contracted',
                'value' => function($model) {
                    return $model->is_contracted ? 'Yes' : 'No';
                },
                'visible' => $showContractedColumn
            ],
            [
                'label' => 'Files',
                'format' => 'raw',
                'value' => function($model) {
                    $res = [];
                    foreach ($model->files as $path => $name) {
                        $res[] = Html::a($name, '/uploads/' . $path, ['target' => '_blank', 'data-pjax' => 0]);
                    }
                    return implode("<br/>", $res);
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['class' => 'table-actions'],
                'header' => 'Actions',
                'template' => '{mail} {remove} {make-contracted}',  // the default buttons + your custom button
                'buttons' => [
                    'mail' => function($url,\app\models\User $model, $key) {
                        return Html::a('<img src="/images/icons/arroba.svg"/>',
                            '#',
                            [
                                'title' => 'Send mail',
                                'class' => 'send_mail action-button',
                                'data-user-id' => $model->id
                            ]);
                    },
                    'remove' => function($url,\app\models\User $model, $key) use ($pjaxId) {
                        return Html::a('<span class="glyphicon glyphicon-remove"/>',
                            '#',
                            [
                                'data-id' => $model->id,
                                'data-pjax-id' => $pjaxId,
                                'class' => 'user-remove action-button',
                                'title' => 'Remove'
                            ]);
                    },
                    'make-contracted' => function($url,\app\models\User $model, $key) use ($showContractedColumn, $pjaxId) {

                        $btnClass = $model->is_contracted ? 'is-contracted' : '';
                        return $showContractedColumn
                            ? Html::a('<span class="glyphicon glyphicon-file"/>',
                            '#',
                            [
                                'data-id' => $model->id,
                                'data-pjax-id' => $pjaxId,
                                'class' => 'user-contracted-btn action-button ' . $btnClass,
                                'title' => $model->is_contracted ? 'Remove From Contracted' : 'Make Contracted'
                            ])
                            : '';
                    },
                ]
            ]
        ]
    ]); ?>
<?php Pjax::end(); ?>
