<?php


namespace App\Repository;


interface AdminUsersNotesRepositoryInterface
{
    public function index($userId);
    public function show();
    public function create($userId);
    public function store($userId,$request);
    public function edit($userId,$id);
    public function update($userId,$request,$id);
    public function destroy($userId,$id);
}
