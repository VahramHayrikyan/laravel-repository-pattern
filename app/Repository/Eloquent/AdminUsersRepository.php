<?php


namespace App\Repository\Eloquent;


use App\Models\User;
use App\Repository\AdminUsersRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AdminUsersRepository implements AdminUsersRepositoryInterface
{
    /**
     * @var User
     */
    private $userModel;

    /**
     * AdminUsersRepository constructor.
     * @param User $userModel
     */
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * @return array
     */
    public function index(): array
    {
        $userModel = $this->userModel;
        $data['userCount'] = $userModel->count();
        $data['users'] = $userModel->orderBy('timestamp', 'DESC')->paginate(100);
        return $data;
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function store($request = [])
    {
        return $this->userModel->create([
            "username" => $request['username'],
            "email" => $request['email'],
            "password" => Hash::make($request['password']),
            "points" => 0,
            "credit" => 0.0,
            "phone" => $request['phone'],
            "role" => $request['role'],
            "trusted_customer" => $request['trusted_customer'],
        ]);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->userModel->findOrFail($id);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        return $this->userModel->findOrFail($id)->update([
            "username" => $request['username'],
            "email" => $request['email'],
            "points" => 0,
            "credit" => 0.0,
            "phone" => $request['phone'],
            "role" => $request['role'],
            "trusted_customer" => $request['trusted_customer'],
        ]);
    }

    public function destroy($id)
    {
        return $this->userModel->findOrFail($id)->delete();
    }

    public function banUser($id): string
    {
        $user = $this->userModel->findOrFail($id);
        if ($user->role == 'banned') {
            $user->update(['role' => 'user']);
            $message = 'User is unblocked';
        } else {
            $user->update(['role' => 'banned']);
            $message = 'User is blocked';
        }
        return $message;
    }
}
