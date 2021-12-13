<?php


namespace App\Repository;


interface AdminUsersRepositoryInterface
{

    public function index();
    public function store($request);
    public function edit($id);
    public function update($request,$id);
    public function destroy($id);
    public function banUser($id);
}
