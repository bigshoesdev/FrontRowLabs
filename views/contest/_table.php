<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<?php Pjax::begin(['id' => $pjaxId]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}{pager}',
        'tableOptions' => [
            'class' => 'table users-table'
        ],
        'rowOptions' => function ($model, $key, $index, $grid) {
            return [
                'id' => $model['id'],
                'class' => 'clickable-row'
            ];
        },
        'columns' => [
            [
                'attribute' => 'id',
                'label' => 'ID',
                'contentOptions' => ['class' => 'id-column'],
            ],
            [
                'attribute' => 'userName',
                'label' => 'C. Name',
                'contentOptions' => ['class' => 'name-column'],
                'headerOptions' => ['class' => 'name-column'],

            ],
            'name',
            'address',
            [
                'attribute' => 'devstageName',
                'label' => 'Stage'
            ],
            [
                'attribute' => 'industryName',
                'label' => 'Industry'
            ],
            [
                'attribute' => 'funding',
                'label' => 'Funding',
                'value' => function ($model) {
                    return $model->funding ? \app\models\Startup::FUNDING[$model->funding] : '';
                }
            ],
            [
                'attribute' => 'people_count',
                'label' => '# of people',
                'value' => function ($model) {
                    return $model->people_count ? \app\models\Startup::PEOPLE_COUNT[$model->people_count] : '';
                }
            ],
            [
                'attribute' => 'countFiles',
                'label' => 'Files'
            ],
            [
                'attribute' => 'userCommentCount',
                'label' => 'Notes'
            ],
            [
                'attribute' => 'rwd',
                'label' => 'Rwd.',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['class' => 'table-actions'],
                'header' => 'Actions',
                'template' => '{mail} {comment} {up} {down}',  // the default buttons + your custom button
                'buttons' => [
                    'up' => function($url,\app\models\Startup $model, $key) {
                        return Html::a('<img src="/images/icons/up-green.svg"/>',
                            '#',
                            [
                                'data-id' => $model->id,
                                'class' => 'startup_up action-button',
                                'title' => 'up'
                            ]);
                    },
                    'down' => function($url,\app\models\Startup $model, $key) {
                        return Html::a('<img src="/images/icons/red-down.svg"/>',
                            '#',
                            [
                                'data-id' => $model->id,
                                'class' => 'startup_down action-button',
                                'title' => 'Declined'
                            ]);
                    },
                    'comment' => function ($url,\app\models\Startup $model, $key) {
                        return Html::a('<img src="/images/icons/chat.svg"/>',
                            '#',
                            [
                                'title' => 'Add comment',
                                'class' => 'add_comment action-button' ,
                                'data-startup-id' => $model->id
                            ]);
                    },
                    'mail' => function($url,\app\models\Startup $model, $key) {
                        return Html::a('<img src="/images/icons/arroba.svg"/>',
                            '#',
                            [
                                'title' => 'Send mail',
                                'class' => 'send_mail action-button',
                                'data-user-id' => $model->user_id
                            ]);
                    },

                ]
            ]
        ]
    ]); ?>
<?php Pjax::end(); ?>
