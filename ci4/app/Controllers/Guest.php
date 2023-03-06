<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    // ...

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

        $post = $this->request->getPost(['title', 'body']);

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
            'name' => $post['name'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'gender'  => $post['email'],
        ]);

        return view('templates/header', ['title' => 'Create a guest item'])
            . view('guest/success')
            . view('templates/footer');
    }
=======
<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    public function index()
    {
    $model = model(GuestModel::class);

    $data = [
        'guest' => $model->getGuest(),
        'title' => 'Guestbook',
    ];

    return view('templates/header', $data)
         . view('guest/index')
         .view('templates/footer');
    }
>>>>>>> a96ea40d089e43b439359b07b4cc5ca6666a7e66
}