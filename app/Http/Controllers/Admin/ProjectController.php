<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectList() {
        $project = new Projects();
        $list = $project->getProjectList();
        return view('admin.projects.index', ['data' => $list]);
    }

    public function createProject() {
        return view('admin.projects.create');
    }

    public function addProject(Request $request) {
        $data = $request->all();

        $project = new Projects();
        $project->createProject($data);
        return responsSuccess([], "新增成功");
    }

    public function deleteProject(Request $request) {
        $id = $request->get("id");
        $project = new Projects();
        $project->deleteProject($id);
        return responsSuccess([], "删除成功");
    }

    public function updateProject(Request $request) {
        $id = $request->get("id");
        $project = new Projects();
        $data = $project->getOne($id);

        return view('admin.projects.update', ['data' => $data]);
    }

    public function editProject(Request $request) {
        $data = $request->all();
        $project = new Projects();
        $project->updateProject($data);
        return responsSuccess([], "更新成功");
    }
}
