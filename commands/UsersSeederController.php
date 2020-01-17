<?php

namespace app\commands;

use app\models\User;
use yii\console\Controller;
use yii\console\ExitCode;

class UsersSeederController extends Controller
{
    /**
     * This command add some users to database.
     * @return int Exit code
     */
    public function actionIndex()
    {
        (new User([
            'name' => 'Admin Jdev',
            'username' => 'admin',
            'email' => 'admin@jdev.com.ua',
            'password' => '$2y$13$XZ31kQT9JhOc7hJp9.YJFOoYYNvesWa8SL1YOWFN6nl7T2nqpHbP.',
        ]))->save();
        (new User([
            'name' => 'Demo Account',
            'username' => 'demo',
            'email' => 'demo@demo.demo',
            'password' => '$2y$13$19fEwWojmFOIyrS0bohhdOr1sByEohmb/ca41VEDKBHro7bBaW1nS',
        ]))->save();

        return ExitCode::OK;
    }
}
