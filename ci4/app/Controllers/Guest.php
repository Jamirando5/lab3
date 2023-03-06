<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    // ...

    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'guestbook',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a guest item'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['Name', 'Email', 'Website', 'Comment','Gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'Name' => 'required|max_length[255]|min_length[3]',
            'Email' => 'required|max_length[255]|min_length[3]',
            'Website' => 'required|max_length[255]|min_length[3]',
            'Comment'  => 'required|max_length[5000]|min_length[10]',
            'Gender' => 'required|max_length[255]|min_length[3]'
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a guest item'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'Name' => $post['Name'],
            'Email'  => $post['Email'],
            'Website'  => $post['Website'],
            'Comment'  => $post['Comment'],
            'Gender'  => $post['Email'],
        ]);

        return view('templates/header', ['title' => 'Create a guest item'])
            . view('guest/success')
            . view('templates/footer');
    }
}