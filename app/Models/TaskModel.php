<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'task_name'];

    public function getUserTasks($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }

    public function addTask($userId, $taskName)
    {
        $data = [
            'user_id' => $userId,
            'task_name' => $taskName
        ];

        $this->insert($data);
    }
}
