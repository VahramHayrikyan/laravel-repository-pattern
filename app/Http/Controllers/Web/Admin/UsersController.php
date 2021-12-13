<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUsersRequest;
use App\Repository\AdminUsersRepositoryInterface;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    private $adminUsersRepository;

    public function __construct(AdminUsersRepositoryInterface $adminUsersRepository)
    {
        $this->adminUsersRepository = $adminUsersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|RedirectResponse|Response
     */
    public function index()
    {
        try {
            $data = $this->adminUsersRepository->index();
            return view('admin.users.index',compact('data'));
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdminUsersRequest $request
     * @return RedirectResponse|Response
     */
    public function store(AdminUsersRequest $request)
    {
        try {
            $this->adminUsersRepository->store($request->validated());
            return redirect()->route('admin.users.index');
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|RedirectResponse|Response
     */
    public function edit(int $id)
    {
        try {
            $user = $this->adminUsersRepository->edit($id);
            return view('admin.users.edit',compact('user'));
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminUsersRequest $request
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function update(AdminUsersRequest $request, int $id)
    {

        try {
             $this->adminUsersRepository->update($request->validated(),$id);
            return redirect()->route('admin.users.index');
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function destroy(int $id)
    {
        try {
            $this->adminUsersRepository->destroy($id);
            return back()->with('success','User is Destroyed ');
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back();
        }
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function banUser($id): RedirectResponse
    {

        try {
            $message = $this->adminUsersRepository->banUser((int) $id);
            return back()->with('success',$message);
        }catch (Exception $exception)
        {
            Log::error($exception);
            return back();
        }
    }
}
