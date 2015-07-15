<?php
/*
 * Application init user
 * @author Jiajun Wang
 */
namespace console\controllers;

use common\models\User;
class InitController extends \yii\console\Controller
{
    public function actionUser ()
    {
        echo "Create User ...";
        
        $username = $this->prompt('Input username:');
        $password = $this->prompt('Input password:');
        $email = $this->prompt('Input email:');
        
        
        
        $Model = new User();
        $Model->username = $username;
        $Model->password = $password;
        $Model->email = $email;
        if(!$Model->save()){        
            foreach($Model->getErrors() as $error){
                foreach($error as $e){
                    echo "$e\n";
                }
            }
            
            return 1;
        }
        return 0;
    }
    
    public function actionNav ()
    {
        
    }
    
}