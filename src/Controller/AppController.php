<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Crud\Controller\ControllerTrait;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    use ControllerTrait;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        $this->loadComponent('FormProtection');

        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'add' => [
                    'className' => 'Crud.Add',
                    'messages' => [
                        'success' => [
                            'text' => '{name} Salvo com Sucesso',
                        ],
                        'error' => [
                            'text' => 'Não foi possivel salvar {name}',
                        ],
                    ],
                ],
                'edit' => [
                    'className' => 'Crud.Edit',
                    'messages' => [
                        'success' => [
                            'text' => '{name} Atualizado com Sucesso',
                        ],
                        'error' => [
                            'text' => 'Não foi possivel atualizar o {name}',
                        ],
                    ],
                ],
                'delete' => [
                    'className' => 'Crud.Delete',
                    'messages' => [
                        'success' => [
                            'text' => '{name} Deletado com Sucesso',
                        ],
                        'error' => [
                            'text' => 'Não foi possivel deletar o {name}',
                        ],
                    ],
                ],
                'Crud.Lookup',
            ],
        ]);
    }
}
