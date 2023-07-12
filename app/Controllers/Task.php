<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Task extends BaseController
{
    public function index()
    {
        // Cek apakah user sudah login
        $session = session();
        if (!$session->has('user_id')) {
            return redirect()->to('/');
        }

        $userId = $session->get('user_id');

        // Ambil daftar tugas untuk user yang sedang login
        $model = new TaskModel();
        $tasks = $model->getUserTasks($userId);

        // Tampilkan halaman daftar tugas
        return view('tasks', ['tasks' => $tasks]);
    }

    public function create()
    {
        // Tampilkan form tambah tugas
        return view('create_task');
    }

    public function store()
    {
        // Cek apakah user sudah login
        $session = session();
        if (!$session->has('user_id')) {
            return redirect()->to('/');
        }

        $userId = $session->get('user_id');
        $taskName = $this->request->getPost('task_name');

        // Simpan tugas ke database
        $model = new TaskModel();
        $model->addTask($userId, $taskName);

        return redirect()->to('/tasks');
    }
    public function edit($id)
    {
        $model = new TaskModel();
        $task = $model->find($id);

        if (!$task) {
            return redirect()->to('/tasks')->with('error', 'Tugas tidak ditemukan.');
        }

        return view('edit_task', ['task' => $task]);
    }

    public function update($id)
    {
        $model = new TaskModel();
        $task = $model->find($id);

        if (!$task) {
            return redirect()->to('/tasks')->with('error', 'Tugas tidak ditemukan.');
        }

        $newTaskName = $this->request->getPost('task_name');
        $data = [
            'task_name' => $newTaskName
        ];
        $model->update($id, $data);

        return redirect()->to('/tasks')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $task = $model->find($id);

        if (!$task) {
            return redirect()->to('/tasks')->with('error', 'Tugas tidak ditemukan.');
        }

        $model->delete($id);

        return redirect()->to('/tasks')->with('success', 'Tugas berhasil dihapus.');
    }
}
