<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Resources Controller
 *
 * @property \App\Model\Table\ResourcesTable $Resources
 * @method \App\Model\Entity\Resource[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResourcesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        foreach (['add', 'edit', 'delete'] as $action)
            $this->Crud->mapAction($action, [
                'name' => 'Recurso',
            ]);
    }
}
