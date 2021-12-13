<?php

namespace App\Http\Controllers\Web\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUsersNotesRequest;
use App\Models\User;
use App\Repository\AdminUsersNotesRepositoryInterface;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;

class NotesController extends Controller
{
    private $adminUsersNotesRepository;

    public function __construct(AdminUsersNotesRepositoryInterface $adminUsersNotesRepository)
    {
        $this->adminUsersNotesRepository = $adminUsersNotesRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $userId
     * @return Application|Factory|View|Response
     */
    public function index($userId)
    {
        $data = $this->adminUsersNotesRepository->index($userId);
        return view('admin.users.notes.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $userId
     * @return Application|Factory|View|Response
     */
    public function create($userId)
    {
        $data = $this->adminUsersNotesRepository->create($userId);
        return view('admin.users.notes.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $userId
     * @param AdminUsersNotesRequest $request
     * @return RedirectResponse|Response
     */
    public function store($userId,AdminUsersNotesRequest $request)
    {
        try {
            $this->adminUsersNotesRepository->store($userId,$request->validated());
            return redirect()->route('admin.users.notes.index',['user'=>$userId])->with('success','Note is Created');
        } catch (Exception $exception)
        {
            Log::error($exception);
            return back()->with('error','User note is not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View|Response
     */
    public function show()
    {
        $data = $this->adminUsersNotesRepository->show();
        return view('admin.users.notes.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $userId
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit($userId, int $id)
    {
        $data = $this->adminUsersNotesRepository->edit($userId,$id);
        return view('admin.users.notes.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $userId
     * @param AdminUsersNotesRequest $request
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function update($userId,AdminUsersNotesRequest $request,int $id)
    {
        try {
            $this->adminUsersNotesRepository->update($userId,$request->validated(),$id);
            return redirect()->route('admin.users.notes.index',['user'=>$userId])->with('success','Note is Updated');
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back()->with('error','User note is not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $userId
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function destroy($userId,int $id)
    {
        try {
            $this->adminUsersNotesRepository->destroy($userId,$id);
            return back()->with('error','User note is  Deleted');
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back()->with('error','User note is not Deleted');
        }
    }
}
