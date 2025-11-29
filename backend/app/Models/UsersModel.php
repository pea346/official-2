<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $useSoftDeletes = true;
    protected $protectFields  = true;

    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'password_hash',
        'type',
        'account_status',
        'email_activated',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Auto-manage timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'first_name'    => 'required|min_length[2]|max_length[50]',
        'last_name'     => 'required|min_length[2]|max_length[50]',
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        // password_hash can be empty during update
        'password_hash' => 'permit_empty|min_length[6]'
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'This email is already taken.'
        ]
    ];

    // ❌ Removed beforeInsert/beforeUpdate → no more double-hashing!
}
