<?php


namespace App\Repository\Eloquent;


use App\Models\User;
use App\Models\UserNote;
use App\Repository\AdminUsersNotesRepositoryInterface;

class AdminUsersNotesRepository implements AdminUsersNotesRepositoryInterface
{
    private $userModel;
    private $userNoteModel;

    public function __construct(User $userModel,UserNote $userNoteModel)
    {
        $this->userModel = $userModel;
        $this->userNoteModel = $userNoteModel;
    }

    public function index($userId)
    {
        $userModel = $this->userModel;
        $data['user'] = $userModel->findOrFail($userId);
        $data['notes'] = $data['user']->notes()->paginate(6);
        return $data;
    }

    public function show()
    {
        $data['notes'] = $this->userNoteModel->paginate(6);
        return $data;
    }

    public function create($userId)
    {
        $userModel = $this->userModel;
        $data['user'] = $userModel->findOrFail($userId);
        return $data;
    }

    public function store($userId, $request)
    {
        $this->userModel->findOrFail($userId)->notes()->create([
            'creator_id' => 1, // auth()->id()
            'note' => $request['note']
        ]);

    }

    public function edit($userId, $id)
    {
        $userModel = $this->userModel;
        $data['user'] = $userModel->findOrFail($userId);
        $data['note'] = $data['user']->notes()->findOrFail($id);
        return $data;
    }

    public function update($userId, $request, $id)
    {
        $this->userNoteModel->findOrFail($id)->update([
            'note' => $request['note']
        ]);
    }

    public function destroy($userId, $id)
    {
        $this->userNoteModel->findOrFail($id)->delete();
    }
}
